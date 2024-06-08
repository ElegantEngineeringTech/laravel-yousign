<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Field\DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId;
use Elegantly\Yousign\Integration\Requests\Field\GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields;
use Elegantly\Yousign\Integration\Requests\Field\PostSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields;
use Elegantly\Yousign\Integration\Requests\Field\UpdateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class Field extends Resource
{
    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $documentId  Document ID
     * @param  array  $types  Filter by Field type.
     */
    public function getSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields(
        string $signatureRequestId,
        string $documentId,
        ?array $types,
    ): Response {
        return $this->connector->send(new GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields($signatureRequestId, $documentId, $types));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $documentId  Document ID
     */
    public function postSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields(
        string $signatureRequestId,
        string $documentId,
    ): Response {
        return $this->connector->send(new PostSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields($signatureRequestId, $documentId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $documentId  Document Id
     * @param  string  $fieldId  Field Id
     */
    public function deleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId(
        string $signatureRequestId,
        string $documentId,
        string $fieldId,
    ): Response {
        return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId($signatureRequestId, $documentId, $fieldId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $documentId  Document Id
     * @param  string  $fieldId  Field Id
     */
    public function updateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId(
        string $signatureRequestId,
        string $documentId,
        string $fieldId,
    ): Response {
        return $this->connector->send(new UpdateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId($signatureRequestId, $documentId, $fieldId));
    }
}
