<?php

namespace Elegantly\Yousign\Integration\Requests\Document;

use Illuminate\Support\Collection;
use Psr\Http\Message\StreamInterface;
use Saloon\Contracts\Body\HasBody;
use Saloon\Data\MultipartValue;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasMultipartBody;

/**
 * post-signature_requests-signatureRequestId-documents
 */
class UploadSignatureDocument extends Request implements HasBody
{
    use HasMultipartBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/documents";
    }

    /**
     * @param  StreamInterface|resource|string|int  $file
     */
    public function __construct(
        protected string $signatureRequestId,
        protected readonly mixed $file,
        protected readonly string $nature,
        protected readonly ?string $insert_after_id = null,
        protected readonly ?string $password = null,
        protected readonly ?array $initials = null,
        protected readonly ?bool $parse_anchors = false,
    ) {
    }

    protected function defaultBody(): array
    {
        return collect([
            new MultipartValue(
                name: 'file',
                value: $this->file,
            ),
            new MultipartValue(
                name: 'nature',
                value: $this->nature,
            ),
        ])->when($this->insert_after_id, fn (Collection $params) => $params->push(new MultipartValue(
            name: 'insert_after_id',
            value: $this->insert_after_id,
        )))->when($this->password, fn (Collection $params) => $params->push(new MultipartValue(
            name: 'password',
            value: $this->password,
        )))->when($this->initials, fn (Collection $params) => $params->push(
            new MultipartValue(
                name: 'alignment',
                value: $this->initials['alignment'],
            ),
            new MultipartValue(
                name: 'y',
                value: $this->initials['y'],
            ),
        ))->when($this->parse_anchors, fn (Collection $params) => $params->push(new MultipartValue(
            name: 'parse_anchors',
            value: $this->parse_anchors ? 'true' : 'false',
        )))->toArray();
    }
}
