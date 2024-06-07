<?php

namespace Elegantly\Yousign\Integration\Requests\Follower;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-followers
 */
class GetSignatureRequestsSignatureRequestIdFollowers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/followers";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function __construct(
		protected string $signatureRequestId,
	) {
	}
}
