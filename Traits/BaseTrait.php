<?php

namespace OxidProfessionalServices\Sentry\Traits;

use function Sentry\captureException;

trait BaseTrait
{
    protected function reportToSentry($exception)
    {
        if (function_exists('Sentry\captureException')) {
            captureException($exception);
        }
    }
}
