<?php

declare(strict_types=1);

namespace UdaSDK\Resources;

final class RootResource extends \UdaSDK\Client
{
    private const array OPTIONS_BY_FULL_PATH = [
        'method' => 'OPTIONS',
        'path' => '/{full_path}',
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
    ];

    /**
     * Options Handler
     */
    public function optionsByFullPath(string $full_path): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::OPTIONS_BY_FULL_PATH), path: ['full_path' => $full_path]);
        return $result;
    }

}
