<?php

namespace Elegantly\Yousign\Integration\Requests\Contact;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-contact
 */
class PostContact extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/contacts';
    }

    public function __construct()
    {
    }
}
