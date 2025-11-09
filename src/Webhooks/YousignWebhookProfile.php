<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Webhooks;

use Illuminate\Http\Request;
use Spatie\WebhookClient\Models\WebhookCall;
use Spatie\WebhookClient\WebhookProfile\WebhookProfile;

class YousignWebhookProfile implements WebhookProfile
{
    public function shouldProcess(Request $request): bool
    {
        return ! WebhookCall::query()
            ->where('name', 'yousign')
            ->where('payload->event_id', $request->get('event_id'))
            ->exists();
    }
}
