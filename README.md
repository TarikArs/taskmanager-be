## Prerequisites
- PHP 8.0 or higher
- Composer
- MongoDB
## Installation
- clone the project to your local machine
- run the command `composer install` to install all the dependencies
- rename the file `.env.example` to `.env`
- add your database credentials to the `.env` file by adding the URI of mongodb to the `DB_URI` variable
- run the command `php artisan key:generate` to generate the app key
- run the command `php artisan jwt:secret` to generate the jwt secret key
- run the command `php artisan migrate --seed` to migrate the database and seed it with the default data
- run the command `php artisan serve` to start the server