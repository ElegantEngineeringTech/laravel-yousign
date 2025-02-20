<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Webhook\DeleteWebhooksWebhookId;
use Elegantly\Yousign\Integration\Requests\Webhook\GetWebhooks;
use Elegantly\Yousign\Integration\Requests\Webhook\GetWebhooksWebhookId;
use Elegantly\Yousign\Integration\Requests\Webhook\PatchWebhooksWebhookId;
use Elegantly\Yousign\Integration\Requests\Webhook\PostWebhooksSubscriptions;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class Webhook extends Resource
{
    public function getWebhooks(): Response
    {
        return $this->connector->send(new GetWebhooks);
    }

    public function postWebhooksSubscriptions(): Response
    {
        return $this->connector->send(new PostWebhooksSubscriptions);
    }

    /**
     * @param  string  $webhookId  Webhook Id
     */
    public function getWebhooksWebhookId(string $webhookId): Response
    {
        return $this->connector->send(new GetWebhooksWebhookId($webhookId));
    }

    /**
     * @param  string  $webhookId  Webhook Id
     */
    public function deleteWebhooksWebhookId(string $webhookId): Response
    {
        return $this->connector->send(new DeleteWebhooksWebhookId($webhookId));
    }

    /**
     * @param  string  $webhookId  Webhook Id
     */
    public function patchWebhooksWebhookId(string $webhookId): Response
    {
        return $this->connector->send(new PatchWebhooksWebhookId($webhookId));
    }
}
