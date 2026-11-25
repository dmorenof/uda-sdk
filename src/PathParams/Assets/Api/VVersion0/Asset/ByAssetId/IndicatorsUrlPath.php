<?php

declare(strict_types=1);

namespace UdaSDK\PathParams\Assets\Api\VVersion0\Asset\ByAssetId;

final class IndicatorsUrlPath extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'version',
    'asset_id',
    'url_path',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'version' => 'version',
        'asset_id' => 'asset_id',
        'url_path' => 'url_path',
    ],
    'query' => [],
    'header' => [],
];

    public string $version;
    public string $asset_id;
    public string $url_path;
}
