<?php

namespace SwiftDevLabs\GoogleAnalytics\Extensions;

use SilverStripe\Core\Config\Configurable;
use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class ContentControllerExtension extends Extension
{
    use Configurable;

    private static $tracking_id = FALSE;

    public function onAfterInit()
    {
        if ($tracking_id = $this->config()->get('tracking_id'))
        {
            Requirements::javascript('https://www.googletagmanager.com/gtag/js?id=' . $tracking_id, [
                'async' => TRUE,
            ]);
            Requirements::customScript("window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', '{$tracking_id}');");
        }

    }
}