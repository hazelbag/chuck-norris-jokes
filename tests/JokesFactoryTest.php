<?php

namespace Hazelbag\ChuckNorrisJokes\Tests;

use Hazelbag\ChuckNorrisJokes\JokesFactory;
use PHPUnit\Framework\TestCase;

class JokesFactoryTest extends TestCase
{
    /** @test */
    public function itReturnsARandomJoke()
    {
        $jokes = new JokesFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function itReturnsAPredefinedJoke()
    {
        $chuckJokes = [
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
        ];

        $jokes = new JokesFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckJokes);
    }
}
