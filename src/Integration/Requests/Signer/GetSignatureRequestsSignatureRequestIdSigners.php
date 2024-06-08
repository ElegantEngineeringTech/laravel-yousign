<?php

namespace Elegantly\Yousign\Integration\Requests\Signer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-signers
 */
class GetSignatureRequestsSignatureRequestIdSigners extends Request
{
    protected Method $method = Method::GET;

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
