<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\Signer;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-signature_requests-signatureRequestId-signers-signerId
 */
class UpdateSignatureSigner extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

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
        protected readonly ?array $info = null,
        protected readonly ?string $signature_level = null,
        protected readonly ?string $insert_after_id = null,
        protected readonly ?string $signature_authentication_mode = null,
        protected readonly ?array $redirect_urls = null,
        protected readonly ?array $custom_text = null,
        protected readonly ?string $delivery_mode = null,
        protected readonly ?string $identification_attestation_id = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'info' => $this->info,
            'signature_level' => $this->signature_level,
            'insert_after_id' => $this->insert_after_id,
            'signature_authentication_mode' => $this->signature_authentication_mode,
            'redirect_urls' => $this->redirect_urls,
            'custom_text' => $this->custom_text,
            'delivery_mode' => $this->delivery_mode,
            'identification_attestation_id' => $this->identification_attestation_id,
        ], fn ($param) => $param !== null);
    }
}
