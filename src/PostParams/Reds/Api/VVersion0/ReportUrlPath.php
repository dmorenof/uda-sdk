<?php

declare(strict_types=1);

namespace UdaSDK\PostParams\Reds\Api\VVersion0;

final class ReportUrlPath extends \Dmorenof\SdkRuntime\DTO
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
