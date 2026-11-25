<?php

declare(strict_types=1);

namespace UdaSDK\ImportDesktop;

final class Schema extends \UdaSDK\PulseAPIPROSDK
{
    /** GET /import-desktop/schema/ [operationId: redirect_user_import_desktop_schema__get] */
    /**
     * Portfolio schema:: via API
     */
    public static function get(?\UdaSDK\GetParams\ImportDesktop\Schema $params = null): mixed
    {
        return self::client()->resource(\UdaSDK\Resources\ImportDesktop\Schema::class)->get($params);
    }

}
