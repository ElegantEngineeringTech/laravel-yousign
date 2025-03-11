<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\SignerDocumentRequest\DeleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments;
use Elegantly\Yousign\Integration\Requests\SignerDocumentRequest\GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments;
use Elegantly\Yousign\Integration\Requests\SignerDocumentRequest\GetSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId;
use Elegantly\Yousign\Integration\Requests\SignerDocumentRequest\PostSignatureRequestsSignatureRequestIdDocumentRequests;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class SignerDocumentRequest extends Resource
{
    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function postSignatureRequestsSignatureRequestIdDocumentRequests(string $signatureRequestId): Response
    {
        return $this->connector->send(new PostSignatureRequestsSignatureRequestIdDocumentRequests($signatureRequestId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function getSignatureRequestsSignatureRequestIdSignersSignerIdDocuments(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments($signatureRequestId, $signerId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function deleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments($signatureRequestId, $signerId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     * @param  string  $signerDocumentId  Signer Document Id
     */
    public function getSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId(
        string $signatureRequestId,
        string $signerId,
        string $signerDocumentId,
    ): Response {
        return $this->connector->send(new GetSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId($signatureRequestId, $signerId, $signerDocumentId));
    }
}
