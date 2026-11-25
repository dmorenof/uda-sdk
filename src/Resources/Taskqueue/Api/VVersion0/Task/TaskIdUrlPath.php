<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Taskqueue\Api\VVersion0\Task;

final class TaskIdUrlPath extends \UdaSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/taskqueue/api/v{version}.0/task/{task_id}{url_path}',
        'security' => [
            [
                'APIKeyQuery' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
        ],
        'errors' => [
            422 => '\\UdaSDK\\DTOs\\HTTPValidationError',
        ],
        'errorResponses' => [
            422 => [
                'type' => '\\UdaSDK\\DTOs\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
        'pathAllowReserved' => [
            'url_path',
        ],
    ];

    /**
     * PDF :: Check Progress
     *
     * @deprecated
     */
    public function get(\UdaSDK\PathParams\Taskqueue\Api\VVersion0\Task\TaskIdUrlPath $identifier, ?\UdaSDK\GetParams\Taskqueue\Api\VVersion0\Task\TaskIdUrlPath $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }
}
