<?php

namespace Elegantly\Yousign\Integration\Resource;

use Carbon\Carbon;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\ActivateSignatureRequest;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\CancelSignatureRequest;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\CreateSignatureRequest;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\DeleteSignatureRequest;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\GetSignatureRequest;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\GetSignatureRequests;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\ReactivateSignatureRequest;
use Elegantly\Yousign\Integration\Requests\SignatureRequest\UpdateSignatureRequest;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class SignatureRequest extends Resource
{
    /**
     * @param  string  $status  Filter by status
     * @param  int  $limit  The limit of items count to retrieve.
     * @param  string  $externalId  Filter by external_id
     * @param  array  $source  Filter by source
     * @param  string  $q  Search on name
     */
    public function getSignatureRequests(
        ?string $status,
        ?int $limit,
        ?string $externalId,
        ?array $source,
        ?string $q,
    ): Response {
        return $this->connector->send(new GetSignatureRequests($status, $limit, $externalId, $source, $q));
    }

    public function createSignatureRequest(
        string $name,
        string $delivery_mode = 'none',
        ?bool $ordered_signers = null,
        ?array $reminder_settings = null,
        ?string $timezone = null,
        ?Carbon $expiration_date = null,
        ?string $template_id = null,
        ?string $external_id = null,
        ?string $custom_experience_id = null,
        ?string $workspace_id = null,
        ?string $audit_trail_locale = null,
        ?string $signers_allowed_to_decline = null,
        ?array $email_notification = null,
        ?array $template_placeholders = null,
    ): Response {
        return $this->connector->send(new CreateSignatureRequest(
            $name,
            $delivery_mode,
            $ordered_signers,
            $reminder_settings,
            $timezone,
            $expiration_date,
            $template_id,
            $external_id,
            $custom_experience_id,
            $workspace_id,
            $audit_trail_locale,
            $signers_allowed_to_decline,
            $email_notification,
            $template_placeholders,
        ));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     */
    public function getSignatureRequest(
        string $signatureRequestId,

    ): Response {
        return $this->connector->send(new GetSignatureRequest($signatureRequestId));
    }

    /**
     * @param  string  $signatureRequestId  Signature Request Id
     * @param  bool  $permanentDelete  If true it will permanently delete the Signature Request. It will no longer be retrievable.
     */
    public function deleteSignatureRequest(
        string $signatureRequestId,
        ?bool $permanentDelete,
    ): Response {
        return $this->connector->send(new DeleteSignatureRequest($signatureRequestId, $permanentDelete));
    }

    public function updateSignatureRequest(
        string $signatureRequestId,
        ?string $name = null,
        ?string $delivery_mode = null,
        ?bool $ordered_signers = null,
        ?array $reminder_settings = null,
        ?string $timezone = null,
        ?Carbon $expiration_date = null,
        ?string $template_id = null,
        ?string $external_id = null,
        ?string $custom_experience_id = null,
        ?string $workspace_id = null,
        ?string $audit_trail_locale = null,
        ?string $signers_allowed_to_decline = null,
        ?array $email_notification = null,
        ?array $template_placeholders = null
    ): Response {
        return $this->connector->send(new UpdateSignatureRequest(
            $signatureRequestId,
            $name,
            $delivery_mode,
            $ordered_signers,
            $reminder_settings,
            $timezone,
            $expiration_date,
            $template_id,
            $external_id,
            $custom_experience_id,
            $workspace_id,
            $audit_trail_locale,
            $signers_allowed_to_decline,
            $email_notification,
            $template_placeholders,
        ));
    }

    public function activateSignatureRequest(string $signatureRequestId): Response
    {
        return $this->connector->send(new ActivateSignatureRequest($signatureRequestId));
    }

    public function cancelSignatureRequest(
        string $signatureRequestId,
        string $reason,
        ?string $custom_note = null
    ): Response {
        return $this->connector->send(new CancelSignatureRequest($signatureRequestId, $reason, $custom_note));
    }

    public function reactivateSignatureRequest(
        string $signatureRequestId,
        Carbon $expiration_date,
    ): Response {
        return $this->connector->send(new ReactivateSignatureRequest($signatureRequestId, $expiration_date));
    }
}
