<?php

declare(strict_types=1);

namespace UdaSDK\Reds\Api\Asset\ByAssetId;

final class PdfUrlPath extends \UdaSDK\PulseAPIPROSDK
{
    /** POST /reds/api/asset/{asset_id}/pdf{url_path} [operationId: redirect_user_reds_api_asset__asset_id__pdf_url_path__post] */
    /**
     * Asset :: Request PDF
     *
     * @deprecated
     */
    public static function post(\UdaSDK\PathParams\Reds\Api\Asset\ByAssetId\PdfUrlPath $identifier, ?\UdaSDK\PostParams\Reds\Api\Asset\ByAssetId\PdfUrlPath $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\Reds\Api\Asset\ByAssetId\PdfUrlPath::class)->post($identifier, $params);
    }

}
