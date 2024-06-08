<?php

namespace Elegantly\Yousign\Integration\Requests\Signer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-signers
 */
class PostSignatureRequestsSignatureRequestIdSigners extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/signers";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function __construct(
        protected string $signatureRequestId,
    ) {
    }
}
