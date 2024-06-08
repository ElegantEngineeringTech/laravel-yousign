<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-signature_requests-signatureRequestId
 *
 * Delete a Signature Request (except in approval and ongoing status).
 */
class DeleteSignatureRequest extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  null|bool  $permanentDelete  If true it will permanently delete the Signature Request. It will no longer be retrievable.
     */
    public function __construct(
        protected string $signatureRequestId,
        protected ?bool $permanentDelete = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['permanent_delete' => $this->permanentDelete], fn ($param) => $param !== null);
    }
}
