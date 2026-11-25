# uDA Pulse SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/uda-sdk.svg)](https://packagist.org/packages/dmorenof/uda-sdk)

**Urban Data Analytics real-estate indicators, portfolios and forecasts from PHP.**

Asset indicators, portfolio imports, valuation and market forecasts from the uDA Pulse API, with the versioned URLs and rest-of-path parameters of the real service handled for you.

> Unofficial. Not affiliated with, endorsed by or supported by uDA Real Estate Data. See [NOTICE.md](NOTICE.md).

## Why this SDK

- 15 operations, including the catch-all `{url_path}` routes with their slashes kept.
- API key by header or by query, as you prefer.
- The contract's 24 undeclared path parameters were repaired and reported at generation.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/uda-openapi.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 15 operations and 3 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/uda-sdk
```

## Quick start

```php
<?php
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
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

15 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `assets` | 4 |
| `reds` | 4 |
| `forecast` | 1 |
| `geo` | 1 |
| `import-desktop` | 1 |
| `pulse` | 1 |
| `taskqueue` | 1 |
| `urban` | 1 |
| `/` | 1 |

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- uDA's published OpenAPI document is defective (see NOTICE.md); the SDK follows the repaired reading.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://api.urbandataanalytics.com/docs)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
