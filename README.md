# Chuck Norris Jokes

Create chuck norris jokes in your next PHP project.

<img src="https://app.travis-ci.com/hazelbag/chuck-norris-jokes.svg?branch=main&amp;status=created" alt="build:created">

## Installation

Require the package using composer:

```bash
composer require hazelbag/chuck-norris-jokes
```

## Usage

```php
use Hazelbag\ChuckNorrisJokes\JokesFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)