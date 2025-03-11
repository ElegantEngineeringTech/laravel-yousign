<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\ElectronicSeal;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-electronic-seal-image
 */
class DeleteElectronicSealImage extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/electronic_seal_images/{$this->electronicSealImageId}";
    }

    public function __construct(
        protected string $electronicSealImageId,
    ) {}
}
