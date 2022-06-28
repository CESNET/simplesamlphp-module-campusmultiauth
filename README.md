# simplesamlphp-module-campusmultiauth

Thanks to this module, you can use a saml:SP authentication source together with another authentication source providing basic auth (discovery service and login form are displayed on a single page). This module also supports [aarc_idp_hint](https://zenodo.org/record/4596667/files/AARC-G061-A_specification_for_IdP_hinting.pdf), so you can even skip the login page and be redirected to the targeted identity provider.

## Theme configuration

For proper function, this modules requires the usage of the included theme called `campus`. Modify `config/config.php` to include these lines:

```
'theme.use' => 'campusmultiauth:campus',
'usenewui' => true,
```

You may also try to use a different Bootstrap 5 based theme, but compatibility is not guaranteed.

## Authsources configuration

To achieve this, you need to define and configure an authentication source in your authsources.php file. An example configuration is shown below:

    'campus-idp' => [
        'campusmultiauth:Campusidp',

        'userPassSource' => [
            'name' => 'campus-userpass',
            'AuthnContextClassRef' => []
        ],

        'spSource' => [
            'name' => 'default-sp',
            'AuthnContextClassRef' => []
        ]
    ],

Let's look at the configuration options:

`campusmultiauth:campusidp` defines which module and authentication source to use. This is the only mandatory option.

`userPassSource` is an authentication source to use to authentication with a username and password. For easy integration with any identity provider supporting [ECP](http://docs.oasis-open.org/security/saml/Post2.0/saml-ecp/v2.0/saml-ecp-v2.0.html), see [simplesamlphp-module-campususerpass](https://github.com/melanger/simplesamlphp-module-campususerpass). If the name is not set, `campus-userpass` is used as a default option.

`spSource` is an authentication source to use to authentication with an external identity provider. If the name is no set, `default-sp` is used as a default option.

Of course, both authsources must be defined in authsources.php file. When the configuration is done, the next step is to open `saml20-idp-hosted.php` file and set your authsource (`campus-idp` in our example) as an authentication source (`auth` option).

## Login page configuration

The second part of the configuration is setting up the login page itself. While doing that, it's highly recommended to follow our suggestions (***TODO link***). To configure the login page, you need to create a new configuration file `module_campusmultiauth.php`. In this module, there is an example configuration available at `config-templates/module_campusmultiauth.php`. In configuration file, there are following options available:

`css_framework` - if set to `muni_jvs`, the login page displays in MUNI framework. Otherwise, Bootstrap 5 is used.

`muni_faculty` - relevant only if the `css_framework` is set to `muni_jvs`. The value can be set to a concrete faculty (see ***TODO*** link) which results in the change of framework's main colors (based on a chosen faculty).

`logo` - URL to a main institution logo which is displayed in top of the login page.

`name` - used as an alternative text for the logo.

`languages` - map of supported languages. The format is language code by [ISO-639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) as the key and whole language name as the value (e.g. `'en' => 'English'`). If not defined, the only supported language is English.

`footer` - defines a footer of the login page. For further instructions how to configure a footer, see the [Footer](#footer) section below.

`components` - list of components. This is the main part of the login page. Each component represents an authentication possibility for the user. For further instructions how to configure components, see the [Components](#components) section below.

### Footer

Footer defines the bottom of the login page. If it is not set, the footer is empty. To allow you to adapt the footer to your organisation's look, the `footer` option is designed as a map with the following possible options:

`sections` - list of sections. Each section represents a column in the footer's grid. It means that, in case of Bootstrap 5, the count of sections ***must*** divide 12. If you decide to use MUNI framework, the count of sections ***must*** divide 4. Each section then contains string with HTML, Markdown or simple text, based on the `format` option. If you want to add localization, you can define `sections` as a map with language codes as keys. Values are then lists of sections with localized texts. In that case, you ***must*** define sections for ***all*** supported languages.

`format` - defines the format of sections. You can set it to `HTML` or `markdown`. If not set, the sections are printed as a simple text.

### Components

The main part of the login page. The `components` option is designed as a list, where each element represents one component. A component is a map with several possible options. The most important option is `name`. It defines the component's type. There are three possible values for `name`: `local_login`, `searchbox` and `individual_identities`. Let's take a look at each component's type separately.

#### local_login

This component represents a form with username and password. It can be used only once. It's possible to show / hide the `remember_me` checkbox by configuring the `session.rememberme.enable` option in the `config.php` file. In the module configuration, there are following options:

`username_label` - this is displayed as a label above input for the username. If you want to add localization, you can write the value as a map with language codes as keys and localized strings as values. If current language is not found in keys, the ***first one*** is used instead. If not set at all, it displays a default value.

`username_placeholder` - this is displayed as a placeholder in the input for the username. If you want to add localization, you can write the value as a map with language codes as keys and localized strings as values. If current language is not found in keys, the ***first one*** is used instead. If not set at all, it displays a default value.

`password_label` - this is displayed as a label above input for the password. If you want to add localization, you can write the value as a map with language codes as keys and localized strings as values. If current language is not found in keys, the ***first one*** is used instead. If not set at all, it displays a default value.

`password_placeholder` - this is displayed as a placeholder in the input for the password. If you want to add localization, you can write the value as a map with language codes as keys and localized strings as values. If current language is not found in keys, the ***first one*** is used instead. If not set at all, it displays a default value.

`priority` - can be set to `primary`, default value is `secondary`. It should be primary if you want users to use this component if they are able to.

`end_col` - on a desktop, components are divided to two columns. If you want this component to be the last one in the first column, set this option to `true`.

#### searchbox

Thanks to searchbox you can search between all included identity providers. This components may be used multiple times.

`title` - text displayed above the component. If you want to add localization, you can write the value as a map with language codes as keys and localized strings as values. If current language is not found in keys, the ***first one*** is used instead. If not set at all, it displays a default value.

`placeholder` - text displayed as a placeholder in the searchbox. If you want to add localization, you can write the value as a map with language codes as keys and localized strings as values. If current language is not found in keys, the ***first one*** is used instead. If not set at all, it displays a default value.

`include` - if you want to display just part of identity providers available in the metadata, you can use this option. If not set, all identity providers from the metadata are included. Otherwise, included are only identity providers mentioned here. This option is a map with three possible keys: `upstream_idps`, `tags` and `registration_authorities`. If you want to include single IdP, you can add its identifier (e.g. entityID) to the `upstream_idps` list. In case you want to include a group of identity providers, you may tag some of them in the metarefresh module (***TODO link***) and then include them by adding their tag to the `tags` list. Every identity provider also has information about its registration authority (e.g. [http://www.eduid.cz/](http://www.eduid.cz/)). If you add some registration authority to the `registration_authorities` list, all identity providers from this authority will be included.

`exclude` - if you want to display just part of identity providers available in the metadata, you can use this option. Each identity provider mentioned here will be excluded from the included ones. This option is a map with three possible keys: `upstream_idps`, `tags` and `registration_authorities`. If you want to exclude single IdP, you can add its identifier (e.g. entityID) to the `upstream_idps` list. In case you want to exclude a group of identity providers, you may tag some of them in the metarefresh module (TODO link) and then exclude them by adding their tag to the `tags` list. Every identity provider also has information about its registration authority (e.g. [http://www.eduid.cz/](http://www.eduid.cz/)). If you add some registration authority to the `registration_authorities` list, all identity providers from this authority will be excluded.

`priority` - can be set to `primary`, default value is `secondary`. It should be primary if you want users to use this component if they are able to.

`end_col` - on a desktop, components are divided to two columns. If you want this component to be the last one in the first column, set this option to `true`.

#### individual_identities

Here you can specify some identity providers to display them as a list of buttons. This components may be used multiple times.

`title` - text displayed above the component. If you want to add localization, you can write the value as a map with language codes as keys and localized strings as values. If current language is not found in keys, the ***first one*** is used instead. If not set at all, it displays a default value.

`priority` - can be set to `primary`, default value is `secondary`. It should be primary if you want users to use this component if they are able to.

`end_col` - on a desktop, components are divided to two columns. If you want this component to be the last one in the first column, set this option to `true`.

`number_shown` - how many buttons to show. If the count of specified identity providers is higher than this number, then part of identity providers will be hidden and replaced with button which shows them all on click.

`identities` - list of identity providers to display as buttons. Each identity provider has some configuration options available. For further information, see the [identities](#identities) section below.

`logos` - optional map with keys of entity IDs and values of URLs to logos. This option can be used to override logos for some identity providers, which are expected to be used often but do not have a suitable (square) logo in their metadata.

##### identities

Each identity is a map with the following possible options:

`upstream_idp` - identity provider's identifier (e.g. entityid)

`name` - identity provider's name, displayed as a text inside the button. If you want to add localization, you can write the value as a map with language codes as keys and localized strings as values. If current language is not found in keys, the ***first one*** is used instead.

`logo` - identity provider's logo, displayed on a left side of the button as a square.

`background_color` - background around the logo. Defined as a [CSS color value](https://developer.mozilla.org/en-US/docs/Web/CSS/color_value).

## Deployment

The easiest way is to use [docker-campusidp](https://github.com/cesnet/docker-campusidp), which includes this module together with SimpleSAMLphp and PHP-FPM.

If you want to use non-SAML providers (e.g. OAuth or OIDC), you need to provide a bridge. There are multiple ways possible:
* deploy a proxy (e.g. [SATOSA](https://github.com/IdentityPython/SATOSA)) which translates other authentication protocols to SAML
* use SimpleSAMLphp's [OIDC module](https://github.com/simplesamlphp/simplesamlphp-module-oidc/) for OIDC (e.g. Google)
* use [authoauth2 module](https://github.com/cirrusidentity/simplesamlphp-module-authoauth2) for OAuth (LinkedIn, ORCid, GitHub...)

### Content security policy

This module uses no third party CSS, JavaScript or fonts, everything is bundled. The only inline CSS is used when you configure `background_color` in the `individual_identities` component.
