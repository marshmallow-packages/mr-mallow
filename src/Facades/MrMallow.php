<?php

namespace Marshmallow\MrMallow\Facades;

class MrMallow extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return \Marshmallow\MrMallow\MrMallow::class;
    }
}
