<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Forecast\Api\VVersion0\Category;

final class Area extends \UdaSDK\Client
{
    private const array GET_BY_URL_PATH = [
        'method' => 'GET',
        'path' => '/forecast/api/v{version}.0/category/area/{url_path}',
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
     * Area Category
     *
     * @deprecated
     */
    public function getByUrlPath(\UdaSDK\PathParams\Forecast\Api\VVersion0\Category\Area\ByUrlPath $identifier, ?\UdaSDK\GetParams\Forecast\Api\VVersion0\Category\Area\ByUrlPath $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_URL_PATH), path: $identifier, parameters: $params);
        return $result;
    }
}
