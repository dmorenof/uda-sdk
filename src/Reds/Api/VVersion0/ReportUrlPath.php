<?php

declare(strict_types=1);

namespace UdaSDK\Reds\Api\VVersion0;

final class ReportUrlPath extends \UdaSDK\PulseAPIPROSDK
{
    /** POST /reds/api/v{version}.0/report{url_path} [operationId: redirect_user_reds_api_v_version__0_report_url_path__post] */
    /**
     * PDF :: Request New
     *
     * @deprecated
     */
    public static function post(\UdaSDK\PathParams\Reds\Api\VVersion0\ReportUrlPath $identifier, ?\UdaSDK\PostParams\Reds\Api\VVersion0\ReportUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Reds\Api\VVersion0\ReportUrlPath::class)->post($identifier, $params);
    }
}
