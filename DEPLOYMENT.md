# 🚀 HelpfulSoftware Portfolio - Deployment Guide

## Quick Deploy (After Git Pull)

### Option 1: Composer Deploy (RECOMMENDED)
```bash
# After pulling from Git
git pull origin main

# Run Composer deployment
composer run-script deploy:quick
```

### Option 2: One-Liner Deploy
```bash
# Super simple - just run this
./deploy-simple.sh
```

### Option 3: Full Composer Deploy
```bash
# Full deployment with Composer
./deploy-composer.sh
```

### Option 4: Manual Scripts
```bash
# Quick deploy script
./quick-deploy.sh

# Full deploy script
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

## Composer Deployment Scripts

### Available Composer Commands
```bash
# Full deployment (permissions + clear + migrate + seed + cache)
composer run-script deploy

# Quick deployment (clear + migrate + seed + cache)
composer run-script deploy:quick

# Production deployment (same as deploy)
composer run-script deploy:production

# Individual steps
composer run-script deploy:permissions  # Create directories
composer run-script deploy:clear        # Clear all caches
composer run-script deploy:migrate      # Run migrations
composer run-script deploy:seed         # Seed database
composer run-script deploy:cache        # Cache for production
```

## What Each Script Does

### Composer Scripts (RECOMMENDED)
- **`deploy`**: Full deployment with permissions, clearing, migration, seeding, and caching
- **`deploy:quick`**: Quick deployment without permission setup
- **`deploy:production`**: Same as deploy, optimized for production
- **Individual scripts**: Run specific deployment steps

### Shell Scripts
- **`deploy-composer.sh`**: Uses Composer scripts for deployment
- **`deploy-simple.sh`**: One-liner: git pull + composer install + deploy:quick
- **`deploy.sh`**: Full deployment with shell commands
- **`quick-deploy.sh`**: Quick deployment with shell commands

### `webhook-deploy.php` (Auto Deploy)
- Verifies GitHub webhook signature
- Triggers Composer-based deployment on push to main branch
- Logs deployment activity
