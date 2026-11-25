<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Reds\Api\Asset\ByAssetId;

final class PdfUrlPath extends \UdaSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/reds/api/asset/{asset_id}/pdf{url_path}',
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
     * Asset :: Request PDF
     *
     * @deprecated
     */
    public function post(\UdaSDK\PathParams\Reds\Api\Asset\ByAssetId\PdfUrlPath $identifier, ?\UdaSDK\PostParams\Reds\Api\Asset\ByAssetId\PdfUrlPath $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }

}
