git:https://git-scm.com/ <br>
php:https://www.php.net/<br>
composer:https://getcomposer.org/<br>
<hr/>

git clone https://github.com/MVBys/online-store.git<br>

cd online-store<br>

php composer update<br>

.env.example delete .example<br>
.env  add your config database<br>
    DB_CONNECTION=mysql<br>
    DB_HOST=127.0.0.1<br>
    DB_PORT=3306<br>
    DB_DATABASE=laravel<br>
    DB_USERNAME=root<br>
    DB_PASSWORD=<br>
    
php artisan migrate<br>
php artisan db:seed<br>
php artisan serve<br>





