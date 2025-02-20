<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-cancel
 */
class CancelSignatureRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/cancel";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $reason,
        protected ?string $custom_note = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'reason' => $this->reason,
            'custom_note' => $this->custom_note,
        ], fn ($param) => $param !== null);
    }
}
