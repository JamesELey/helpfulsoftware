<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class FaviconService
{
    public function getFaviconUrls()
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

        $favicons = [];
        
        foreach ($websites as $name => $url) {
            $favicons[$name] = $this->getFaviconUrl($url);
        }

        return $favicons;
    }

    private function getFaviconUrl($url)
    {
        try {
            // Try multiple favicon locations
            $faviconUrls = [
                $url . '/favicon.ico',
                $url . '/favicon.png',
                $url . '/apple-touch-icon.png',
                'https://www.google.com/s2/favicons?domain=' . parse_url($url, PHP_URL_HOST),
                'https://favicons.githubusercontent.com/' . parse_url($url, PHP_URL_HOST),
                'https://api.faviconkit.com/' . parse_url($url, PHP_URL_HOST) . '/32'
            ];

            foreach ($faviconUrls as $faviconUrl) {
                try {
                    $response = Http::timeout(5)->head($faviconUrl);
                    if ($response->successful()) {
                        return $faviconUrl;
                    }
                } catch (\Exception $e) {
                    continue;
                }
            }

            // Fallback to Google's favicon service
            return 'https://www.google.com/s2/favicons?domain=' . parse_url($url, PHP_URL_HOST) . '&sz=64';

        } catch (\Exception $e) {
            Log::warning("Failed to get favicon for {$url}: " . $e->getMessage());
            return 'https://www.google.com/s2/favicons?domain=' . parse_url($url, PHP_URL_HOST) . '&sz=64';
        }
    }

    public function getFaviconForWebsite($website)
    {
        $faviconMap = [
            'angieart.uk' => 'https://www.google.com/s2/favicons?domain=angieart.uk&sz=64',
            'clawandorder.uk' => 'https://www.google.com/s2/favicons?domain=clawandorder.uk&sz=64',
            'gentlepaw.uk' => 'https://www.google.com/s2/favicons?domain=gentlepaw.uk&sz=64',
            'groomly.uk' => 'https://www.google.com/s2/favicons?domain=groomly.uk&sz=64',
            'guineaguru.com' => 'https://www.google.com/s2/favicons?domain=guineaguru.com&sz=64',
            'happyhoppers.info' => 'https://www.google.com/s2/favicons?domain=happyhoppers.info&sz=64',
            'healthywellbeing.info' => 'https://www.google.com/s2/favicons?domain=healthywellbeing.info&sz=64',
            'reviewable.info' => 'https://www.google.com/s2/favicons?domain=reviewable.info&sz=64',
            'thebinday.co.uk' => 'https://www.google.com/s2/favicons?domain=thebinday.co.uk&sz=64'
        ];

        return $faviconMap[$website] ?? 'https://www.google.com/s2/favicons?domain=example.com&sz=64';
    }
}
