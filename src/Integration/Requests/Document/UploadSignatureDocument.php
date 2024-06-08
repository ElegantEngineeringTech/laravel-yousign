<?php

namespace Elegantly\Yousign\Integration\Requests\Document;

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
        return [
            new MultipartValue(
                name: 'file',
                value: $this->file,
            ),
            new MultipartValue(
                name: 'nature',
                value: $this->nature,
            ),
            new MultipartValue(
                name: 'insert_after_id',
                value: $this->insert_after_id,
            ),
            new MultipartValue(
                name: 'password',
                value: $this->password,
            ),
            new MultipartValue(
                name: 'initials',
                value: $this->initials,
            ),
            new MultipartValue(
                name: 'parse_anchors',
                value: $this->parse_anchors ? 'true' : 'false',
            ),
        ];
    }
}
