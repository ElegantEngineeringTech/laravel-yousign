<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\SignerDocumentRequest;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-signature_requests-signatureRequestId-signers-signerId-documents
 */
class DeleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}/documents";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $signerId,
    ) {}
}
