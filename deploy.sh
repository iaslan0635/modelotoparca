#!/usr/bin/env bash
cd /home/ploi/site.modelotoparca.com || exit
git pull origin main
php artisan cache:clear
