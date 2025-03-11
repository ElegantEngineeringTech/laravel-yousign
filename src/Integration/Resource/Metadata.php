<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Metadata\DeleteSignatureRequestsSignatureRequestIdMetadata;
use Elegantly\Yousign\Integration\Requests\Metadata\GetSignatureRequestsSignatureRequestIdMetadata;
use Elegantly\Yousign\Integration\Requests\Metadata\PostSignatureRequestsSignatureRequestIdMetadata;
use Elegantly\Yousign\Integration\Requests\Metadata\PutSignatureRequestsSignatureRequestIdMetadata;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class Metadata extends Resource
{
    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function getSignatureRequestsSignatureRequestIdMetadata(string $signatureRequestId): Response
    {
        return $this->connector->send(new GetSignatureRequestsSignatureRequestIdMetadata($signatureRequestId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function putSignatureRequestsSignatureRequestIdMetadata(string $signatureRequestId): Response
    {
        return $this->connector->send(new PutSignatureRequestsSignatureRequestIdMetadata($signatureRequestId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function postSignatureRequestsSignatureRequestIdMetadata(string $signatureRequestId): Response
    {
        return $this->connector->send(new PostSignatureRequestsSignatureRequestIdMetadata($signatureRequestId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function deleteSignatureRequestsSignatureRequestIdMetadata(string $signatureRequestId): Response
    {
        return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdMetadata($signatureRequestId));
    }
}
