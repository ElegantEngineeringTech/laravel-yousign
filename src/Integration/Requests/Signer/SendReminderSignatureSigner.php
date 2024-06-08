<?php

namespace Elegantly\Yousign\Integration\Requests\Signer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-signers-signerId-send_reminder
 */
class SendReminderSignatureSigner extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}/send_reminder";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $signerId,
    ) {
    }
}
