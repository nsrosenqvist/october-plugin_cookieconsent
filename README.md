Modern EU law requires sites to let the user know if cookies are stored on their
computer. This is a simple solution for following this law.

This plugin integrates the popular Cookie Consent tool in your theme. By including
the component `cookieConsent` anywhere in your theme it injects the required scripts
into the `scripts` placeholder. Make sure to enable the component on a layout or
somewhere it always gets loaded.

## Usage

Include the component in a layout and then place the component tag anywhere in
your theme. It requires that the `scripts` placeholder is available.

```
[cookieConsent]
==
==
{% component 'cookieConsent' %}

{% scripts %}
```

## Component Configuration

Property | Type | Description
---------|------|------------
message | string | The message shown by the plugin.
dismiss | string | The text used on the dismiss button.
learnMore | string | The text shown on the link to the cookie policy (requires the link option to also be set)
link |  null or string | The URL of your cookie policy. If it’s set to null, the link is hidden.
container | null or string | The element you want the Cookie Consent notification to be appended to. If null, the Cookie Consent plugin is appended to the body.
theme | string | The Cookie Consent theme to use. If you wish to use your own CSS instead, specify the URL of your CSS file. e.g. styles/my_custom_theme.css. This can be a relative or absolute URL. To stop Cookie Consent from loading CSS at all, specify false.
path | string | The path for the consent cookie that Cookie Consent uses, to remember that users have consented to cookies. Use to limit consent to a specific path within your website.
expiryDays | int | The number of days Cookie Consent should store the user’s consent information for.
version | null or string | Supported options are "latest", version number (e.g. "1.0.2") or null to use the version shipped with the plugin.
