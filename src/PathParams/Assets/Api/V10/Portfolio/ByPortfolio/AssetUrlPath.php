<?php

declare(strict_types=1);

namespace UdaSDK\PathParams\Assets\Api\V10\Portfolio\ByPortfolio;

final class AssetUrlPath extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'portfolio',
    'url_path',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'portfolio' => 'portfolio',
        'url_path' => 'url_path',
    ],
    'query' => [],
    'header' => [],
];

    public string $portfolio;
    public string $url_path;
}
