<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Document\DeleteSignatureDocument;
use Elegantly\Yousign\Integration\Requests\Document\DownloadSignatureDocument;
use Elegantly\Yousign\Integration\Requests\Document\DownloadSignatureDocuments;
use Elegantly\Yousign\Integration\Requests\Document\GetSignatureDocument;
use Elegantly\Yousign\Integration\Requests\Document\GetSignatureDocuments;
use Elegantly\Yousign\Integration\Requests\Document\ReplaceSignatureDocument;
use Elegantly\Yousign\Integration\Requests\Document\UpdateSignatureDocument;
use Elegantly\Yousign\Integration\Requests\Document\UploadSignatureDocument;
use Elegantly\Yousign\Integration\Resource as BaseResource;
use Psr\Http\Message\StreamInterface;
use Saloon\Http\Response;

class Document extends BaseResource
{
    public function get(
        string $signatureRequestId,
        ?string $nature,
    ): Response {
        return $this->connector->send(new GetSignatureDocuments($signatureRequestId, $nature));
    }

    /**
     * @param  ?string  $version  Specify Documents version to download, "completed" is only available when the Signature Request status is "done".
     * @param  ?bool  $archive  Force zip archive download
     */
    public function downloadAll(
        string $signatureRequestId,
        ?string $version,
        ?bool $archive,
    ): Response {
        return $this->connector->send(new DownloadSignatureDocuments($signatureRequestId, $version, $archive));
    }

    public function find(
        string $signatureRequestId,
        string $documentId,
    ): Response {
        return $this->connector->send(new GetSignatureDocument($signatureRequestId, $documentId));
    }

    /**
     * @param  StreamInterface|resource|string|int  $file
     */
    public function upload(
        string $signatureRequestId,
        mixed $file,
        string $nature,
        ?string $insert_after_id = null,
        ?string $password = null,
        ?array $initials = null,
        ?bool $parse_anchors = false,
    ): Response {
        return $this->connector->send(new UploadSignatureDocument(
            $signatureRequestId,
            $file,
            $nature,
            $insert_after_id,
            $password,
            $initials,
            $parse_anchors
        ));
    }

    public function delete(
        string $signatureRequestId,
        string $documentId,
    ): Response {
        return $this->connector->send(new DeleteSignatureDocument($signatureRequestId, $documentId));
    }

    public function update(
        string $signatureRequestId,
        string $documentId,
        ?string $nature = null,
        ?string $insert_after_id = null,
        ?string $password = null,
        ?array $initials = null,
    ): Response {
        return $this->connector->send(new UpdateSignatureDocument(
            $signatureRequestId,
            $documentId,
            $nature,
            $insert_after_id,
            $password,
            $initials
        ));
    }

    public function download(
        string $signatureRequestId,
        string $documentId,
    ): Response {
        return $this->connector->send(new DownloadSignatureDocument($signatureRequestId, $documentId));
    }

    /**
     * @param  StreamInterface|resource|string|int  $file
     */
    public function replace(
        string $signatureRequestId,
        string $documentId,
        mixed $file,
    ): Response {
        return $this->connector->send(new ReplaceSignatureDocument($signatureRequestId, $documentId, $file));
    }
}
