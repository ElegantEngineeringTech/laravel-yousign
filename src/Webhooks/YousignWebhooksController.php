<?php

namespace Elegantly\Yousign\Webhooks;

use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookConfig;
use Spatie\WebhookClient\WebhookProcessor;

class YousignWebhooksController
{
    public function __invoke(Request $request)
    {
        $webhookConfig = new WebhookConfig([
            'name' => 'yousign',
            'signing_secret' => config('yousign.webhooks.signing_secret'),
            'signature_header_name' => 'X-Yousign-Signature-256',
            'signature_validator' => YousignSignatureValidator::class,
            'webhook_profile' => config('yousign.webhooks.profile'),
            'webhook_model' => config('yousign.webhooks.model'),
            'process_webhook_job' => ProcessStripeWebhookJob::class,
        ]);

        return (new WebhookProcessor($request, $webhookConfig))->process();
    }
}
