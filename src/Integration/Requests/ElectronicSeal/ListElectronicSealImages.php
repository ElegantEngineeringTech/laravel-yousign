<?php

namespace Elegantly\Yousign\Integration\Requests\ElectronicSeal;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * list-electronic_seal-images
 */
class ListElectronicSealImages extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/electronic_seal_images';
    }

    public function __construct()
    {
    }

    public function defaultQuery(): array
    {
        return array_filter([]);
    }
}
