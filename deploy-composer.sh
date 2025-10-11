#!/bin/bash

# HelpfulSoftware Portfolio - Composer-based Deployment
# This script uses Composer scripts for deployment

echo "🚀 Starting HelpfulSoftware Portfolio Deployment with Composer..."

# Navigate to the project directory
cd /var/www/vhosts/thebinday.co.uk/httpdocs

# Pull latest changes from Git
echo "📥 Pulling latest changes from Git..."
git pull origin main

# Install/Update Composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# Run the deployment script
echo "🚀 Running Composer deployment script..."
composer run-script deploy

# Set final permissions
echo "🔒 Setting final permissions..."
chmod -R 755 storage
chmod -R 755 bootstrap/cache

echo "✅ Deployment completed successfully!"
echo "🎉 Your HelpfulSoftware portfolio is now live and updated!"
