<?php

namespace Elegantly\Yousign\Integration\Resource;

use Elegantly\Yousign\Integration\Requests\Workspace\GetWorkspaces;
use Elegantly\Yousign\Integration\Resource;
use Saloon\Http\Response;

class Workspace extends Resource
{
    /**
     * @param  int  $limit  The limit of items count to retrieve.
     */
    public function getWorkspaces(?int $limit): Response
    {
        return $this->connector->send(new GetWorkspaces($limit));
    }
}
