#### JSON API

Установка показана в рабочем окружении OS Linux:

```
git clone https://github.com/Vkolya/bsa2018-php-12-json-api.git
cd project-dir
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

#### Запуск тестов

```
./vendor/bin/phpunit --filter Feature
```