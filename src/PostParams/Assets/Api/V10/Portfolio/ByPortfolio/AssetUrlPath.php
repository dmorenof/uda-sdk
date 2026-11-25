<?php

declare(strict_types=1);

namespace UdaSDK\PostParams\Assets\Api\V10\Portfolio\ByPortfolio;

final class AssetUrlPath extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'invalidate' => 'invalidate',
        ],
        'header' => [],
    ];

    public ?bool $invalidate;
}
