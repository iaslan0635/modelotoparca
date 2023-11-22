#!/usr/bin/env bash

while true; do
    if [ "$(git pull)" != "Already up to date." ]; then
        ./deploy.sh
    fi
    sleep 30
done
