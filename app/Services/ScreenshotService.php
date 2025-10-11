<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ScreenshotService
{
    public function captureWebsiteScreenshots()
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

        $results = [];
        
        foreach ($websites as $name => $url) {
            try {
                // Check if website is accessible
                $response = Http::timeout(10)->get($url);
                
                if ($response->successful()) {
                    $results[$name] = [
                        'status' => 'accessible',
                        'url' => $url,
                        'response_time' => $response->transferStats->getHandlerStat('total_time') ?? 'N/A'
                    ];
                } else {
                    $results[$name] = [
                        'status' => 'error',
                        'url' => $url,
                        'error' => 'HTTP ' . $response->status()
                    ];
                }
                
            } catch (\Exception $e) {
                $results[$name] = [
                    'status' => 'error',
                    'url' => $url,
                    'error' => $e->getMessage()
                ];
            }
        }

        return $results;
    }

    public function generateScreenshotUrls()
    {
        // Using a placeholder service for demonstration
        // In production, you'd use services like:
        // - ScreenshotAPI.com
        // - htmlcsstoimage.com
        // - Puppeteer with headless Chrome
        // - Browserless.io
        
        $websites = [
            'angieart.uk',
            'clawandorder.uk', 
            'gentlepaw.uk',
            'groomly.uk',
            'guineaguru.com',
            'happyhoppers.info',
            'healthywellbeing.info',
            'reviewable.info',
            'thebinday.co.uk'
        ];

        $screenshotUrls = [];
        
        foreach ($websites as $website) {
            // For demonstration, we'll use Unsplash images that match the project type
            $screenshotUrls[$website] = $this->getProjectImage($website);
        }

        return $screenshotUrls;
    }

    private function getProjectImage($website)
    {
        $imageMap = [
            'angieart.uk' => 'https://images.unsplash.com/photo-1541961017774-22349e4a1262?w=800&h=600&fit=crop',
            'clawandorder.uk' => 'https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=800&h=600&fit=crop',
            'gentlepaw.uk' => 'https://images.unsplash.com/photo-1601758228041-f3b2795255f1?w=800&h=600&fit=crop',
            'groomly.uk' => 'https://images.unsplash.com/photo-1551717743-49959800b1f6?w=800&h=600&fit=crop',
            'guineaguru.com' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=800&h=600&fit=crop',
            'happyhoppers.info' => 'https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=800&h=600&fit=crop',
            'healthywellbeing.info' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&h=600&fit=crop',
            'reviewable.info' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=600&fit=crop',
            'thebinday.co.uk' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop'
        ];

        return $imageMap[$website] ?? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop';
    }
}
