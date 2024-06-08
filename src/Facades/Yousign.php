<?php

namespace Elegantly\Yousign\Facades;

use Elegantly\Yousign\Integration\YousignConnector;
use Illuminate\Support\Facades\Facade;

/**
 * @method static YousignConnector connector()
 *
 * @see \Elegantly\Yousign\Yousign
 */
class Yousign extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Elegantly\Yousign\Yousign::class;
    }
}
