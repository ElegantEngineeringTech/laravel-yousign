<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\CustomExperience\DeleteCustomExperience;
use Elegantly\Yousign\Integration\Requests\CustomExperience\DeleteCustomExperienceLogo;
use Elegantly\Yousign\Integration\Requests\CustomExperience\GetCustomExperiences;
use Elegantly\Yousign\Integration\Requests\CustomExperience\GetCustomExperiencesCustomExperienceId;
use Elegantly\Yousign\Integration\Requests\CustomExperience\PatchCustomExperienceLogo;
use Elegantly\Yousign\Integration\Requests\CustomExperience\PatchCustomExperiencesCustomExperienceId;
use Elegantly\Yousign\Integration\Requests\CustomExperience\PostCustomExperience;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class CustomExperience extends Resource
{
    public function getCustomExperiences(): Response
    {
        return $this->connector->send(new GetCustomExperiences());
    }

    public function postCustomExperience(): Response
    {
        return $this->connector->send(new PostCustomExperience());
    }

    /**
     * @param  string  $customExperienceId  Custom Experience Id
     */
    public function getCustomExperiencesCustomExperienceId(string $customExperienceId): Response
    {
        return $this->connector->send(new GetCustomExperiencesCustomExperienceId($customExperienceId));
    }

    /**
     * @param  string  $customExperienceId  Custom Experience Id
     */
    public function deleteCustomExperience(string $customExperienceId): Response
    {
        return $this->connector->send(new DeleteCustomExperience($customExperienceId));
    }

    /**
     * @param  string  $customExperienceId  Custom Experience Id
     */
    public function patchCustomExperiencesCustomExperienceId(string $customExperienceId): Response
    {
        return $this->connector->send(new PatchCustomExperiencesCustomExperienceId($customExperienceId));
    }

    /**
     * @param  string  $customExperienceId  Custom Experience Id
     */
    public function patchCustomExperienceLogo(string $customExperienceId): Response
    {
        return $this->connector->send(new PatchCustomExperienceLogo($customExperienceId));
    }

    /**
     * @param  string  $customExperienceId  Custom Experience Id
     */
    public function deleteCustomExperienceLogo(string $customExperienceId): Response
    {
        return $this->connector->send(new DeleteCustomExperienceLogo($customExperienceId));
    }
}
