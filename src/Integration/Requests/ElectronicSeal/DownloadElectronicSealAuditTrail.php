<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\ElectronicSeal;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * download-electronic_seal-audit_trail
 *
 * Electronic Seal Audit Trail is only available when the Electronic Seal is "done".
 */
class DownloadElectronicSealAuditTrail extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/electronic_seals/{$this->electronicSealId}/audit_trails/download";
    }

    public function __construct(
        protected string $electronicSealId,
    ) {}
}
