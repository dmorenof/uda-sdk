# uDA Pulse SDK for PHP: operations

15 operations. Each is a static method of a facade class (`UdaSDK\...`); configure the SDK once with `PulseAPIPROSDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Asset :: Valuation (v1) | POST | `/assets/api/v1.0/portfolio/{portfolio}/asset{url_path}` | `Assets\Api\V10\Portfolio\ByPortfolio\AssetUrlPath::post()` |
| Asset :: Valuation (v2) | POST | `/assets/api/v2.0/portfolio/{portfolio}/asset` | `Assets\Api\V20\Portfolio\ByPortfolio\Asset::post()` |
| Asset :: Comparables | GET | `/assets/api/v{version}.0/asset/{asset_id}/competitors` | `Assets\Api\VVersion0\Asset\ByAssetId\Competitors::get()` |
| Asset :: Indicators | GET | `/assets/api/v{version}.0/asset/{asset_id}/indicators{url_path}` | `Assets\Api\VVersion0\Asset\ByAssetId\IndicatorsUrlPath::get()` |
| Area Category | GET | `/forecast/api/v{version}.0/category/area/{url_path}` | `Forecast\Api\VVersion0\Category\Area::getByUrlPath()` |
| Geometry :: Intersect | GET | `/geo/api/v{version}.0/intersect` | `Geo\Api\VVersion0\Intersect::get()` |
| Portfolio schema:: via API | GET | `/import-desktop/schema/` | `ImportDesktop\Schema::get()` |
| Portfolio List:: via API | GET | `/pulse/portfolios/{url_path}` | `Pulse\Portfolios::getByUrlPath()` |
| Asset :: Request PDF | POST | `/reds/api/asset/{asset_id}/pdf{url_path}` | `Reds\Api\Asset\ByAssetId\PdfUrlPath::post()` |
| Current Period | GET | `/reds/api/v{version}.0/period{url_path}` | `Reds\Api\VVersion0\PeriodUrlPath::get()` |
| PDF :: Request New | POST | `/reds/api/v{version}.0/report{url_path}` | `Reds\Api\VVersion0\ReportUrlPath::post()` |
| Indicators (B) | GET | `/reds/api/v{version}.0/urban/indicators{url_path}` | `Reds\Api\VVersion0\Urban\IndicatorsUrlPath::get()` |
| PDF :: Check Progress | GET | `/taskqueue/api/v{version}.0/task/{task_id}{url_path}` | `Taskqueue\Api\VVersion0\Task\TaskIdUrlPath::get()` |
| Indicators (A) | GET | `/urban/api/v{version}.0/indicators{url_path}` | `Urban\Api\VVersion0\IndicatorsUrlPath::get()` |
| Options Handler | OPTIONS | `/{full_path}` | `RootResource::optionsByFullPath()` |
