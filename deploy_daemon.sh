while true; do
    if [ "$(git pull)" != "Already up to date." ]; then
        composer install --no-interaction --prefer-dist --optimize-autoloader # --no-dev
        yarn install --frozen-lockfile
        echo "" | sudo -S service php8.2-fpm reload

        php artisan optimize:clear
        php artisan view:cache
        php artisan optimize
        php artisan migrate --force
    fi
    sleep 30
done
