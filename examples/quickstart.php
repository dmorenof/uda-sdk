<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use UdaSDK\Configuration;
use UdaSDK\PulseAPIPROSDK;
use UdaSDK\PathParams\Assets\Api\VVersion0\Asset\ByAssetId\IndicatorsUrlPath as IndicatorsPath;
use UdaSDK\Assets\Api\VVersion0\Asset\ByAssetId\IndicatorsUrlPath as Indicators;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['APIKeyHeader' => getenv('UDA_API_KEY') ?: '']);
PulseAPIPROSDK::configure($configuration);

// GET /assets/api/v1.0/asset/A-7/indicators/period/2024%20Q1
$indicators = Indicators::get(new IndicatorsPath((object) ['version' => '1', 'asset_id' => 'A-7', 'url_path' => '/period/2024 Q1']));

echo json_encode($indicators), "\n";
