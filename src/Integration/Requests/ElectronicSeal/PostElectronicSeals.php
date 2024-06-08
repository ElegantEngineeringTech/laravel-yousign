<?php

namespace Elegantly\Yousign\Integration\Requests\ElectronicSeal;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-electronic-seals
 */
class PostElectronicSeals extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/electronic_seals';
    }

    public function __construct()
    {
    }
}
