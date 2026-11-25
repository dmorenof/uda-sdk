# Third-party API and trademark notices

This is an **independent, unofficial** client library. It is not affiliated with, endorsed by, or supported by uDA Real Estate Data, S.L.

- uDA and its service names belong to their owners; the MIT license grants no rights to them and does not sublicense the uDA API or its terms. This package is unrelated to the older, hand-written `urbandataanalytics` library.
- The contract in `contract/uda-openapi.json` is the OpenAPI document of the API ("Pulse-API (PRO)" 0.0.1), downloaded from <https://api.urbandataanalytics.com/openapi.json> in November 2026. **That document is defective**: 24 path placeholders (`{portfolio}`, `{version}`, `{asset_id}`, `{url_path}`...) have no parameter declared. The generator declared each one as a required string and read `{url_path}` and `{full_path}` as the rest of the path (their slashes are kept); the generation report lists every repair. `{version}` is the API version number (`v{version}.0`).
- Using the API requires an API key from uDA and compliance with its terms.
- Provided without warranty.
