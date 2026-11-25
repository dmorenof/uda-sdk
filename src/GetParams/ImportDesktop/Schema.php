<?php

declare(strict_types=1);

namespace UdaSDK\GetParams\ImportDesktop;

final class Schema extends \Dmorenof\SdkRuntime\DTO
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
