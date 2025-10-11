#!/bin/bash

# Fix Laravel routing issues
echo "🔧 Fixing Laravel routing issues..."

# Clear all caches
echo "🧹 Clearing all caches..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Clear route cache specifically
echo "🛣️ Clearing route cache..."
php artisan route:clear

# Rebuild route cache
echo "⚡ Rebuilding route cache..."
php artisan route:cache

# Test routes
echo "🧪 Testing routes..."
echo "Available routes:"
php artisan route:list

echo "✅ Route fix completed!"
