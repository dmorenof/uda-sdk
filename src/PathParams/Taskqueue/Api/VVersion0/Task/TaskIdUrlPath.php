<?php

declare(strict_types=1);

namespace UdaSDK\PathParams\Taskqueue\Api\VVersion0\Task;

final class TaskIdUrlPath extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'version',
    'task_id',
    'url_path',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'version' => 'version',
        'task_id' => 'task_id',
        'url_path' => 'url_path',
    ],
    'query' => [],
    'header' => [],
];

    public string $version;
    public string $task_id;
    public string $url_path;
}
