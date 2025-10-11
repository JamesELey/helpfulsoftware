#!/bin/bash

# HelpfulSoftware Portfolio Deployment Script
# This script handles automatic deployment from Git

echo "🚀 Starting HelpfulSoftware Portfolio Deployment..."

# Navigate to the project directory
cd /var/www/vhosts/thebinday.co.uk/httpdocs

# Pull latest changes from Git
echo "📥 Pulling latest changes from Git..."
git pull origin main

# Install/Update Composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# Create necessary directories if they don't exist
echo "📁 Creating necessary directories..."
mkdir -p bootstrap/cache
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p storage/app/public

# Set proper permissions
echo "🔐 Setting proper permissions..."
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Clear all caches
echo "🧹 Clearing caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Run database migrations (if any)
echo "🗄️ Running database migrations..."
php artisan migrate --force

# Seed database with portfolio data
echo "🌱 Seeding database with portfolio data..."
php artisan db:seed --class=RealProjectSeeder --force

# Cache configuration for production
echo "⚡ Caching configuration for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set final permissions
echo "🔒 Setting final permissions..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache

echo "✅ Deployment completed successfully!"
echo "🎉 Your HelpfulSoftware portfolio is now live and updated!"
