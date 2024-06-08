<?php

namespace Elegantly\Yousign\Integration\Requests\Webhook;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-webhooks
 */
class GetWebhooks extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/webhooks';
    }

    public function __construct()
    {
    }
}
