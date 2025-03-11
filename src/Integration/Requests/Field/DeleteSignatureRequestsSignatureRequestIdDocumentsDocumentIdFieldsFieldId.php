<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\Field;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-signature_requests-signatureRequestId-documents-documentId-fields-fieldId
 *
 * Delete a Document's Field in a Signature Request (in draft status)
 */
class DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId extends Request
{
    protected Method $method = Method::DELETE;

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
