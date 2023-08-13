## Prerequisites
- PHP 8.0 or higher
- Composer
- MongoDB
## Installation
1- clone the project to your local machine
2- run the command `composer install` to install all the dependencies
3- rename the file `.env.example` to `.env`
4- add your database credentials to the `.env` file by adding the URI of mongodb to the `DB_URI` variable
5- run the command `php artisan key:generate` to generate the app key
6- run the command `php artisan jwt:secret` to generate the jwt secret key
7- run the command `php artisan migrate --seed` to migrate the database and seed it with the default data
8- run the command `php artisan serve` to start the server