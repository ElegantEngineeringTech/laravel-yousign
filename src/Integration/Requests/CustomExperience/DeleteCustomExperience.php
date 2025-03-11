<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\CustomExperience;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-custom_experience
 */
class DeleteCustomExperience extends Request
{
    protected Method $method = Method::DELETE;

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
