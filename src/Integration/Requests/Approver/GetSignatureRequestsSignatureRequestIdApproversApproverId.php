<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\Approver;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-approvers-approverId
 */
class GetSignatureRequestsSignatureRequestIdApproversApproverId extends Request
{
    protected Method $method = Method::GET;

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
