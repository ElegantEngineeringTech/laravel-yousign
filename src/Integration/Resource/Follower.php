<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Follower\GetSignatureRequestsSignatureRequestIdFollowers;
use Elegantly\Yousign\Integration\Requests\Follower\PostSignatureRequestsSignatureRequestIdFollowers;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Contracts\Response;

class Follower extends Resource
{
	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function getSignatureRequestsSignatureRequestIdFollowers(string $signatureRequestId): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdFollowers($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdFollowers(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdFollowers($signatureRequestId));
	}
}
