<?php

namespace Elegantly\Yousign\Integration\Requests\Document;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-documents-download
 */
class GetSignatureRequestsSignatureRequestIdDocumentsDownload extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/signature_requests/{$this->signatureRequestId}/documents/download";
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  null|string  $version  Specify Documents version to download, "completed" is only available when the Signature Request status is "done".
     * @param  null|bool  $archive  Force zip archive download
     */
    public function __construct(
        protected string $signatureRequestId,
        protected ?string $version = null,
        protected ?bool $archive = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['version' => $this->version, 'archive' => $this->archive]);
    }
}
