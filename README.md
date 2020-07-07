# Code Challenge - Seven Senders

## Install prerequisites

- Git
- Docker
- Docker Compose

```
https://docs.docker.com/get-docker
```

## Start with the project

### Clone the project

```bash
$ git clone https://github.com/leonmex/codesevensen
```

### Make easy your live with 

From the command line run:

```bash
$ make docker-start
$ make composer-up
```

If everything went well :sunglasses:, you can access the project locally by entering:
[Help](http://localhost:8000), 
[Status](http://localhost:8000/status), 
[Products](http://localhost:8000/api/v1/products) 


## DEPENDENCIES:

### LIST OF REQUIRE DEPENDENCIES:

- [slim/slim](https://github.com/slimphp/Slim): Slim is a PHP micro framework that helps you quickly write simple yet powerful web applications and APIs.
- [respect/validation](https://github.com/Respect/Validation): The most awesome validation engine ever created for PHP.
- [palanik/corsslim](https://github.com/palanik/CorsSlim): Cross-origin resource sharing (CORS) middleware for PHP Slim.
- [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv): Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.
- [predis/predis](https://github.com/phpredis/phpredis): A PHP extension for Redis.
- [firebase/php-jwt](https://github.com/firebase/php-jwt): A simple library to encode and decode JSON Web Tokens (JWT) in PHP.

### LIST OF DEVELOPMENT DEPENDENCIES:

- [phpunit/phpunit](https://github.com/sebastianbergmann/phpunit): The PHP Unit Testing framework.
- [phpstan/phpstan](https://github.com/phpstan/phpstan): PHPStan - PHP Static Analysis Tool.


## TESTS:

Access the root of the project and run all tests PHPUnit with `composer test`.

```bash
PHPUnit 7.5.20 by Sebastian Bergmann and contributors.

...                                                                 3 / 3 (100%)

Time: 39 ms, Memory: 6.00 MB

OK (3 tests, 23 assertions)
```

### HELP AND DOCS:

For more information on how to use the REST API, see the following documentation available on [Postman Documenter](https://documenter.getpostman.com/view/1915278/RztfwByr).