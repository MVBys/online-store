git:https://git-scm.com/
php:https://www.php.net/
composer:https://getcomposer.org/


git clone https://github.com/MVBys/online-store.git

cd online-store

php composer update

.env.example delete .example
.env  add your config database
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    
php artisan migrate
php artisan db:seed
php artisan serve





