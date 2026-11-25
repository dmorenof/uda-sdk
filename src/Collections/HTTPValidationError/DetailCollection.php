<?php

declare(strict_types=1);

namespace UdaSDK\Collections\HTTPValidationError;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\UdaSDK\DTOs\ValidationError> */
final class DetailCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \UdaSDK\DTOs\ValidationError::class;
}
