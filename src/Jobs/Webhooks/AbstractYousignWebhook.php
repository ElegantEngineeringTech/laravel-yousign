<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Jobs\Webhooks;

use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Spatie\WebhookClient\Models\WebhookCall;

abstract class AbstractYousignWebhook implements ShouldBeUnique, ShouldQueue
{
    use Queueable;

    public function __construct(public WebhookCall $webhookCall)
    {
        $this->onConnection(config('yousign.webhooks.connection'));
        $this->onQueue(config('yousign.webhooks.queue'));
    }

    public function uniqueId(): string
    {
        return (string) data_get($this->webhookCall->payload, 'event_id');
    }

    abstract public function handle(): void;
}
