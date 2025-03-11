<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\Document;

use Psr\Http\Message\StreamInterface;
use Saloon\Contracts\Body\HasBody;
use Saloon\Data\MultipartValue;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasMultipartBody;

/**
 * post-signature_requests-signatureRequestId-documents-documentId-replace
 */
class ReplaceSignatureDocument extends Request implements HasBody
{
    use HasMultipartBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}/replace";
    }

    /**
     * @param  StreamInterface|resource|string|int  $file
     */
    public function __construct(
        protected string $signatureRequestId,
        protected string $documentId,
        protected readonly mixed $file,
    ) {}

    protected function defaultBody(): array
    {
        return [
            new MultipartValue(
                name: 'file',
                value: $this->file,
            ),
        ];
    }
}
