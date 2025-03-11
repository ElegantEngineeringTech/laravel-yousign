<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\AuditTrail;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-audit_trails-download
 */
class GetSignatureRequestsSignatureRequestIdAuditTrailsDownload extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/audit_trails/download";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function __construct(
        protected string $signatureRequestId,
    ) {}
}
