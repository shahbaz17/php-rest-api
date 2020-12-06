# PHP Rest API

This is a simple PHP REST API.

## Installation

### Prerequisites

 * PHP 5.6.0 and later.
 * MySQL

### Composer

You can install the bindings via [Composer](http://getcomposer.org/). 

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once('vendor/autoload.php');
```
### DATABASE
Import the php-rest-api.sql file, copy `.env.example` into `.env` and update the configuration as per your configuration.

## Development

Get [Composer][composer]. For example, on Mac OS:

```bash
brew install composer
```

Install dependencies:

```bash
composer install
```

Run Server:
```bash
php -S localhost:8000 -t api
```

## API
| API               | CRUD          | Description  |
| :-------------     |:-------------:| ------------:|
| GET /post         | **READ**      | Get the Posts from `posts` table |
| GET /post{id}     | **READ**      | Get a single Post from `posts` table |
| POST /post        | **CREATE**    | Create a Post and insert into `posts` table |
| PUT  /post/{id}   | **UPDATE**    | Update the Post in `posts` table |
| DELETE /post/{id} | **DELETE**    | Delete a Post from `posts` table |

Test the API endpoints using [Postman](https://www.postman.com/).

## License
See [License](./LICENSE.txt)
