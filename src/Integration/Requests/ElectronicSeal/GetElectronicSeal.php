<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\ElectronicSeal;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-electronic-seal
 */
class GetElectronicSeal extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/electronic_seals/{$this->electronicSealId}";
    }

    public function __construct(
        protected string $electronicSealId,
    ) {}
}
