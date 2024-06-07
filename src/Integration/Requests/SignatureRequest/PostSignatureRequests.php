<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests
 */
class PostSignatureRequests extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/signature_requests";
	}


	public function __construct()
	{
	}
}
