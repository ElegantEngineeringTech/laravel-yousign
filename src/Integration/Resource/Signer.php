<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Signer\CreateSignatureSigner;
use Elegantly\Yousign\Integration\Requests\Signer\DeleteSignatureSigner;
use Elegantly\Yousign\Integration\Requests\Signer\GetSignatureSigner;
use Elegantly\Yousign\Integration\Requests\Signer\GetSignatureSigners;
use Elegantly\Yousign\Integration\Requests\Signer\SendOneTimePasswordSignatureSigner;
use Elegantly\Yousign\Integration\Requests\Signer\SendReminderSignatureSigner;
use Elegantly\Yousign\Integration\Requests\Signer\SignOnBehalfOfSignatureSigner;
use Elegantly\Yousign\Integration\Requests\Signer\UpdateSignatureSigner;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class Signer extends Resource
{
    public function get(string $signatureRequestId): Response
    {
        return $this->connector->send(new GetSignatureSigners($signatureRequestId));
    }

    public function create(
        string $signatureRequestId,
        ?array $info = null,
        ?string $user_id = null,
        ?string $contact_id = null,
        ?string $signature_level = null,
        ?array $fields = null,
        ?string $insert_after_id = null,
        ?string $signature_authentication_mode = null,
        ?array $redirect_urls = null,
        ?array $custom_text = null,
        ?string $delivery_mode = null,
        ?string $identification_attestation_id = null,
    ): Response {
        return $this->connector->send(new CreateSignatureSigner(
            $signatureRequestId,
            $info,
            $user_id,
            $contact_id,
            $signature_level,
            $fields,
            $insert_after_id,
            $signature_authentication_mode,
            $redirect_urls,
            $custom_text,
            $delivery_mode,
            $identification_attestation_id,
        ));
    }

    public function find(string $signatureRequestId, string $signerId): Response
    {
        return $this->connector->send(new GetSignatureSigner($signatureRequestId, $signerId));
    }

    public function delete(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new DeleteSignatureSigner($signatureRequestId, $signerId));
    }

    public function update(
        string $signatureRequestId,
        string $signerId,
        ?array $info = null,
        ?string $signature_level = null,
        ?string $insert_after_id = null,
        ?string $signature_authentication_mode = null,
        ?array $redirect_urls = null,
        ?array $custom_text = null,
        ?string $delivery_mode = null,
        ?string $identification_attestation_id = null,
    ): Response {
        return $this->connector->send(new UpdateSignatureSigner(
            $signatureRequestId,
            $signerId,
            $info,
            $signature_level,
            $insert_after_id,
            $signature_authentication_mode,
            $redirect_urls,
            $custom_text,
            $delivery_mode,
            $identification_attestation_id,
        ));
    }

    public function sendOneTimePassword(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new SendOneTimePasswordSignatureSigner($signatureRequestId, $signerId));
    }

    public function sendReminder(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new SendReminderSignatureSigner($signatureRequestId, $signerId));
    }

    public function signOnBehalfOf(
        string $signatureRequestId,
        string $signerId,
    ): Response {
        return $this->connector->send(new SignOnBehalfOfSignatureSigner($signatureRequestId, $signerId));
    }
}
