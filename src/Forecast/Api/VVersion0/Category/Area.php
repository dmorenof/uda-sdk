<?php

declare(strict_types=1);

namespace UdaSDK\Forecast\Api\VVersion0\Category;

final class Area extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /forecast/api/v{version}.0/category/area/{url_path} [operationId: redirect_user_forecast_api_v_version__0_category_area__url_path__get] */
    /**
     * Area Category
     *
     * @deprecated
     */
    public static function getByUrlPath(\UdaSDK\PathParams\Forecast\Api\VVersion0\Category\Area\ByUrlPath $identifier, ?\UdaSDK\GetParams\Forecast\Api\VVersion0\Category\Area\ByUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Forecast\Api\VVersion0\Category\Area::class)->getByUrlPath($identifier, $params);
    }
}
