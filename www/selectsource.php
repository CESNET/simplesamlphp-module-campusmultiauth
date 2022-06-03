<?php

use SimpleSAML\Auth\State;
use SimpleSAML\Configuration;
use SimpleSAML\Error\BadRequest;
use SimpleSAML\Logger;
use SimpleSAML\Module;
use SimpleSAML\Module\campusMultiauth\Auth\Source\Campusidp;
use SimpleSAML\XHTML\Template;
use League\CommonMark\CommonMarkConverter;

if (!array_key_exists('AuthState', $_REQUEST) && !array_key_exists('authstate', $_POST)) {
    throw new BadRequest('Missing AuthState parameter.');
}

empty($_REQUEST['AuthState']) ? $authStateId = $_POST['authstate'] : $authStateId = $_REQUEST['AuthState'];
$state = State::loadState($authStateId, Campusidp::STAGEID_USERPASS);

if (array_key_exists('source', $_POST)) {
    if (array_key_exists('idpentityid-searchbox', $_POST)) {
        $state['saml:idp'] = $_POST['idpentityid-searchbox'];

        Campusidp::setCookie(Campusidp::COOKIE_IDP_ENTITY_ID, $_POST['idpentityid-searchbox']);
        Campusidp::setCookie(Campusidp::COOKIE_INSTITUTION_NAME, $_POST['institution-name']);
        Campusidp::setCookie(Campusidp::COOKIE_INSTITUTION_IMG, $_POST['institution-img']);

        Campusidp::delegateAuthentication($_POST['source'], $state);
    } elseif (array_key_exists('idpentityid', $_POST)) {
        $state['saml:idp'] = $_POST['idpentityid'];
        Campusidp::delegateAuthentication($_POST['source'], $state);
    } elseif (array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
        if (
            array_key_exists('remember_me', $_POST) &&
            $_POST['remember_me'] === 'Yes' &&
            Configuration::getInstance()->getBoolean('session.rememberme.enable', false)
        ) {
            Campusidp::setCookie(Campusidp::COOKIE_USERNAME, $_POST['username']);
            Campusidp::setCookie(Campusidp::COOKIE_PASSWORD, $_POST['password']);
        }

        Campusidp::delegateAuthentication($_POST['source'], $state);
    }
}

$wayfConfig = Configuration::getConfig('wayf.php')->toArray();

if (!empty($wayfConfig['footer']['format']) && $wayfConfig['footer']['format'] === 'markdown') {
    $converter = new CommonMarkConverter();

    foreach ($wayfConfig['footer']['sections'] as $key => $value) {
        if (is_array($value)) {
            foreach ($wayfConfig['footer']['sections'][$key] as $subKey => $subValue) {
                $wayfConfig['footer']['sections'][$key][$subKey] = $converter->convertToHtml($subValue);
            }
        } else {
            $wayfConfig['footer']['sections'][$key] = $converter->convertToHtml($value);
        }
    }
}

$idps = null;
if (!empty($_POST['q'])) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, Module::getModuleURL('campusMultiauth/idpSearch.php?q=' . $_POST['q']));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $idps = json_decode(curl_exec($ch));
    curl_close($ch);
}

$globalConfig = Configuration::getInstance();
$t = new Template($globalConfig, 'campusMultiauth:selectsource.php');

array_key_exists('wrongUserPass', $_REQUEST) ? $t->data['wrongUserPass'] = true : $t->data['wrongUserPass'] = false;
$t->data['authstate'] = $authStateId;
$t->data['currentUrl'] = htmlentities($_SERVER['PHP_SELF']);
$t->data['wayf_config'] = $wayfConfig;
$t->data['idps'] = $idps;
$t->data['cookie_idpentityid'] = Campusidp::getCookie(Campusidp::COOKIE_IDP_ENTITY_ID);
$t->data['cookie_institution_name'] = json_decode(Campusidp::getCookie(Campusidp::COOKIE_INSTITUTION_NAME), true);
$t->data['cookie_institution_img'] = Campusidp::getCookie(Campusidp::COOKIE_INSTITUTION_IMG);
$t->data['cookie_username'] = Campusidp::getCookie(Campusidp::COOKIE_USERNAME);
$t->data['cookie_password'] = Campusidp::getCookie(Campusidp::COOKIE_PASSWORD);

$t->show();
exit();
