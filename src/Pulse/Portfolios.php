<?php

declare(strict_types=1);

namespace UdaSDK\Pulse;

final class Portfolios extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /pulse/portfolios/{url_path} [operationId: redirect_user_pulse_portfolios__url_path__get] */
    /**
     * Portfolio List:: via API
     */
    public static function getByUrlPath(string $url_path, ?\UdaSDK\GetParams\Pulse\Portfolios\ByUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Pulse\Portfolios::class)->getByUrlPath($url_path, $params);
    }

}
