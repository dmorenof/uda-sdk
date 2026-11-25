<?php

declare(strict_types=1);

namespace UdaSDK\GetParams\Reds\Api\VVersion0;

final class PeriodUrlPath extends \Dmorenof\SdkRuntime\DTO
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
