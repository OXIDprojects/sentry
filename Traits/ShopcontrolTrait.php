<?php

namespace OxidProfessionalServices\Sentry\Traits;

use OxidEsales\Eshop\Core\Registry;
use OxidProfessionalServices\Sentry\Core\ErrorTypes;
use function Sentry\init;

trait ShopcontrolTrait
{
    public function start($sClass = null, $sFunction = null, $aParams = null, $aViewsChain = null)
    {
        $sentryUrl = Registry::getConfig()->getConfigParam('oxpsSentryPhpUrl');
        if ($sentryUrl != '' && function_exists('Sentry\init')) {
            init([
                'dsn'         => $sentryUrl,
                'environment' => Registry::getConfig()->getConfigParam('oxpsSentryEnvirnoment'),
                'http_proxy'  => Registry::getConfig()->getConfigParam('oxpsSentryProxy') ?: null,
                'error_types' => ErrorTypes::getTypesByClass(
                    Registry::getConfig()->getConfigParam('oxpsSentryPHPErrorLevel') ?: 'info'
                )
            ]);
        }

        parent::start($sClass, $sFunction, $aParams, $aViewsChain);
    }

    protected function _handleCookieException($exception)
    {
        $this->reportToSentry($exception);
        parent::_handleCookieException($exception);
    }

    protected function _handleDbConnectionException($exception)
    {
        $this->reportToSentry($exception);
        parent::_handleDbConnectionException($exception);
    }

    protected function _handleBaseException($exception)
    {
        $this->reportToSentry($exception);
        parent::_handleBaseException($exception);
    }

    protected function _handleSystemException($exception)
    {
        $this->reportToSentry($exception);
        parent::_handleSystemException($exception);
    }

    protected function _handleAccessRightsException($exception)
    {
        $this->reportToSentry($exception);
        parent::_handleAccessRightsException($exception);
    }
}
