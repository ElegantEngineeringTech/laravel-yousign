<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSignatureRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function __construct(
        protected string $signatureRequestId,
    ) {}
}
