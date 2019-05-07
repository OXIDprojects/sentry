<?php

namespace OxidProfessionalServices\Sentry\Traits;

trait BaseTrait
{
    protected function reportToSentry($exception)
    {
        if (in_array('sentryclient', oxRegistry::getKeys())) {
            $ip = '';
            if (!empty($_SERVER['REMOTE_ADDR'])) {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            oxRegistry::get('sentryclient')
                ->captureException($exception, ['user' => ['id' => md5($ip)]]);
        }
    }
}
