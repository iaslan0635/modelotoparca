#!/usr/bin/env bash

if [ "$(git pull)" != "Already up to date." ]; then
    cd /home/ploi/site.modelotoparca.com || exit
    git pull origin main
    php artisan cache:clear
    echo "Deployed 🚀"
fi
