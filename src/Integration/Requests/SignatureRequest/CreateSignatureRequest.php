<?php

namespace Elegantly\Yousign\Integration\Requests\SignatureRequest;

use Carbon\Carbon;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests
 */
class CreateSignatureRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/signature_requests';
    }

    public function __construct(
        protected readonly string $name,
        protected readonly string $delivery_mode = 'none',
        protected readonly ?bool $ordered_signers = null,
        protected readonly ?array $reminder_settings = null,
        protected readonly ?string $timezone = null,
        protected readonly ?Carbon $expiration_date = null,
        protected readonly ?string $template_id = null,
        protected readonly ?string $external_id = null,
        protected readonly ?string $custom_experience_id = null,
        protected readonly ?string $workspace_id = null,
        protected readonly ?string $audit_trail_locale = null,
        protected readonly ?string $signers_allowed_to_decline = null,
        protected readonly ?array $email_notification = null,
        protected readonly ?array $template_placeholders = null,
    ) {}

    public function defaultBody(): array
    {
        return array_filter([
            'name' => $this->name,
            'delivery_mode' => $this->delivery_mode,
            'ordered_signers' => $this->ordered_signers,
            'reminder_settings' => $this->reminder_settings,
            'timezone' => $this->timezone,
            'expiration_date' => $this->expiration_date?->format('Y-m-d'),
            'template_id' => $this->template_id,
            'external_id' => $this->external_id,
            'custom_experience_id' => $this->custom_experience_id,
            'workspace_id' => $this->workspace_id,
            'audit_trail_locale' => $this->audit_trail_locale,
            'signers_allowed_to_decline' => $this->signers_allowed_to_decline,
            'email_notification' => $this->email_notification,
            'template_placeholders' => $this->template_placeholders,
        ], fn ($param) => $param !== null);
    }
}
