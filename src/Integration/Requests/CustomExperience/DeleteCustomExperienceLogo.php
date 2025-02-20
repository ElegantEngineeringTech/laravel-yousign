<?php

namespace Elegantly\Yousign\Integration\Requests\CustomExperience;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-custom_experience-logo
 */
class DeleteCustomExperienceLogo extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/custom_experiences/{$this->customExperienceId}/logo";
    }

    /**
     * @param  string  $customExperienceId  Custom Experience Id
     */
    public function __construct(
        protected string $customExperienceId,
    ) {}
}
