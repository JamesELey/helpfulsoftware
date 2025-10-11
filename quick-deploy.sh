#!/bin/bash

# Quick Deploy Script - Run this after git pull
# Usage: ./quick-deploy.sh

echo "⚡ Quick Deploy - HelpfulSoftware Portfolio"

# Install dependencies
composer install --no-dev --optimize-autoloader

# Clear caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear

# Run migrations and seed
php artisan migrate --force
php artisan db:seed --class=RealProjectSeeder --force

# Cache for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Quick deploy completed!"
