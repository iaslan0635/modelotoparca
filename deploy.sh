#!/usr/bin/env bash

cd /home/ploi/site.modelotoparca.com || exit
if [ "$(git pull)" != "Already up to date." ]; then
    git pull origin main
    php artisan cache:clear
    echo "Deployed 🚀"
fi
