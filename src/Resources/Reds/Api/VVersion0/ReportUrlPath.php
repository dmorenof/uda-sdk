<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Reds\Api\VVersion0;

final class ReportUrlPath extends \UdaSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/reds/api/v{version}.0/report{url_path}',
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
     * PDF :: Request New
     *
     * @deprecated
     */
    public function post(\UdaSDK\PathParams\Reds\Api\VVersion0\ReportUrlPath $identifier, ?\UdaSDK\PostParams\Reds\Api\VVersion0\ReportUrlPath $params = null): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::POST), path: $identifier, parameters: $params);
        return $result;
    }
}
