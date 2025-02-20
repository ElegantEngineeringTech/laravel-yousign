<?php

namespace Elegantly\Yousign\Integration\Requests\Approver;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-signature_requests-signatureRequestId-approvers-approverId
 */
class PatchSignatureRequestsSignatureRequestIdApproversApproverId extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/approvers/{$this->approverId}";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $approverId  Approver Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $approverId,
    ) {}
}
