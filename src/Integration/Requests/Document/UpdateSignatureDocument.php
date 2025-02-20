<?php

namespace Elegantly\Yousign\Integration\Requests\Document;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-signature_requests-signatureRequestId-documents-documentId
 */
class UpdateSignatureDocument extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $documentId  Document Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $documentId,
        protected readonly ?string $nature = null,
        protected readonly ?string $insert_after_id = null,
        protected readonly ?string $password = null,
        protected readonly ?array $initials = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'nature' => $this->nature,
            'insert_after_id' => $this->insert_after_id,
            'password' => $this->password,
            'initials' => $this->initials,
        ]);
    }
}
