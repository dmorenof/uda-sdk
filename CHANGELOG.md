# Changelog

## [0.1.1] — 2026-11-25

Regenerated with sdk-generator 1.15.4: every collection and map says what it holds in its PHPDoc, so static analysis knows the type of each item (iterating a collection no longer gives `mixed` at PHPStan max). Requires `dmorenof/sdk-runtime` `^1.14.1`. Nothing changes at run time.

## [0.1.0] — 2026-11-25

First version, generated with sdk-generator 1.15.2 on sdk-runtime 1.13.0 from the contract in `contract/`. Checked against the contract (generation, PHPStan at the maximum level, serialization of requests); not exercised against the live service.
