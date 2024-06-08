<?php

namespace Elegantly\Yousign\Integration\Requests\Webhook;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-webhooks-webhookId
 */
class GetWebhooksWebhookId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->webhookId}";
    }

    /**
     * @param  string  $webhookId  Webhook Id
     */
    public function __construct(
        protected string $webhookId,
    ) {
    }
}
