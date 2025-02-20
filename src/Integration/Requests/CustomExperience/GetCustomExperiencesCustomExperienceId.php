<?php

namespace Elegantly\Yousign\Integration\Requests\CustomExperience;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-custom_experiences-customExperienceId
 */
class GetCustomExperiencesCustomExperienceId extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/custom_experiences/{$this->customExperienceId}";
    }

    /**
     * @param  string  $customExperienceId  Custom Experience Id
     */
    public function __construct(
        protected string $customExperienceId,
    ) {}
}
