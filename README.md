git:https://git-scm.com/ <br>
php:https://www.php.net/<br>
composer:https://getcomposer.org/<br>
<hr/>

git clone https://github.com/MVBys/online-store.git<br>

cd online-store<br>

php composer update<br>

.env.example delete .example<br>

In .env  add your config database<br>
   
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    
php artisan migrate<br>
php artisan db:seed<br>
php artisan serve<br>





