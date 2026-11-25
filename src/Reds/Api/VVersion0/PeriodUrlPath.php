<?php

declare(strict_types=1);

namespace UdaSDK\Reds\Api\VVersion0;

final class PeriodUrlPath extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /reds/api/v{version}.0/period{url_path} [operationId: redirect_user_reds_api_v_version__0_period_url_path__get] */
    /**
     * Current Period
     *
     * @deprecated
     */
    public static function get(\UdaSDK\PathParams\Reds\Api\VVersion0\PeriodUrlPath $identifier, ?\UdaSDK\GetParams\Reds\Api\VVersion0\PeriodUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Reds\Api\VVersion0\PeriodUrlPath::class)->get($identifier, $params);
    }
}
