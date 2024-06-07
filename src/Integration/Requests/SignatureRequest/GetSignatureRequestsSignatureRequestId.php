<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId
 */
class GetSignatureRequestsSignatureRequestId extends Request
{
	protected Method $method = Method::GET;


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
