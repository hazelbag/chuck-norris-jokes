<?php

namespace Hazelbag\ChuckNorrisJokes\Console;

use Hazelbag\ChuckNorrisJokes\Facades\ChuckNorris;
use Illuminate\Console\Command;

class ChuckNorrisJoke extends Command
{
    protected $signature = 'chuck-norris';

    protected $description = 'Get a Chuck Norris joke';

    public function handle()
    {
        $this->info(ChuckNorris::getRandomJoke());
    }
}
