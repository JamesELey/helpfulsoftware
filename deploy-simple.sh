#!/bin/bash
# Super Simple Deploy - Just run this after git pull
git pull origin main && composer install --no-dev --optimize-autoloader && composer run-script deploy:quick
