<?php

namespace Elegantly\Yousign\Integration\Requests\Field;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * update-signature_requests-signatureRequestId-documents-documentId-fields-fieldId
 *
 * Update a Document's Field in a Signature Request (in draft status).
 */
class UpdateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}/fields/{$this->fieldId}";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $documentId  Document Id
     * @param  string  $fieldId  Field Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $documentId,
        protected string $fieldId,
    ) {}
}
