<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\Webhook;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-webhooks-webhookId
 */
class DeleteWebhooksWebhookId extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->webhookId}";
    }

    /**
     * @param  string  $webhookId  Webhook Id
     */
    public function __construct(
        protected string $webhookId,
    ) {}
}
