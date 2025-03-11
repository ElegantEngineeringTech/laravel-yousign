<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\ElectronicSeal;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * download-electronic-seal-document
 */
class DownloadElectronicSealDocument extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/electronic_seal_documents/{$this->electronicSealDocumentId}/download";
    }

    public function __construct(
        protected string $electronicSealDocumentId,
    ) {}
}
