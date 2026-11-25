<?php

declare(strict_types=1);

namespace UdaSDK\GetParams\Taskqueue\Api\VVersion0\Task;

final class TaskIdUrlPath extends \Dmorenof\SdkRuntime\DTO
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
