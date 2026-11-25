<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Assets\Api\VVersion0\Asset\ByAssetId;

final class Competitors extends \UdaSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/assets/api/v{version}.0/asset/{asset_id}/competitors',
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
     * Asset :: Comparables
     *
     * @deprecated
     */
    public function get(\UdaSDK\PathParams\Assets\Api\VVersion0\Asset\ByAssetId\Competitors $identifier, ?\UdaSDK\GetParams\Assets\Api\VVersion0\Asset\ByAssetId\Competitors $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }
}
