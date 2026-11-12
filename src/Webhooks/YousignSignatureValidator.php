<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Webhooks;

use Illuminate\Http\Request;
use Spatie\WebhookClient\Exceptions\InvalidConfig;
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

        $secret = $config->signingSecret;

        if (blank($secret)) {
            throw InvalidConfig::signingSecretNotSet();
        }

        $expectedSignature = $request->header($config->signatureHeaderName);

        if (! is_string($expectedSignature) || $expectedSignature === '') {
            return false;
        }

        $computedSignature = 'sha256='.hash_hmac('sha256', $request->getContent(), $secret);

        return hash_equals($computedSignature, $expectedSignature);
    }
}
