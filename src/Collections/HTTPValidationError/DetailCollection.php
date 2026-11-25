<?php

declare(strict_types=1);

namespace UdaSDK\Collections\HTTPValidationError;

final class DetailCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \UdaSDK\DTOs\ValidationError::class;
}
