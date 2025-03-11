<?php

declare(strict_types=1);

namespace Elegantly\Yousign;

use Elegantly\Yousign\Integration\YousignConnector;

class Yousign
{
    public function __construct(
        public readonly YousignConnector $connector
    ) {
        //
    }

    public function connector(): YousignConnector
    {
        return $this->connector;
    }
}
