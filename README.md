
Istruzioni 

git clone https://github.com/nicolocarnemolla/app.git

composer install
cp .env.example .env
settare username e password del proprio database

php artisan key:generate

php artisan migrate

php artisa serve
