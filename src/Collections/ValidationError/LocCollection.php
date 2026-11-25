<?php

declare(strict_types=1);

namespace UdaSDK\Collections\ValidationError;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\UdaSDK\DTOs\ValidationError\LocDTO> */
final class LocCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \UdaSDK\DTOs\ValidationError\LocDTO::class;
}
