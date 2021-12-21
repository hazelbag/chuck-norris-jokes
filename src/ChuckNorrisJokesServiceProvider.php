<?php

namespace Hazelbag\ChuckNorrisJokes;

use Hazelbag\ChuckNorrisJokes\Console\ChuckNorrisJoke;
use Hazelbag\ChuckNorrisJokes\Http\Controllers\ChuckNorrisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ChuckNorrisJokesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChuckNorrisJoke::class,
            ]);
        }

        Route::get('chuck-norris', ChuckNorrisController::class);
    }

    public function register()
    {
        $this->app->bind('chuck-norris', function () {
            return new JokesFactory();
        });
    }
}
