<?php

declare(strict_types=1);

namespace UdaSDK\Reds\Api\VVersion0\Urban;

final class IndicatorsUrlPath extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /reds/api/v{version}.0/urban/indicators{url_path} [operationId: redirect_user_reds_api_v_version__0_urban_indicators_url_path__get] */
    /**
     * Indicators (B)
     *
     * @deprecated
     */
    public static function get(\UdaSDK\PathParams\Reds\Api\VVersion0\Urban\IndicatorsUrlPath $identifier, ?\UdaSDK\GetParams\Reds\Api\VVersion0\Urban\IndicatorsUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Reds\Api\VVersion0\Urban\IndicatorsUrlPath::class)->get($identifier, $params);
    }
}
