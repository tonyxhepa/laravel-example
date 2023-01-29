<?php

namespace Laraveller\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laraveller\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Laraveller\LaravelExample\LaravelExample::class;
    }
}
