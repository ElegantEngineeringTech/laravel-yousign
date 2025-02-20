<?php

namespace Elegantly\Yousign\Integration\Requests\Metadata;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * put-signature_requests-signatureRequestId-metadata
 */
class PutSignatureRequestsSignatureRequestIdMetadata extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/metadata";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function __construct(
        protected string $signatureRequestId,
    ) {}
}
