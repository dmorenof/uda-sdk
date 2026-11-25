<?php

declare(strict_types=1);

namespace UdaSDK\GetParams\Forecast\Api\VVersion0\Category\Area;

final class ByUrlPath extends \Dmorenof\SdkRuntime\DTO
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
