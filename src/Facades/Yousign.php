<?php

namespace Elegantly\Yousign\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static YousignConnector client()
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
