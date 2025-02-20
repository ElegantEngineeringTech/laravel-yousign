<?php

namespace Elegantly\Yousign\Integration\Requests\Signer;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signers-signersId
 */
class GetSignatureSigner extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}";
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
