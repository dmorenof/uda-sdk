<?php

declare(strict_types=1);

namespace UdaSDK\Urban\Api\VVersion0;

final class IndicatorsUrlPath extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /urban/api/v{version}.0/indicators{url_path} [operationId: redirect_user_urban_api_v_version__0_indicators_url_path__get] */
    /**
     * Indicators (A)
     *
     * @deprecated
     */
    public static function get(\UdaSDK\PathParams\Urban\Api\VVersion0\IndicatorsUrlPath $identifier, ?\UdaSDK\GetParams\Urban\Api\VVersion0\IndicatorsUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Urban\Api\VVersion0\IndicatorsUrlPath::class)->get($identifier, $params);
    }
}
