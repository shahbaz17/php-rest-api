# Build a Simple REST API in PHP

This example shows how to build a simple REST API in core PHP.

Please read https://dev.to/shahbaz17/build-a-simple-rest-api-in-php-2edl to learn more about REST API.

### Prerequisites

- [PHP](https://www.php.net/downloads.php)
- [MySQL](https://www.mysql.com/downloads/)
- [Composer](http://getcomposer.org/)
- [Postman](https://www.postman.com/downloads/)

## Getting Started

Clone this project with the following commands:

```bash
git clone https://github.com/shahbaz17/php-rest-api.git
cd php-rest-api
```

### Configure the application

Create the database and user for the project.

```php
mysql -u root -p
CREATE DATABASE blog CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'rest_api_user'@'localhost' identified by 'rest_api_password';
GRANT ALL on blog.* to 'rest_api_user'@'localhost';
quit
```

Create the `post` table.

```php
mysql -u rest_api_user -p;
// Enter your password
use blog;

CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255),
  `author_picture` varchar(255),
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);
```

Copy `.env.example` to `.env` file and enter your database deatils.

```bash
cp .env.example .env
```

## Development

Install the project dependencies and start the PHP server:

```bash
composer install
```

```bash
php -S localhost:8000 -t api
```

## Your APIs

| API               |    CRUD    |                                Description |
| :---------------- | :--------: | -----------------------------------------: |
| GET /posts        |  **READ**  |        Get all the Posts from `post` table |
| GET /post/{id}    |  **READ**  |        Get a single Post from `post` table |
| POST /post        | **CREATE** | Create a Post and insert into `post` table |
| PUT /post/{id}    | **UPDATE** |            Update the Post in `post` table |
| DELETE /post/{id} | **DELETE** |            Delete a Post from `post` table |

Test the API endpoints using [Postman](https://www.postman.com/).

## License

See [License](./LICENSE)
