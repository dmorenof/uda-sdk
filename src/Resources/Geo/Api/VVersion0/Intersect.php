<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Geo\Api\VVersion0;

final class Intersect extends \UdaSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/geo/api/v{version}.0/intersect',
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
     * Geometry :: Intersect
     *
     * @deprecated
     */
    public function get(string $version, ?\UdaSDK\GetParams\Geo\Api\VVersion0\Intersect $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['version' => $version], parameters: $params);
        return $result;
    }

}
