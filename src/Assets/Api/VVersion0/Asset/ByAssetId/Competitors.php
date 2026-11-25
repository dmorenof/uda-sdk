<?php

declare(strict_types=1);

namespace UdaSDK\Assets\Api\VVersion0\Asset\ByAssetId;

final class Competitors extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /assets/api/v{version}.0/asset/{asset_id}/competitors [operationId: redirect_user_assets_api_v_version__0_asset__asset_id__competitors_get] */
    /**
     * Asset :: Comparables
     *
     * @deprecated
     */
    public static function get(\UdaSDK\PathParams\Assets\Api\VVersion0\Asset\ByAssetId\Competitors $identifier, ?\UdaSDK\GetParams\Assets\Api\VVersion0\Asset\ByAssetId\Competitors $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Assets\Api\VVersion0\Asset\ByAssetId\Competitors::class)->get($identifier, $params);
    }
}
