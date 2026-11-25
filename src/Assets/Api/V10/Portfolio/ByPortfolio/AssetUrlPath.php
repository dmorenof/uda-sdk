<?php

declare(strict_types=1);

namespace UdaSDK\Assets\Api\V10\Portfolio\ByPortfolio;

final class AssetUrlPath extends \UdaSDK\PulseAPIPROSDK
{
    /** POST /assets/api/v1.0/portfolio/{portfolio}/asset{url_path} [operationId: redirect_user_assets_api_v1_0_portfolio__portfolio__asset_url_path__post] */
    /**
     * Asset :: Valuation (v1)
     *
     * @deprecated
     */
    public static function post(\UdaSDK\PathParams\Assets\Api\V10\Portfolio\ByPortfolio\AssetUrlPath $identifier, ?\UdaSDK\PostParams\Assets\Api\V10\Portfolio\ByPortfolio\AssetUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Assets\Api\V10\Portfolio\ByPortfolio\AssetUrlPath::class)->post($identifier, $params);
    }
}
