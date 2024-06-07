<?php

namespace Elegantly\Yousign\Integration\Requests\CustomExperience;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-custom_experiences-customExperienceId
 */
class PatchCustomExperiencesCustomExperienceId extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/custom_experiences/{$this->customExperienceId}";
	}


	/**
	 * @param string $customExperienceId Custom Experience Id
	 */
	public function __construct(
		protected string $customExperienceId,
	) {
	}
}
