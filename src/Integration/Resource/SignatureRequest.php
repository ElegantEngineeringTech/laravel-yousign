<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\SignatureRequest\DeleteSignatureRequestsSignatureRequestId;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\GetSignatureRequests;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\GetSignatureRequestsSignatureRequestId;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\PatchSignatureRequestsSignatureRequestId;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\PostSignatureRequests;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\PostSignatureRequestsSignatureRequestIdCancel;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\PostSignatureRequestsSignatureRequestIdReactivate;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\PostSignatureRequestsSignatureRequestIdSignatures;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Contracts\Response;

class SignatureRequest extends Resource
{
	/**
	 * @param string $status Filter by status
	 * @param int $limit The limit of items count to retrieve.
	 * @param string $externalId Filter by external_id
	 * @param array $source Filter by source
	 * @param string $q Search on name
	 */
	public function getSignatureRequests(
		?string $status,
		?int $limit,
		?string $externalId,
		?array $source,
		?string $q,
	): Response
	{
		return $this->connector->send(new GetSignatureRequests($status, $limit, $externalId, $source, $q));
	}


	public function postSignatureRequests(): Response
	{
		return $this->connector->send(new PostSignatureRequests());
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function getSignatureRequestsSignatureRequestId(string $signatureRequestId): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestId($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param bool $permanentDelete If true it will permanently delete the Signature Request. It will no longer be retrievable.
	 */
	public function deleteSignatureRequestsSignatureRequestId(
		string $signatureRequestId,
		?bool $permanentDelete,
	): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestId($signatureRequestId, $permanentDelete));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function patchSignatureRequestsSignatureRequestId(string $signatureRequestId): Response
	{
		return $this->connector->send(new PatchSignatureRequestsSignatureRequestId($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdSignatures(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdSignatures($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdCancel(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdCancel($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdReactivate(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdReactivate($signatureRequestId));
	}
}
