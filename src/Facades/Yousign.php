<?php

namespace Elegantly\Yousign\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elegantly\Yousign\Yousign
 */
class Yousign extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Elegantly\Yousign\Yousign::class;
    }
}
