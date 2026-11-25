<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Pulse;

final class Portfolios extends \UdaSDK\Client
{
    private const array GET_BY_URL_PATH = [
        'method' => 'GET',
        'path' => '/pulse/portfolios/{url_path}',
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
     * Portfolio List:: via API
     */
    public function getByUrlPath(string $url_path, ?\UdaSDK\GetParams\Pulse\Portfolios\ByUrlPath $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_URL_PATH), path: ['url_path' => $url_path], parameters: $params);
        return $result;
    }

}
