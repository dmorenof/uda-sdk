<?php

declare(strict_types=1);

namespace UdaSDK;

class Client extends \Dmorenof\SdkRuntime\ApiClient
{
    protected const array SECURITY_SCHEMES = [
    'APIKeyQuery' => [
        'type' => 'apiKey',
        'scheme' => null,
        'location' => 'query',
        'parameterName' => 'key',
    ],
    'APIKeyHeader' => [
        'type' => 'apiKey',
        'scheme' => null,
        'location' => 'header',
        'parameterName' => 'Authorization',
    ],
];

    private static ?self $currentConnection = null;

    /** Replace the current connection using a snapshot of the configuration. */
    public static function configure(Configuration $configuration): void
    {
        self::$currentConnection = self::connect($configuration);
    }

    public static function current(): self
    {
        return self::$currentConnection ?? throw new \LogicException(
            'Configure the SDK with Client::configure(Configuration) first.',
        );
    }
}
