<?php

declare(strict_types=1);

namespace UdaSDK\GetParams\Geo\Api\VVersion0;

final class Intersect extends \Dmorenof\SdkRuntime\DTO
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
