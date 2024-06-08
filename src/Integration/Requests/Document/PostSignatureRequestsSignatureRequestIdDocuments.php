<?php

namespace Elegantly\Yousign\Integration\Requests\Document;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-documents
 */
class PostSignatureRequestsSignatureRequestIdDocuments extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/documents";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function __construct(
        protected string $signatureRequestId,
    ) {
    }
}
