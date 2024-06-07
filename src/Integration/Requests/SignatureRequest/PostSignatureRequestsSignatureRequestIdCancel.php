<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-cancel
 */
class PostSignatureRequestsSignatureRequestIdCancel extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/cancel";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function __construct(
		protected string $signatureRequestId,
	) {
	}
}
