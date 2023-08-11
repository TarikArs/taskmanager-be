#First step 
 rename env.example to .env
 add mongodb connection to .env
 create app secret key by running php artisan key:generate
 composer install
 php artisan migrate --seed
 php artisan jwt:secret
   