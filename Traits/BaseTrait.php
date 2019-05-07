<?php

namespace OxidProfessionalServices\Sentry\Traits;

use OxidEsales\Eshop\Core\Registry;

trait BaseTrait
{
    protected function reportToSentry($exception)
    {
        if (class_exists('Sentry')) {
            $ip = '';
            if (!empty($_SERVER['REMOTE_ADDR'])) {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            \Sentry\captureException($exception, ['user' => ['id' => md5($ip)]]);
        }
    }
}
