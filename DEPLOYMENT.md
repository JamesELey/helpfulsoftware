# 🚀 HelpfulSoftware Portfolio - Deployment Guide

## Quick Deploy (After Git Pull)

### Option 1: Manual Deploy
```bash
# After pulling from Git
git pull origin main

# Run the quick deploy script
./quick-deploy.sh
```

### Option 2: Full Deploy
```bash
# Run the full deployment script
./deploy.sh
```

## Initial Server Setup

### 1. Clone Repository
```bash
cd /var/www/vhosts/thebinday.co.uk/httpdocs
git clone https://github.com/JamesELey/helpfulsoftware.git .
```

### 2. Set Up Environment
```bash
# Copy production environment file
cp env.production.example .env

# Edit .env with your database credentials
nano .env

# Generate application key
php artisan key:generate
```

### 3. Set Permissions
```bash
# Make scripts executable
chmod +x deploy.sh quick-deploy.sh

# Set proper permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 4. Initial Deploy
```bash
# Run full deployment
./deploy.sh
```

## Automated Deployment (GitHub Webhook)

### 1. Set Up Webhook in GitHub
- Go to your repository settings
- Add webhook: `https://thebinday.co.uk/webhook-deploy.php`
- Set secret and select "push" events

### 2. Configure Webhook Script
```bash
# Edit webhook script with your secret
nano webhook-deploy.php
# Update the $webhook_secret variable
```

## File Structure
```
/var/www/vhosts/thebinday.co.uk/httpdocs/
├── deploy.sh              # Full deployment script
├── quick-deploy.sh        # Quick deployment script
├── webhook-deploy.php     # GitHub webhook handler
├── env.production.example # Production environment template
└── DEPLOYMENT.md          # This file
```

## Troubleshooting

### Permission Issues
```bash
# Fix storage permissions
chmod -R 775 storage
chown -R www-data:www-data storage

# Fix bootstrap cache
chmod -R 775 bootstrap/cache
chown -R www-data:www-data bootstrap/cache
```

### Database Issues
```bash
# Reset database
php artisan migrate:fresh --seed --force
```

### Cache Issues
```bash
# Clear all caches
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

## What Each Script Does

### `deploy.sh` (Full Deploy)
- Pulls latest changes from Git
- Installs Composer dependencies
- Creates necessary directories
- Sets proper permissions
- Clears all caches
- Runs migrations
- Seeds database
- Caches configuration for production

### `quick-deploy.sh` (Quick Deploy)
- Installs dependencies
- Clears caches
- Runs migrations and seeds
- Caches configuration

### `webhook-deploy.php` (Auto Deploy)
- Verifies GitHub webhook signature
- Triggers deployment on push to main branch
- Logs deployment activity
