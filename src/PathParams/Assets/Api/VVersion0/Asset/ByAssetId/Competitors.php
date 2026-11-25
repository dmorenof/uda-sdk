<?php

declare(strict_types=1);

namespace UdaSDK\PathParams\Assets\Api\VVersion0\Asset\ByAssetId;

final class Competitors extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'version',
        'asset_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'version' => 'version',
            'asset_id' => 'asset_id',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $version;
    public string $asset_id;
}
