<?php

declare(strict_types=1);

namespace SimpleSAML\Module\campusMultiauth\Auth\Source;

use Exception;
use SimpleSAML\Auth;
use SimpleSAML\Auth\Source;
use SimpleSAML\Auth\State;
use SimpleSAML\Configuration;
use SimpleSAML\Error;
use SimpleSAML\Logger;
use SimpleSAML\Module;
use SimpleSAML\Module\core\Auth\UserPassBase;
use SimpleSAML\Session;
use SimpleSAML\Utils;

class Campusidp extends Source
{
    public const AUTHID = '\SimpleSAML\Module\campusidp\Auth\Source\Campusidp.AuthId';
    public const STAGEID_USERPASS = '\SimpleSAML\Module\core\Auth\UserPassBase.state';
    public const SOURCESID = '\SimpleSAML\Module\campusidp\Auth\Source\Campusidp.SourceId';
    public const SESSION_SOURCE = 'campusMultiauth:selectedSource';
    public const USER_PASS_SOURCE_NAME = 'userPassSourceName';
    public const SP_SOURCE_NAME = 'spSourceName';
    public const COOKIE_PREFIX = 'campusidp_';
    public const COOKIE_IDP_ENTITY_ID = 'idpentityid';
    public const COOKIE_INSTITUTION_NAME = 'institution_name';
    public const COOKIE_INSTITUTION_IMG = 'institution_img';
    public const COOKIE_COMPONENT_INDEX = 'component_index';
    public const COOKIE_USERNAME = 'username';
    public const COOKIE_PASSWORD = 'password';

    private $sources;
    private $userPassSourceName;
    private $spSourceName;


    public function __construct($info, $config)
    {
        parent::__construct($info, $config);

        $this->sources = [];

        $this->userPassSourceName = !empty($config['userPassSource']['name']) ? $config['userPassSource']['name'] : 'campus-userpass';

        $userPassClassRef = [];
        if (!empty($config['userPassSource']['AuthnContextClassRef'])) {
            $ref = $config['userPassSource']['AuthnContextClassRef'];
            if (is_string($ref)) {
                $userPassClassRef = [$ref];
            } else {
                $userPassClassRef = $ref;
            }
        }

        $this->sources[] = [
            'source' => $this->userPassSourceName,
            'AuthnContextClassRef' => $userPassClassRef,
        ];

        $this->spSourceName = !empty($config['spSource']['name']) ? $config['spSource']['name'] : 'default-sp';

        $spClassRef = [];
        if (!empty($config['spSource']['AuthnContextClassRef'])) {
            $ref = $config['spSource']['AuthnContextClassRef'];
            if (is_string($ref)) {
                $spClassRef = [$ref];
            } else {
                $spClassRef = $ref;
            }
        }

        $this->sources[] = [
            'source' => $this->spSourceName,
            'AuthnContextClassRef' => $spClassRef,
        ];
    }

    public function authenticate(&$state)
    {
        if (array_key_exists('aarc_idp_hint', $_REQUEST)) {
            $state['aarc_idp_hint'] = $_REQUEST['aarc_idp_hint'];
        }

        if (array_key_exists('idphint', $_REQUEST)) {
            $state['idphint'] = $_REQUEST['idphint'];
        }

        $state[self::AUTHID] = $this->authId;
        $state[self::SOURCESID] = $this->sources;
        $state[self::USER_PASS_SOURCE_NAME] = $this->userPassSourceName;
        $state[self::SP_SOURCE_NAME] = $this->spSourceName;

        // Save the $state array, so that we can restore if after a redirect
        $id = State::saveState($state, self::STAGEID_USERPASS);

        /* Redirect to the select source page. We include the identifier of the
         * saved state array as a parameter to the login form
         */
        $url = Module::getModuleURL('campusMultiauth/selectsource.php');
        $params = ['AuthState' => $id];

        Utils\HTTP::redirectTrustedURL($url, $params);

        // The previous function never returns, so this code is never executed
        assert(false);
    }

