<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Signer\DeleteSignatureRequestsSignatureRequestIdSignersSignerId;
use Elegantly\Yousign\Integration\Requests\Signer\GetSignatureRequestsSignatureRequestIdSigners;
use Elegantly\Yousign\Integration\Requests\Signer\GetSignersSignersId;
use Elegantly\Yousign\Integration\Requests\Signer\PatchSignatureRequestsSignatureRequestIdSignersSignerId;
use Elegantly\Yousign\Integration\Requests\Signer\PostSignatureRequestsSignatureRequestIdSigners;
use Elegantly\Yousign\Integration\Requests\Signer\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp;
use Elegantly\Yousign\Integration\Requests\Signer\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder;
use Elegantly\Yousign\Integration\Requests\Signer\PostSignatureRequestsSignatureRequestIdSignersSignerIdSign;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class Signer extends Resource
{
    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function getSignatureRequestsSignatureRequestIdSigners(string $signatureRequestId): Response
    {
        return $this->connector->send(new GetSignatureRequestsSignatureRequestIdSigners($signatureRequestId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function postSignatureRequestsSignatureRequestIdSigners(string $signatureRequestId): Response
    {
        return $this->connector->send(new PostSignatureRequestsSignatureRequestIdSigners($signatureRequestId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function getSignersSignersId(string $signatureRequestId, string $signerId): Response
    {
        return $this->connector->send(new GetSignersSignersId($signatureRequestId, $signerId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function deleteSignatureRequestsSignatureRequestIdSignersSignerId(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdSignersSignerId($signatureRequestId, $signerId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function patchSignatureRequestsSignatureRequestIdSignersSignerId(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new PatchSignatureRequestsSignatureRequestIdSignersSignerId($signatureRequestId, $signerId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new PostSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp($signatureRequestId, $signerId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder($signatureRequestId, $signerId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  string  $signerId  Signer Id
     */
    public function postSignatureRequestsSignatureRequestIdSignersSignerIdSign(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new PostSignatureRequestsSignatureRequestIdSignersSignerIdSign($signatureRequestId, $signerId));
    }
}
