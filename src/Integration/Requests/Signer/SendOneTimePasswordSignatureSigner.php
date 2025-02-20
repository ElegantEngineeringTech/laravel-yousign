<?php

namespace Elegantly\Yousign\Integration\Requests\Signer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-signers-signerId-send_otp
 *
 * Send a One-Time Password (OTP) to a specified Signer. This endpoint is useful for integrating the
 * signing flow into your application and allowing the Signer to sign through the API. Once the OTP is
 * sent, the Signer must provide it back to complete the Signature Request.
 */
class SendOneTimePasswordSignatureSigner extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}/send_otp";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $signerId,
    ) {}
}
