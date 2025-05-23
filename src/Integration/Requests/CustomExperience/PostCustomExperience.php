<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\CustomExperience;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-custom-experience
 */
class PostCustomExperience extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/custom_experiences';
    }

    public function __construct() {}
}
