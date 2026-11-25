<?php

declare(strict_types=1);

namespace UdaSDK\Taskqueue\Api\VVersion0\Task;

final class TaskIdUrlPath extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /taskqueue/api/v{version}.0/task/{task_id}{url_path} [operationId: redirect_user_taskqueue_api_v_version__0_task__task_id__url_path__get] */
    /**
     * PDF :: Check Progress
     *
     * @deprecated
     */
    public static function get(\UdaSDK\PathParams\Taskqueue\Api\VVersion0\Task\TaskIdUrlPath $identifier, ?\UdaSDK\GetParams\Taskqueue\Api\VVersion0\Task\TaskIdUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Taskqueue\Api\VVersion0\Task\TaskIdUrlPath::class)->get($identifier, $params);
    }
}
