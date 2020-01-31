<?php

namespace OxidProfessionalServices\Sentry\Core;

use function Exception;

class ErrorTypes
{
    public static $typeClasses = [
    'info'      => E_ALL,
    'warning'   => E_ALL & ~E_NOTICE & ~E_USER_NOTICE & ~E_STRICT,
    'error'     => E_ALL & ~E_NOTICE & ~E_USER_NOTICE & ~E_STRICT & ~E_DEPRECATED
        & ~E_USER_DEPRECATED & ~E_WARNING & ~E_USER_WARNING,
    'fatal'     => E_ALL & ~E_NOTICE & ~E_USER_NOTICE & ~E_STRICT & ~E_DEPRECATED
        & ~E_USER_DEPRECATED & ~E_WARNING & ~E_USER_WARNING & ~E_RECOVERABLE_ERROR & ~E_USER_ERROR,
    'none'      => E_ALL & ~E_NOTICE & ~E_USER_NOTICE & ~E_STRICT & ~E_DEPRECATED
        & ~E_USER_DEPRECATED & ~E_WARNING & ~E_USER_WARNING & ~E_RECOVERABLE_ERROR & ~E_USER_ERROR 
        & ~E_ERROR & ~E_PARSE & ~E_CORE_ERROR & ~E_CORE_WARNING & ~E_COMPILE_ERROR & ~E_COMPILE_WARNING
    ];

    public static function getTypeClasses()
    {
    return array_keys(self::$typeClasses);
    }

    public static function getTypesByClass($typeClass)
    {
        if (false === self::$typeClasses[trim(strtolower($typeClass))]) {
            throw oxNew( Exception( "unknown error type class $typeClass"));
        }

        return self::$typeClasses[trim(strtolower($typeClass))];
    }
}
