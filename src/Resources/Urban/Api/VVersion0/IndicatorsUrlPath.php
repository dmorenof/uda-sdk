<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Urban\Api\VVersion0;

final class IndicatorsUrlPath extends \UdaSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/urban/api/v{version}.0/indicators{url_path}',
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
        'pathAllowReserved' => [
            'url_path',
        ],
    ];

    /**
     * Indicators (A)
     *
     * @deprecated
     */
    public function get(\UdaSDK\PathParams\Urban\Api\VVersion0\IndicatorsUrlPath $identifier, ?\UdaSDK\GetParams\Urban\Api\VVersion0\IndicatorsUrlPath $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }
}
