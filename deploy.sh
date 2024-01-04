#!/usr/bin/env bash

git pull

# no need to run composer install in every deployment
# composer install --no-interaction --prefer-dist --optimize-autoloader # --no-dev

yarn install --frozen-lockfile

php artisan optimize:clear
php artisan view:cache
php artisan optimize
php artisan migrate --force

nohup bash -c "echo '' | sudo -S service php8.2-fpm reload"
