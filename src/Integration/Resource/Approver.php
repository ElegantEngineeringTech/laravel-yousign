<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Approver\DeleteSignatureRequestsSignatureRequestIdApproversApproverId;
use Elegantly\Yousign\Integration\Requests\Approver\GetSignatureRequestsSignatureRequestIdApproversApproverId;
use Elegantly\Yousign\Integration\Requests\Approver\PatchSignatureRequestsSignatureRequestIdApproversApproverId;
use Elegantly\Yousign\Integration\Requests\Approver\PostSignatureRequestsSignatureRequestIdApprovers;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Contracts\Response;

class Approver extends Resource
{
	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdApprovers(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdApprovers($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $approverId Approver Id
	 */
	public function getSignatureRequestsSignatureRequestIdApproversApproverId(
		string $signatureRequestId,
		string $approverId,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdApproversApproverId($signatureRequestId, $approverId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $approverId Approver Id
	 */
	public function deleteSignatureRequestsSignatureRequestIdApproversApproverId(
		string $signatureRequestId,
		string $approverId,
	): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdApproversApproverId($signatureRequestId, $approverId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $approverId Approver Id
	 */
	public function patchSignatureRequestsSignatureRequestIdApproversApproverId(
		string $signatureRequestId,
		string $approverId,
	): Response
	{
		return $this->connector->send(new PatchSignatureRequestsSignatureRequestIdApproversApproverId($signatureRequestId, $approverId));
	}
}
