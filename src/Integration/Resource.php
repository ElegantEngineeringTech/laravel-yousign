<?php

namespace Elegantly\Yousign\Integration;

use Saloon\Http\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
    ) {}
}
