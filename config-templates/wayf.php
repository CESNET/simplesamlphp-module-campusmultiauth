<?php

/**
 * The configuration of discovery service
 *
 *
 * 'dictionary' - When this keyword is used, it means:
 *
 * - You can write the value as a map with locales (e.g. ['en' => 'English version', 'cs' => 'Czech version'],
 * the version with current language will be used. If the current language is not in the map, the first one version
 * will be used.
 *
 * - You can also write the value as string; then it will always display this string
 *
 * - All dictionary options are optional - if not set, default value will be used
 */

$config = [
    'components' => [ // list of components
        0 => [
            'name' => 'local_login', // component name
            'end_col' => true, // whether end the column after this component
            'priority' => 'primary', // priority of this component (primary - black, secondary (default) - grey)
            'username_label' => [ // dictionary; label for the username input
                'cs' => 'UČO',
                'en' => 'Personal ID (učo)'
            ],
            'username_placeholder' => [ // dictionary; placeholder for the username input
                'cs' => 'UČO',
                'en' => 'Personal ID'
            ],
            'password_label' => [ // dictionary; label for the password input
                'cs' => 'Primární heslo',
                'en' => 'Primary password'
            ],
            'password_placeholder' => [ // dictionary; placeholder for the password input
                'cs' => 'Heslo',
                'en' => 'Password'
            ],
        ],
        1 => [
            'name' => 'searchbox', // component name
            'title' => [ // dictionary; title of the component section
                'cs' => 'Přihlášení přes jinou instituci',
                'en' => 'Log in via another institution'
            ],
            'placeholder' => [ // dictionary; placeholder for the searchbox
                'cs' => 'Vyhledejte např. CEITEC',
                'en' => 'Search e.g. CEITEC'
            ],
            'include' => [], // identity providers to include
            'exclude' => [ // identity providers to exclude
                'https://idp2.ics.muni.cz/idp/shibboleth',
                'https://whoami.cesnet.cz/idp/shibboleth'
            ],
        ],
        2 => [
            'name' => 'individual_identities', // component name
            'title' => [ // dictionary; title of the component section
                'cs' => 'Přihlášení přes cizí identitu',
                'en' => 'Log in via institution or social network'
            ],
            'number_shown' => 3, // optional (default 5); how many institutions to show (other institutions are hidden until the 'More options' button is clicked)
            'identities' => [ // list of identities to show
                0 => [
                    'name' => [ // dictionary, must be defined; name of the institution
                        'en' => 'VUT en',
                        'cs' => 'VUT cs',
                    ],
                    'logo' => 'https://ip-147-251-124-162.flt.cloud.muni.cz/logos/vut.png', // logo of the institution
                    'upstream_idp' => 'https://www.vutbr.cz/SSO/saml2/idp', // identifier of the identity provider (e.g. entityid for the SSP IdP)
                    'background_color' => '#990000' // background color around the logo (default white)
                ],
                1 => [
                    'name' => 'UTB',
                    'logo' => 'https://ip-147-251-124-162.flt.cloud.muni.cz/logos/utb.png',
                    'upstream_idp' => 'https://login.bbmri-eric.eu/idp/'
                ],
                2 => [
                    'name' => 'Linkedin',
                    'logo' => 'https://ip-147-251-124-162.flt.cloud.muni.cz/logos/linkedin.png',
                    'upstream_idp' => 'https://login.elixir-czech.org/linkedin-idp/'
                ],
            ],
        ],
    ],
    'css_framework' => 'muni_jvs', // which framework to use; muni_jvs / bootstrap 5 (default)
    'logo' => 'https://ip-147-251-124-162.flt.cloud.muni.cz/logos/muni2.png', // logo of the institution
    'footer' => [
        'format' => 'HTML', // HTML / markdown / text (default)
        'sections' => [  // dictionary; length of each section must divide 12 (bootstrap) or 4 (jvs)
            'cs' => [
                0 => '<h5 style="text-decoration: underline; margin-top: 72px; margin-bottom: 24px;">Máte problém s přihlášením?</h5>',
                1 => '<div style="margin-bottom: 36px;">Službu Autentizační brána zajišťuje Ústav výpočetní techniky.</div>',
            ],
            'en' => [
                0 => '<h5 style="text-decoration: underline; margin-top: 72px; margin-bottom: 24px;">Having trouble logging in?</h5>',
                1 => '<div style="margin-bottom: 36px;">The Authentication Gateway service is provided by the Institute of Computer Science.</div>',
            ],
        ],
    ],
    'languages' => [ // list of supported languages
        'cs' => 'Čeština',
        'en' => 'English',
    ],
];
