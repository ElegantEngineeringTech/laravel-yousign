<?php

namespace Elegantly\Yousign\Integration\Requests\SignerDocumentRequest;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-signers-signerId-documents-signerDocumentId
 */
class GetSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}/documents/{$this->signerDocumentId}/download";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     * @param  string  $signerDocumentId  Signer Document Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $signerId,
        protected string $signerDocumentId,
    ) {}
}
