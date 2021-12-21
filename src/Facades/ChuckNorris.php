<?php

namespace Hazelbag\ChuckNorrisJokes\Facades;

use Illuminate\Support\Facades\Facade;

class ChuckNorris extends Facade
{
    protected static function getFacadeAccessorr()
    {
        return 'chuck-norris';
    }
}
