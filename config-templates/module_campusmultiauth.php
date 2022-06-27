<?php

/**
 * An example configuration of the login page
 */

$config = [
    'components' => [
        [
            'name' => 'local_login',
            'end_col' => true,
            'priority' => 'primary',
            'username_label' => [
                'cs' => 'UČO',
                'en' => 'Personal ID (učo)'
            ],
            'username_placeholder' => [
                'cs' => 'UČO',
                'en' => 'Personal ID'
            ],
            'password_label' => [
                'cs' => 'Primární heslo',
                'en' => 'Primary password'
            ],
            'password_placeholder' => [
                'cs' => 'Heslo',
                'en' => 'Password'
            ],
        ],
        [
            'name' => 'searchbox',
            'title' => [
                'cs' => 'Přihlášení přes jinou instituci',
                'en' => 'Log in via another institution'
            ],
            'placeholder' => [
                'cs' => 'Vyhledejte např. CEITEC',
                'en' => 'Search e.g. CEITEC'
            ],
            'include' => [
                'upstream_idps' => [],
                'tags' => [],
                'registration_authorities' => []
            ],
            'exclude' => [
                'upstream_idps' => [],
                'tags' => [],
                'registration_authorities' => []
            ],
        ],
        [
            'name' => 'individual_identities',
            'title' => [
                'cs' => 'Přihlášení přes cizí identitu',
                'en' => 'Log in via institution or social network'
            ],
            'number_shown' => 3,
            'identities' => [
                0 => [
                    'name' => [
                        'en' => 'VUT en',
                        'cs' => 'VUT cs',
                    ],
                    'logo' => 'https://ip-147-251-124-162.flt.cloud.muni.cz/logos/vut.png',
                    'upstream_idp' => 'https://www.vutbr.cz/SSO/saml2/idp',
                    'background_color' => '#990000'
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
    'css_framework' => 'muni_jvs',
    'logo' => 'https://ip-147-251-124-162.flt.cloud.muni.cz/logos/muni2.png',
    'name' => 'MUNI',
    'muni_faculty' => 'econ',
    'footer' => [
        'format' => 'HTML',
        'sections' => [
            'cs' => [
                0 => '<h5>Máte problém s přihlášením?</h5>',
                1 => '<div>Službu Autentizační brána zajišťuje Ústav výpočetní techniky.</div>',
            ],
            'en' => [
                0 => '<h5>Having trouble logging in?</h5>',
                1 => '<div>The Authentication Gateway service is provided by the Institute of Computer Science.</div>',
            ],
        ],
    ],
    'languages' => [
        'cs' => 'Čeština',
        'en' => 'English',
    ],
];
