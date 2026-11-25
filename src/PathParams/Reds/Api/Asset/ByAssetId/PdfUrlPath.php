<?php

declare(strict_types=1);

namespace UdaSDK\PathParams\Reds\Api\Asset\ByAssetId;

final class PdfUrlPath extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'asset_id',
        'url_path',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'asset_id' => 'asset_id',
            'url_path' => 'url_path',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $asset_id;
    public string $url_path;
}