    public static function delegateAuthentication($authId, $state)
    {
        $as = Auth\Source::getById($authId);
        $valid_sources = array_map(
            function ($src) {
                return $src['source'];
            },
            $state[self::SOURCESID]
        );
        if ($as === null || !in_array($authId, $valid_sources, true)) {
            throw new Exception('Invalid authentication source: ' . $authId);
        }

        // Save the selected authentication source for the logout process.
        $session = Session::getSessionFromRequest();
        $session->setData(
            self::SESSION_SOURCE,
            $state[self::AUTHID],
            $authId,
            Session::DATA_TIMEOUT_SESSION_END
        );

        try {
            if (!empty($_POST['username']) && !empty($_POST['password']) && is_subclass_of($as, '\SimpleSAML\Module\core\Auth\UserPassBase')) {
                $state[UserPassBase::AUTHID] = $authId;

                try {
                    UserPassBase::handleLogin(
                        State::saveState($state, UserPassBase::STAGEID),
                        $_POST['username'],
                        $_POST['password']
                    );
                } catch (\SimpleSAML\Error\Error $e) {
                    if ($e->getMessage() === 'WRONGUSERPASS') {
                        $id = State::saveState($state, self::STAGEID_USERPASS);
                        $url = Module::getModuleURL('campusMultiauth/selectsource.php');
                        $params = [
                            'AuthState' => $id,
                            'wrongUserPass' => true
                        ];

                        Utils\HTTP::redirectTrustedURL($url, $params);
                    } else {
                        throw $e;
                    }
                }

            } else {
                $as->authenticate($state);
            }
        } catch (Error\Exception $e) {
            Auth\State::throwException($state, $e);
        } catch (Exception $e) {
            $e = new UnserializableException($e);
            Auth\State::throwException($state, $e);
        }
        Auth\Source::completeAuth($state);
    }

    public static function getCookie($name)
    {
        $prefixedName = self::COOKIE_PREFIX . $name;
        if (array_key_exists($prefixedName, $_COOKIE)) {
            return $_COOKIE[$prefixedName];
        } else {
            return null;
        }
    }

    public static function setCookie($name, $value)
    {
        $prefixedName = self::COOKIE_PREFIX . $name;

        $params = [
            // we save the cookies for 90 days
            'lifetime' => (60 * 60 * 24 * 90),
            // the base path for cookies. This should be the installation directory for SimpleSAMLphp
            'path'     => Configuration::getInstance()->getBasePath(),
            'httponly' => false,
        ];

        Utils\HTTP::setCookie($prefixedName, $value, $params, false);
    }

    public static function getMostSquareLikeImg($idpentry)
    {
        if (!empty($idpentry['UIInfo']['Logo'])) {
            if (1 === count($idpentry['UIInfo']['Logo'])) {
                $item['image'] = $idpentry['UIInfo']['Logo'][0]['url'];
            } else {
                $logoSizeRatio = 1; // impossible value
                $candidateLogoUrl = null;

                foreach ($idpentry['UIInfo']['Logo'] as $logo) {
                    $ratio = abs($logo['height'] - $logo['width']) / ($logo['height'] + $logo['width']);

                    if ($ratio < $logoSizeRatio) { // then we found more square-like logo
                        $logoSizeRatio = $ratio;
                        $candidateLogoUrl = $logo['url'];
                    }
                }

                $item['image'] = $candidateLogoUrl;
            }

            return $item['image'];
        } else {
            return '';
        }
    }

    public function logout(&$state)
    {
        assert(is_array($state));

        // Get the source that was used to authenticate
        $session = Session::getSessionFromRequest();
        $authId = $session->getData(self::SESSION_SOURCE, $this->authId);

        $source = Auth\Source::getById($authId);
        if ($source === null) {
            throw new Exception('Invalid authentication source during logout: ' . $authId);
        }
        // Then, do the logout on it
        $source->logout($state);
    }
}
