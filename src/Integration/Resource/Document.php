<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Document\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentId;
use Elegantly\Yousign\Integration\Requests\Document\GetSignatureRequestsSignatureRequestIdDocuments;
use Elegantly\Yousign\Integration\Requests\Document\GetSignatureRequestsSignatureRequestIdDocumentsDocumentId;
use Elegantly\Yousign\Integration\Requests\Document\GetSignatureRequestsSignatureRequestIdDocumentsDocumentsIdDownload;
use Elegantly\Yousign\Integration\Requests\Document\GetSignatureRequestsSignatureRequestIdDocumentsDownload;
use Elegantly\Yousign\Integration\Requests\Document\PatchSignatureRequestsSignatureRequestIdDocumentsDocumentId;
use Elegantly\Yousign\Integration\Requests\Document\PostDocuments;
use Elegantly\Yousign\Integration\Requests\Document\PostSignatureRequestsSignatureRequestIdDocuments;
use Elegantly\Yousign\Integration\Requests\Document\PostSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Contracts\Response;

class Document extends Resource
{
	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $nature Filter by nature
	 */
	public function getSignatureRequestsSignatureRequestIdDocuments(
		string $signatureRequestId,
		?string $nature,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdDocuments($signatureRequestId, $nature));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdDocuments(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdDocuments($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $version Specify Documents version to download, "completed" is only available when the Signature Request status is "done".
	 * @param bool $archive Force zip archive download
	 */
	public function getSignatureRequestsSignatureRequestIdDocumentsDownload(
		string $signatureRequestId,
		?string $version,
		?bool $archive,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdDocumentsDownload($signatureRequestId, $version, $archive));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentId Document Id
	 */
	public function getSignatureRequestsSignatureRequestIdDocumentsDocumentId(
		string $signatureRequestId,
		string $documentId,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdDocumentsDocumentId($signatureRequestId, $documentId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentId Document Id
	 */
	public function deleteSignatureRequestsSignatureRequestIdDocumentsDocumentId(
		string $signatureRequestId,
		string $documentId,
	): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentId($signatureRequestId, $documentId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentId Document Id
	 */
	public function patchSignatureRequestsSignatureRequestIdDocumentsDocumentId(
		string $signatureRequestId,
		string $documentId,
	): Response
	{
		return $this->connector->send(new PatchSignatureRequestsSignatureRequestIdDocumentsDocumentId($signatureRequestId, $documentId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentId Document Id
	 */
	public function getSignatureRequestsSignatureRequestIdDocumentsDocumentsIdDownload(
		string $signatureRequestId,
		string $documentId,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdDocumentsDocumentsIdDownload($signatureRequestId, $documentId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentId Document Id
	 */
	public function postSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace(
		string $signatureRequestId,
		string $documentId,
	): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace($signatureRequestId, $documentId));
	}


	public function postDocuments(): Response
	{
		return $this->connector->send(new PostDocuments());
	}
}
