<?php

declare(strict_types=1);

namespace UdaSDK\PostParams\Reds\Api\Asset\ByAssetId;

final class PdfUrlPath extends \Dmorenof\SdkRuntime\DTO
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
