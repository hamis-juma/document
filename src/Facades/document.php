<?php

namespace hamis\document\Facades;

use Illuminate\Support\Facades\Facade;

class document extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'document';
    }
}
