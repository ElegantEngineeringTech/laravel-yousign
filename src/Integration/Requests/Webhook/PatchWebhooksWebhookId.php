<?php

namespace Elegantly\Yousign\Integration\Requests\Webhook;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-webhooks-webhookId
 */
class PatchWebhooksWebhookId extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/webhooks/{$this->webhookId}";
	}


	/**
	 * @param string $webhookId Webhook Id
	 */
	public function __construct(
		protected string $webhookId,
	) {
	}
}
