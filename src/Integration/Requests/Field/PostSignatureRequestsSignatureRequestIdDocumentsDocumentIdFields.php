<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\Field;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-documents-documentId-fields
 */
class PostSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}/fields";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $documentId  Document ID
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $documentId,
    ) {}
}
