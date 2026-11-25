<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Assets\Api\V10\Portfolio\ByPortfolio;

final class AssetUrlPath extends \UdaSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/assets/api/v1.0/portfolio/{portfolio}/asset{url_path}',
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
     * Asset :: Valuation (v1)
     *
     * @deprecated
     */
    public function post(\UdaSDK\PathParams\Assets\Api\V10\Portfolio\ByPortfolio\AssetUrlPath $identifier, ?\UdaSDK\PostParams\Assets\Api\V10\Portfolio\ByPortfolio\AssetUrlPath $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }

}
