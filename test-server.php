<?php
/**
 * Server Configuration Test
 * This file tests if the web server is properly configured
 */

echo "<h1>🔍 Server Configuration Test</h1>";

// Test 1: Basic PHP
echo "<h2>✅ PHP Test</h2>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Current Directory: " . getcwd() . "<br>";

// Test 2: File Structure
echo "<h2>📁 File Structure Test</h2>";
$files = [
    'artisan' => 'Laravel Artisan',
    'composer.json' => 'Composer Configuration',
    'public/index.php' => 'Laravel Entry Point',
    'routes/web.php' => 'Web Routes',
    'resources/views/portfolio/about.blade.php' => 'About View'
];

foreach ($files as $file => $description) {
    $exists = file_exists($file);
    echo "$description: " . ($exists ? '✅ Yes' : '❌ No') . "<br>";
}

// Test 3: Laravel Bootstrap
echo "<h2>🚀 Laravel Bootstrap Test</h2>";
if (file_exists('bootstrap/app.php')) {
    try {
        require_once 'bootstrap/app.php';
        echo "Laravel App: ✅ Loads successfully<br>";
    } catch (Exception $e) {
        echo "Laravel App: ❌ Error - " . $e->getMessage() . "<br>";
    }
} else {
    echo "Laravel App: ❌ Bootstrap file missing<br>";
}

// Test 4: Web Server Configuration
echo "<h2>🌐 Web Server Test</h2>";
echo "Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Not set') . "<br>";
echo "Script Name: " . ($_SERVER['SCRIPT_NAME'] ?? 'Not set') . "<br>";
echo "Request URI: " . ($_SERVER['REQUEST_URI'] ?? 'Not set') . "<br>";

// Test 5: URL Rewriting
echo "<h2>🔄 URL Rewriting Test</h2>";
if (isset($_SERVER['REQUEST_URI'])) {
    $uri = $_SERVER['REQUEST_URI'];
    if (strpos($uri, 'test-server.php') === false) {
        echo "URL Rewriting: ✅ Working (this file accessed via clean URL)<br>";
    } else {
        echo "URL Rewriting: ❌ Not working (direct file access)<br>";
    }
}

echo "<h2>🎯 Next Steps</h2>";
echo "If any tests failed, the issue is likely:<br>";
echo "1. <strong>Document Root:</strong> Should point to /public directory<br>";
echo "2. <strong>URL Rewriting:</strong> .htaccess not working<br>";
echo "3. <strong>Laravel Installation:</strong> Missing files or dependencies<br>";
echo "4. <strong>Permissions:</strong> Files not readable by web server<br>";

echo "<h2>🔧 Quick Fixes</h2>";
echo "1. Set document root to: <code>/var/www/vhosts/thebinday.co.uk/httpdocs/public</code><br>";
echo "2. Ensure .htaccess files are present and working<br>";
echo "3. Run: <code>composer install --no-dev --optimize-autoloader</code><br>";
echo "4. Run: <code>php artisan key:generate</code><br>";
?>
