<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\AuditTrail\GetSignatureRequestsSignatureRequestIdAuditTrailsDownload;
use Elegantly\Yousign\Integration\Requests\AuditTrail\GetSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails;
use Elegantly\Yousign\Integration\Requests\AuditTrail\GetSignersSignerIdAuditTrailsDownload;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class AuditTrail extends Resource
{
    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function getSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new GetSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails($signatureRequestId, $signerId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function getSignatureRequestsSignatureRequestIdAuditTrailsDownload(string $signatureRequestId): Response
    {
        return $this->connector->send(new GetSignatureRequestsSignatureRequestIdAuditTrailsDownload($signatureRequestId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function getSignersSignerIdAuditTrailsDownload(string $signatureRequestId, string $signerId): Response
    {
        return $this->connector->send(new GetSignersSignerIdAuditTrailsDownload($signatureRequestId, $signerId));
    }
}
