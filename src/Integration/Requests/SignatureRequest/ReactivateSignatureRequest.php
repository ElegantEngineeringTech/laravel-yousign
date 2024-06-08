<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use Carbon\Carbon;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-reactivate
 */
class ReactivateSignatureRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/reactivate";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected Carbon $expiration_date,
    ) {
    }

    public function defaultBody(): array
    {
        return [
            'expiration_date' => $this->expiration_date->format('Y-m-d'),
        ];
    }
}
