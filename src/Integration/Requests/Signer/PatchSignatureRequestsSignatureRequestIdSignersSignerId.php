<?php

namespace Elegantly\Yousign\Integration\Requests\Signer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-signature_requests-signatureRequestId-signers-signerId
 */
class PatchSignatureRequestsSignatureRequestIdSignersSignerId extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}";
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
