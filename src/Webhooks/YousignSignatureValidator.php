<?php

namespace Elegantly\Yousign\Webhooks;

use Illuminate\Http\Request;
use Spatie\WebhookClient\SignatureValidator\SignatureValidator;
use Spatie\WebhookClient\WebhookConfig;

/**
 * @see https://developers.yousign.com/docs/security
 */
class YousignSignatureValidator implements SignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool
    {
        if (! config('yousign.webhooks.verify_signature')) {
            return true;
        }

        $expectedSignature = $request->header($config->signatureHeaderName);

        $secret = $config->signingSecret;
        $payload = $request->getContent();

        $computedSignature = 'sha256='.hash_hmac('sha256', $payload, $secret);

        return hash_equals($expectedSignature, $computedSignature);
    }
}
