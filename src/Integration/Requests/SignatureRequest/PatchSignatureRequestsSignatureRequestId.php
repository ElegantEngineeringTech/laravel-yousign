<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-signature_requests-signatureRequestId
 */
class PatchSignatureRequestsSignatureRequestId extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function __construct(
		protected string $signatureRequestId,
	) {
	}
}
