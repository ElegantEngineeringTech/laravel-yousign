<?php

declare(strict_types=1);

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Template\GetTemplates;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class Template extends Resource
{
    public function getTemplates(): Response
    {
        return $this->connector->send(new GetTemplates);
    }
}
