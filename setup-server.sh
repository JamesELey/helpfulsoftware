#!/bin/bash

# HelpfulSoftware Portfolio - Complete Server Setup
echo "🚀 Setting up HelpfulSoftware Portfolio on remote server..."

# Navigate to project directory
cd /var/www/vhosts/thebinday.co.uk/httpdocs

# Pull latest changes
echo "📥 Pulling latest changes..."
git pull origin main

# Install Composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# Create necessary directories
echo "📁 Creating necessary directories..."
mkdir -p bootstrap/cache
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p storage/app/public

# Set permissions
echo "🔐 Setting permissions..."
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# Create .env file if it doesn't exist
if [ ! -f .env ]; then
    echo "⚙️ Creating .env file..."
    cp env.production.example .env
    php artisan key:generate
fi

# Clear all caches
echo "🧹 Clearing all caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Run migrations
echo "🗄️ Running database migrations..."
php artisan migrate --force

# Seed database
echo "🌱 Seeding database..."
php artisan db:seed --class=RealProjectSeeder --force

# Cache for production
echo "⚡ Caching for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Test Laravel
echo "🧪 Testing Laravel..."
php artisan --version

# List routes
echo "🛣️ Available routes:"
php artisan route:list

echo "✅ Server setup completed!"
echo "🎉 Your portfolio should now be working at:"
echo "   - https://thebinday.co.uk/"
echo "   - https://thebinday.co.uk/about"
echo "   - https://thebinday.co.uk/contact"
