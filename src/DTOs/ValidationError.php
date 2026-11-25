<?php

declare(strict_types=1);

namespace UdaSDK\DTOs;

/**
 * ValidationError
 */
final class ValidationError extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'loc',
    'msg',
    'type',
];

    public \UdaSDK\Collections\ValidationError\LocCollection $loc;
    public string $msg;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'msg' => is_string($value) ? $this->msg = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
