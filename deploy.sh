#!/usr/bin/env bash

cd /home/ploi/site.modelotoparca.com || exit
if [ "$(git pull | tee /dev/stderr)" != "Already up to date." ]; then
    php artisan cache:clear
    echo "Deployed 🚀"
fi
