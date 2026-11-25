<?php

declare(strict_types=1);

namespace UdaSDK\Assets\Api\VVersion0\Asset\ByAssetId;

final class IndicatorsUrlPath extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /assets/api/v{version}.0/asset/{asset_id}/indicators{url_path} [operationId: redirect_user_assets_api_v_version__0_asset__asset_id__indicators_url_path__get] */
    /**
     * Asset :: Indicators
     *
     * @deprecated
     */
    public static function get(\UdaSDK\PathParams\Assets\Api\VVersion0\Asset\ByAssetId\IndicatorsUrlPath $identifier, ?\UdaSDK\GetParams\Assets\Api\VVersion0\Asset\ByAssetId\IndicatorsUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Assets\Api\VVersion0\Asset\ByAssetId\IndicatorsUrlPath::class)->get($identifier, $params);
    }
}
