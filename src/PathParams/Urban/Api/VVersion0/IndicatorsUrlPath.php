<?php

declare(strict_types=1);

namespace UdaSDK\PathParams\Urban\Api\VVersion0;

final class IndicatorsUrlPath extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'version',
        'url_path',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'version' => 'version',
            'url_path' => 'url_path',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $version;
    public string $url_path;
}
