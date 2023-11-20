#!/usr/bin/env bash

composer install --no-interaction --prefer-dist --optimize-autoloader # --no-dev
yarn install --frozen-lockfile
echo "" | sudo -S service php8.2-fpm reload

php artisan optimize:clear
php artisan view:cache
php artisan optimize
php artisan migrate --force
