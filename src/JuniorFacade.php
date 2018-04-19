<?php

namespace Dinfi2\Junior;

use Illuminate\Support\Facades\Facade;

class JuniorFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'junior';
    }
}