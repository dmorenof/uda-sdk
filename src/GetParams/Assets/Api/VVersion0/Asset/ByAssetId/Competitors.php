<?php

declare(strict_types=1);

namespace UdaSDK\GetParams\Assets\Api\VVersion0\Asset\ByAssetId;

final class Competitors extends \Dmorenof\SdkRuntime\DTO
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
