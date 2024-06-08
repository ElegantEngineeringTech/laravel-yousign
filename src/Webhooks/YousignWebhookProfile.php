<?php

namespace Elegantly\Yousign\Webhooks;

use Illuminate\Http\Request;
use Spatie\WebhookClient\Models\WebhookCall;
use Spatie\WebhookClient\WebhookProfile\WebhookProfile;

class YousignWebhookProfile implements WebhookProfile
{
    public function shouldProcess(Request $request): bool
    {
        return ! WebhookCall::where('name', 'yousign')->where('payload->id', $request->get('id'))->exists();
    }
}
