<?php

declare(strict_types=1);

namespace UdaSDK\Resources\ImportDesktop;

final class Schema extends \UdaSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/import-desktop/schema/',
        'security' => [
            [
                'APIKeyQuery' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
        ],
        'errors' => [
            422 => '\\UdaSDK\\DTOs\\HTTPValidationError',
        ],
        'errorResponses' => [
            422 => [
                'type' => '\\UdaSDK\\DTOs\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
    ];

    /**
     * Portfolio schema:: via API
     */
    public function get(?\UdaSDK\GetParams\ImportDesktop\Schema $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
