<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * post-signature_requests-signatureRequestId-signatures
 */
class ActivateSignatureRequest extends Request
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/activate";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function __construct(
        protected string $signatureRequestId,
    ) {}
}
