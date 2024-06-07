<?php

namespace Elegantly\Yousign\Integration\Requests\Field;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-documents-documentId-fields
 */
class GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}/fields";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentId Document ID
	 * @param null|array $types Filter by Field type.
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected string $documentId,
		protected ?array $types = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['types[]' => $this->types]);
	}
}
