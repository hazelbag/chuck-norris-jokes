<?php

namespace Hazelbag\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Hazelbag\ChuckNorrisJokes\JokesFactory;
use PHPUnit\Framework\TestCase;

class JokesFactoryTest extends TestCase
{
    /** @test */
    public function itReturnsARandomJoke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 317, "joke": "Chuck Norris was once in a knife fight, and the knife lost.", "categories": [] } }'),
        ]);

        $handlerStack = HandlerStack::create($mock);

        $client = new Client(['handler' => $handlerStack]);

        $jokes = new JokesFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('Chuck Norris was once in a knife fight, and the knife lost.', $joke);
    }
}
