<?php
/**
 * HelpfulSoftware Portfolio - Remote Server Diagnostic Script
 * Run this to check what's working and what's not
 */

echo "<h1>🔍 HelpfulSoftware Portfolio - Server Diagnostic</h1>";

// Check if we're in the right directory
echo "<h2>📁 Directory Check</h2>";
echo "Current directory: " . getcwd() . "<br>";
echo "Laravel files exist: " . (file_exists('artisan') ? '✅ Yes' : '❌ No') . "<br>";
echo "Composer files exist: " . (file_exists('composer.json') ? '✅ Yes' : '❌ No') . "<br>";

// Check environment file
echo "<h2>⚙️ Environment Check</h2>";
echo ".env file exists: " . (file_exists('.env') ? '✅ Yes' : '❌ No') . "<br>";
if (file_exists('.env')) {
    echo ".env file readable: " . (is_readable('.env') ? '✅ Yes' : '❌ No') . "<br>";
}

// Check Laravel application
echo "<h2>🚀 Laravel Application Check</h2>";
if (file_exists('bootstrap/app.php')) {
    echo "Bootstrap file exists: ✅ Yes<br>";
    try {
        require_once 'bootstrap/app.php';
        echo "Laravel app loads: ✅ Yes<br>";
    } catch (Exception $e) {
        echo "Laravel app loads: ❌ No - " . $e->getMessage() . "<br>";
    }
} else {
    echo "Bootstrap file exists: ❌ No<br>";
}

// Check database connection
echo "<h2>🗄️ Database Check</h2>";
if (file_exists('.env')) {
    $env = file_get_contents('.env');
    if (strpos($env, 'DB_CONNECTION=mysql') !== false) {
        echo "Database configured: ✅ Yes<br>";
    } else {
        echo "Database configured: ❌ No<br>";
    }
} else {
    echo "Database configured: ❌ No (.env missing)<br>";
}

// Check view files
echo "<h2>👁️ View Files Check</h2>";
echo "About view exists: " . (file_exists('resources/views/portfolio/about.blade.php') ? '✅ Yes' : '❌ No') . "<br>";
echo "Layout exists: " . (file_exists('resources/views/layouts/app.blade.php') ? '✅ Yes' : '❌ No') . "<br>";

// Check storage permissions
echo "<h2>🔒 Permissions Check</h2>";
echo "Storage directory writable: " . (is_writable('storage') ? '✅ Yes' : '❌ No') . "<br>";
echo "Bootstrap cache writable: " . (is_writable('bootstrap/cache') ? '✅ Yes' : '❌ No') . "<br>";

// Check if we can run artisan
echo "<h2>⚡ Artisan Check</h2>";
if (file_exists('artisan')) {
    $output = shell_exec('php artisan --version 2>&1');
    if ($output) {
        echo "Artisan works: ✅ Yes - " . trim($output) . "<br>";
    } else {
        echo "Artisan works: ❌ No<br>";
    }
} else {
    echo "Artisan works: ❌ No (artisan file missing)<br>";
}

echo "<h2>🎯 Next Steps</h2>";
echo "If any checks failed, run these commands on your server:<br>";
echo "<code>composer install --no-dev --optimize-autoloader</code><br>";
echo "<code>php artisan key:generate</code><br>";
echo "<code>php artisan migrate</code><br>";
echo "<code>php artisan db:seed --class=RealProjectSeeder</code><br>";
echo "<code>chmod -R 775 storage bootstrap/cache</code><br>";
?>
