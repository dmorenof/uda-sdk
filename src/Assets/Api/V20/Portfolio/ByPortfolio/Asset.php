<?php

declare(strict_types=1);

namespace UdaSDK\Assets\Api\V20\Portfolio\ByPortfolio;

final class Asset extends \UdaSDK\PulseAPIPROSDK
{
    /** POST /assets/api/v2.0/portfolio/{portfolio}/asset [operationId: _valuate_adapter_assets_api_v2_0_portfolio__portfolio__asset_post] */
    /**
     * Asset :: Valuation (v2)
     *
     * Adapter to forward valuation requests to the valuation API.
     *
     * Args:
     *     request (Request): Incoming FastAPI request.
     *     portfolio (int, optional): Portfolio ID. Defaults to 999.
     *     user (dict, optional): Authenticated user. Defaults to API user dependency.
     *
     * Returns:
     *     Response: API response from the valuation service.
     *
     * @deprecated
     */
    public static function post(int $portfolio): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Assets\Api\V20\Portfolio\ByPortfolio\Asset::class)->post($portfolio);
    }

}
