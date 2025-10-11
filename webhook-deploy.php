<?php
/**
 * GitHub Webhook Deployment Script
 * Automatically deploys when changes are pushed to the main branch
 */

// Verify this is a GitHub webhook
$headers = getallheaders();
$signature = $headers['X-Hub-Signature-256'] ?? '';

// Your GitHub webhook secret (set this in your GitHub repository settings)
$webhook_secret = 'your-webhook-secret-here';

// Verify the webhook signature
$payload = file_get_contents('php://input');
$expected_signature = 'sha256=' . hash_hmac('sha256', $payload, $webhook_secret);

if (!hash_equals($signature, $expected_signature)) {
    http_response_code(401);
    die('Unauthorized');
}

// Parse the webhook payload
$data = json_decode($payload, true);

// Only deploy if this is a push to the main branch
if ($data['ref'] === 'refs/heads/main') {
    // Log the deployment
    file_put_contents('/var/www/vhosts/thebinday.co.uk/httpdocs/deployment.log', 
        date('Y-m-d H:i:s') . " - Deploying commit: " . $data['head_commit']['id'] . "\n", 
        FILE_APPEND
    );
    
    // Execute the deployment script using Composer
    $output = shell_exec('cd /var/www/vhosts/thebinday.co.uk/httpdocs && git pull origin main && composer install --no-dev --optimize-autoloader && composer run-script deploy 2>&1');
    
    // Log the output
    file_put_contents('/var/www/vhosts/thebinday.co.uk/httpdocs/deployment.log', 
        "Output: " . $output . "\n", 
        FILE_APPEND
    );
    
    echo "Deployment triggered successfully!";
} else {
    echo "No deployment needed - not a push to main branch";
}
?>
