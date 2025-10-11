#!/bin/bash

# Quick fix for bootstrap cache directory issue
echo "🔧 Fixing bootstrap cache directory issue..."

# Create the bootstrap cache directory
mkdir -p bootstrap/cache

# Set proper permissions
chmod 775 bootstrap/cache

# Try to set ownership (adjust if needed)
chown www-data:www-data bootstrap/cache 2>/dev/null || echo "Note: Could not set ownership (may need sudo)"

echo "✅ Bootstrap cache directory created and permissions set!"
echo "🚀 Now you can run: composer run-script deploy:quick"
