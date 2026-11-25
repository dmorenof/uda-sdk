<?php

declare(strict_types=1);

namespace UdaSDK\Resources\Assets\Api\V20\Portfolio\ByPortfolio;

final class Asset extends \UdaSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/assets/api/v2.0/portfolio/{portfolio}/asset',
        'security' => [
            [
                'APIKeyQuery' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
        ],
        'errors' => [
            422 => '\\UdaSDK\\DTOs\\HTTPValidationError',
        ],
        'errorResponses' => [
            422 => [
                'type' => '\\UdaSDK\\DTOs\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => 'mixed',
    ];

    /**
     * Asset :: Valuation (v2)
     *
     * Adapter to forward valuation requests to the valuation API.
     *
     * Args:
     *     request (Request): Incoming FastAPI request.
     *     portfolio (int, optional): Portfolio ID. Defaults to 999.
     *     user (dict, optional): Authenticated user. Defaults to API user dependency.
     *
     * Returns:
     *     Response: API response from the valuation service.
     *
     * @deprecated
     */
    public function post(int $portfolio): mixed
    {
        /** @var mixed $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['portfolio' => $portfolio]);
        return $result;
    }
}
