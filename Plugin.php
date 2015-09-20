<?php namespace NSRosenqvist\CookieConsent;

use Block;
use NSRosenqvist\CookieConsent\Models\Settings;

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

    public function boot()
    {
        // Settings
        Block::append('scripts', '<script type="text/javascript">window.cookieconsent_options = '.json_encode($this->getSettings(), false).';</script>');
        // Consent Cookie
        Block::append('scripts', '<script src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.'.Settings::get('version', 'latest').'.min.js" type="text/javascript"></script>');
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Cookie Consent',
                'description' => 'Manage cookie notification settings.',
                'icon'        => 'icon-globe',
                'class'       => 'NSRosenqvist\CookieConsent\Models\Settings',
                'keywords'    => 'cookie eu law cookies biscuits'
            ]
        ];
    }

    protected function getSettings()
    {
        return [
            "message" => Settings::get('message'),
            "dismiss" => Settings::get('dismiss'),
            "learnMore" => Settings::get('learnMore'),
            "link" => Settings::get('link', null),
            "container" => Settings::get('container', null),
            "theme" => Settings::get('theme'),
            "path" => Settings::get('path'),
            "expiryDays" => Settings::get('expiryDays')
        ];
    }
}
