<?php

declare(strict_types=1);

namespace UdaSDK\GetParams\Pulse\Portfolios;

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
