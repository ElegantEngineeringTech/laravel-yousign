<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Requests\CustomExperience;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-custom-experience-logo
 */
class PatchCustomExperienceLogo extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

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
