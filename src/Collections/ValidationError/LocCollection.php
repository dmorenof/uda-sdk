<?php

declare(strict_types=1);

namespace UdaSDK\Collections\ValidationError;

final class LocCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \UdaSDK\DTOs\ValidationError\LocDTO::class;
}
