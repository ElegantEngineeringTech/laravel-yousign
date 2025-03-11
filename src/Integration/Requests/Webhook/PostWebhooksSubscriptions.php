<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\Webhook;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-webhooks-subscriptions
 */
class PostWebhooksSubscriptions extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/webhooks';
    }

    public function __construct() {}
}
