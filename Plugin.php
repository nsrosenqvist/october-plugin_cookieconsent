<?php namespace Nsrosenqvist\CookieConsent;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Cookie Consent',
            'description' => 'Integrate the popular Cookie Consent JavaScript based solution to comply with the EU cookie laws.',
            'author' => 'Niklas Rosenqvist',
            'icon' => 'icon-leaf',
            'homepage' => 'https://www.nsrosenqvist.com/'
        ];
    }

    public function registerComponents()
    {
        return [
            'Nsrosenqvist\CookieConsent\Components\CookieConsent' => 'cookieConsent'
        ];
    }
}
