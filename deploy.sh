#!/usr/bin/env bash

git pull
composer install --no-interaction --prefer-dist --optimize-autoloader # --no-dev
yarn install --frozen-lockfile

php artisan optimize:clear
php artisan view:cache
php artisan optimize
php artisan migrate --force

nohup bash -c "echo '' | sudo -S service php8.2-fpm reload"
