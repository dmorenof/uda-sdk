<?php

declare(strict_types=1);

namespace UdaSDK\Geo\Api\VVersion0;

final class Intersect extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /geo/api/v{version}.0/intersect [operationId: redirect_user_geo_api_v_version__0_intersect_get] */
    /**
     * Geometry :: Intersect
     *
     * @deprecated
     */
    public static function get(string $version, ?\UdaSDK\GetParams\Geo\Api\VVersion0\Intersect $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Geo\Api\VVersion0\Intersect::class)->get($version, $params);
    }
}
