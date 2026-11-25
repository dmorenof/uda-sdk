<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Reds\Api\VVersion0;

final class PeriodUrlPath extends \UdaSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/reds/api/v{version}.0/period{url_path}',
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
     * Current Period
     *
     * @deprecated
     */
    public function get(\UdaSDK\PathParams\Reds\Api\VVersion0\PeriodUrlPath $identifier, ?\UdaSDK\GetParams\Reds\Api\VVersion0\PeriodUrlPath $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }

}
