<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class CaptureWebsiteScreenshots extends Command
{
    protected $signature = 'screenshots:capture';
    protected $description = 'Capture screenshots of real project websites';

    public function handle()
    {
        $websites = [
            'angieart.uk' => 'https://angieart.uk',
            'clawandorder.uk' => 'https://clawandorder.uk', 
            'gentlepaw.uk' => 'https://gentlepaw.uk',
            'groomly.uk' => 'https://groomly.uk',
            'guineaguru.com' => 'https://guineaguru.com',
            'happyhoppers.info' => 'https://happyhoppers.info',
            'healthywellbeing.info' => 'https://healthywellbeing.info',
            'reviewable.info' => 'https://reviewable.info',
            'thebinday.co.uk' => 'https://thebinday.co.uk'
        ];

        $this->info('Capturing screenshots of real project websites...');

        foreach ($websites as $name => $url) {
            $this->info("Processing: {$name}");
            
            try {
                // Check if website is accessible
                $response = Http::timeout(10)->get($url);
                
                if ($response->successful()) {
                    $this->info("✓ {$name} is accessible");
                    
                    // For now, we'll use placeholder images
                    // In a real implementation, you'd use a service like:
                    // - ScreenshotAPI
                    // - Puppeteer
                    // - Browserless
                    // - Or a headless browser
                    
                } else {
                    $this->warn("⚠ {$name} returned status: " . $response->status());
                }
                
            } catch (\Exception $e) {
                $this->error("✗ {$name} failed: " . $e->getMessage());
            }
        }

        $this->info('Screenshot capture process completed!');
        $this->info('Note: Actual screenshots would require a screenshot service or headless browser.');
    }
}
