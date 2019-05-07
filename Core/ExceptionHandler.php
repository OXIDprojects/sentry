<?php

namespace OxidProfessionalServices\Sentry\Core;

use OxidProfessionalServices\Sentry\Traits\BaseTrait;

class ExceptionHandler extends ExceptionHandler_parent
{
    use BaseTrait;

    public function handleUncaughtException(\Exception $exception)
    {
        $this->reportToSentry($exception);
    }
}