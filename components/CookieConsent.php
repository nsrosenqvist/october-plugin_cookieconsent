<?php namespace Nsrosenqvist\CookieConsent\Components;

class CookieConsent extends \Cms\Classes\ComponentBase
{
    private $initialized = false;

    public function componentDetails()
    {
        return [
            'name' => 'Cookie Consent',
            'description' => 'Integrate the popular Cookie Consent JavaScript based solution to comply with the EU cookie laws.',
        ];
    }

    public function defineProperties()
    {
        return [
            'message' => [
                 'title'             => 'Message',
                 'description'       => 'The message shown by the plugin.',
                 'default'           => 'This website uses cookies to ensure you get the best experience on our website',
                 'type'              => 'string',
            ],
            'dismiss' => [
                 'title'             => 'Dismiss Text',
                 'description'       => 'The text used on the dismiss button.',
                 'default'           => 'Got it!',
                 'type'              => 'string',
            ],
            'learnMore' => [
                 'title'             => 'Learn More Link Text',
                 'description'       => 'The text shown on the link to the cookie policy (requires the link option to also be set)',
                 'default'           => 'More info',
                 'type'              => 'string',
            ],
            'link' => [
                 'title'             => 'Link',
                 'description'       => 'The url of your cookie policy. If it’s set to null, the link is hidden.',
                 'default'           => 'null',
                 'type'              => 'string',
            ],
            'container' => [
                 'title'             => 'CSS-selector for container',
                 'description'       => 'The element you want the Cookie Consent notification to be appended to. If null, the Cookie Consent plugin is appended to the body.',
                 'default'           => 'null',
                 'type'              => 'string',
            ],
            'theme' => [
                 'title'             => 'Theme',
                 'description'       => 'The Cookie Consent theme to use. If you wish to use your own CSS instead, specify the URL of your CSS file. e.g. styles/my_custom_theme.css. This can be a relative or absolute URL. To stop Cookie Consent from loading CSS at all, specify false',
                 'default'           => 'light-floating',
                 'type'              => 'string',
            ],
            'path' => [
                 'title'             => 'Path',
                 'description'       => 'The path for the consent cookie that Cookie Consent uses, to remember that users have consented to cookies. Use to limit consent to a specific path within your website.',
                 'default'           => '/',
                 'type'              => 'string',
            ],
            'expiryDays' => [
                 'title'             => 'Expiry Days',
                 'description'       => 'The number of days Cookie Consent should store the user’s consent information for.',
                 'default'           => '365',
                 'type'              => 'string',
            ],
            'version' => [
                 'title'             => 'Version',
                 'description'       => 'Supported options are "latest", version number (e.g. "1.0.2") or null to use the version shipped with the plugin.',
                 'default'           => 'null',
                 'type'              => 'string',
            ]
        ];
    }

    public function onRender()
    {
        foreach ($this->getProperties() as $key => $value)
        {
            $this->page[$key] = $value;
        }

        if ($this->page['theme'] != 'false')
            $this->page['theme'] = "'".$this->page['theme']."'";
        if ($this->page['link'] != 'null')
            $this->page['link'] = "'".$this->page['link']."'";
        if ($this->page['container'] != 'null')
            $this->page['container'] = "'".$this->page['container']."'";

        $this->page['script'] = "/plugins/nsrosenqvist/cookieconsent/assets/js/cookieconsent.2.0.min.js";
    }
}
