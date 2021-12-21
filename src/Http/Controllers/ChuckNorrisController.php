<?php

namespace Hazelbag\ChuckNorrisJokes\Http\Controllers;

use Hazelbag\ChuckNorrisJokes\Facades\ChuckNorris;

class ChuckNorrisController
{
    public function __invoke()
    {
        return ChuckNorris::getRandomJoke();
    }
}