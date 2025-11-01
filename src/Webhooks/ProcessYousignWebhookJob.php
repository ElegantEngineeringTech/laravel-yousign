<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Webhooks;

use Exception;
use Illuminate\Support\Arr;
use Spatie\WebhookClient\Jobs\ProcessWebhookJob;
use Spatie\WebhookClient\Models\WebhookCall;

class ProcessYousignWebhookJob extends ProcessWebhookJob
{
    public function __construct(WebhookCall $webhookCall)
    {
        parent::__construct($webhookCall);

        $this->onConnection(config('yousign.webhooks.connection'));
        $this->onQueue(config('yousign.webhooks.queue'));
    }

    public function handle()
    {
        $eventName = Arr::get($this->webhookCall->payload, 'event_name');

        if (blank($eventName)) {
            throw new Exception("Webhook call id `{$this->webhookCall->id}` did not contain a event_name. Valid Yousign webhook calls should always contain a event_name.");
        }

        event("yousign-webhooks::{$eventName}", $this->webhookCall);

        $jobClass = $this->determineJobClass($eventName);

        if ($jobClass === '') {
            return;
        }

        if (! class_exists($jobClass)) {
            throw new Exception("Could not process webhook id `{$this->webhookCall->id}` because the configured jobclass `{$jobClass}` does not exist.");
        }

        dispatch(new $jobClass($this->webhookCall));
    }

    protected function determineJobClass(string $eventType): string
    {
        $jobConfigKey = str_replace('.', '_', $eventType);

        $defaultJob = config('yousign.webhooks.default_job', '');

        return config("yousign.webhooks.jobs.{$jobConfigKey}", $defaultJob);
    }
}
