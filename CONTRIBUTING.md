# Contributing

`src/` is generated from the contract in `contract/` by [sdk-generator](https://github.com/dmorenof/sdk-generator): please do not edit it by hand, a regeneration would erase the change.

- **A wrong or missing operation, field or type:** open an issue with the vendor's documentation link. The fix is in the contract (or, if the generator reads it wrongly, in the generator).
- **A bug in sending or reading data:** it is most likely in [sdk-runtime](https://github.com/dmorenof/sdk-runtime); an issue here is welcome and will be moved.
- **Documentation, examples, tests:** pull requests welcome. Run `composer install && composer test && composer analyse` before opening one.
