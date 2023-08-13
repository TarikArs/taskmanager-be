## Prerequisites
- PHP 8.0 or higher
- Composer
- MongoDB
## Installation
1. Clone the project to your local machine.
2. Open a terminal and navigate to the project directory.
3. Run the command `composer install` to install all the dependencies.
4. Rename the file `.env.example` to `.env`.
5. Edit the `.env` file and add your database credentials by setting the `DB_URI` variable to the MongoDB URI.
6. Run the command `php artisan key:generate` to generate the application key.
7. Run the command `php artisan jwt:secret` to generate the JWT secret key.
8. Run the command `php artisan migrate --seed` to migrate the database and seed it with default data.
9. Finally, run the command `php artisan serve` to start the server.

## Demo account
- Email: `demo@groove.cm`
- Password: `password`