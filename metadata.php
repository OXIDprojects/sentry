<?php
$sMetadataVersion = '2.1';

$aModule = [
    'id'          => 'oxpssentry',
    'title'       => 'OXPS :: sentry integration',
    'description' => [
        'de' => 'Sentry Schnittstelle für OXID',
        'en' => 'sentry integration for OXID',
    ],
    'thumbnail'   => 'out/pictures/oxpssentry.png',
    'version'     => '1.0.3',
    'author'      => 'OXID Professional Services',
    'url'         => 'http://www.oxid-esales.com',
    'email'       => 'info@oxid-esales.com',
    'extend'      => [
        \OxidEsales\Eshop\Core\ShopControl::class
            => \OxidProfessionalServices\Sentry\Core\ShopControl::class,
        \OxidEsales\Eshop\Core\WidgetControl::class
            => \OxidProfessionalServices\Sentry\Core\WidgetControl::class,
        \OxidEsales\Eshop\Core\Exception\ExceptionHandler::class
            => \OxidProfessionalServices\Sentry\Core\ExceptionHandler::class,
    ],
    'settings'    => [
        [
            'group' => 'main',
            'name'  => 'oxpsSentryEnvirnoment',
            'type'  => 'str',
            'value' => ''
        ],
        [
            'group' => 'main',
            'name'  => 'oxpsSentryProxy',
            'type'  => 'str',
            'value' => null
        ],
        [
            'group' => 'main',
            'name'  => 'oxpsSentryPhpUrl',
            'type'  => 'str',
            'value' => ''
        ],
        [
            'group' => 'main',
            'name'  => 'oxpsSentryJsUrl',
            'type'  => 'str',
            'value' => ''
        ],
        [
            'group'       => 'main',
            'name'        => 'oxpsSentryLogLevel',
            'type'        => 'select',
            'value'       => 'none',
            'constraints' => 'none|emergency|alert|critical|error|warning|notice|info|debug',
        ],
    ],
];
