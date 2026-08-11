<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Jobs\Webhooks;

abstract class AbstractSignatureRequestWebhook extends AbstractYousignWebhook
{
    public function getSignatureRequest(): array
    {
        return data_get($this->webhookCall->payload, 'data.signature_request');
    }
}
