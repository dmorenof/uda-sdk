<?php

declare(strict_types=1);

namespace UdaSDK;

final class RootResource extends \UdaSDK\PulseAPIPROSDK
{
    /** OPTIONS /{full_path} [operationId: options_handler__full_path__options] */
    /**
     * Options Handler
     */
    public static function optionsByFullPath(string $full_path): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\RootResource::class)->optionsByFullPath($full_path);
    }
}
