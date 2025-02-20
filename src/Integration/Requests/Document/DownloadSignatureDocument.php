<?php

namespace Elegantly\Yousign\Integration\Requests\Document;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-documents-documents-id-download
 */
class DownloadSignatureDocument extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}/download";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $documentId  Document Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $documentId,
    ) {}

    public function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/pdf',
        ];
    }
}
