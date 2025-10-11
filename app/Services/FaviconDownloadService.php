<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class FaviconDownloadService
{
    public function downloadAllFavicons()
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
            'binday.help' => 'https://binday.help',
            'cleaners.help' => 'https://cleaners.help',
            'findmyfuel.help' => 'https://findmyfuel.help',
            'pasteshare.uk' => 'https://pasteshare.uk',
            'quantumshare.co.uk' => 'https://quantumshare.co.uk'
        ];

        $results = [];
        
        // Create favicons directory if it doesn't exist
        $faviconPath = public_path('favicons');
        if (!file_exists($faviconPath)) {
            mkdir($faviconPath, 0755, true);
        }

        foreach ($websites as $name => $url) {
            $faviconPath = $this->downloadFavicon($name, $url);
            $results[$name] = $faviconPath;
        }

        return $results;
    }

    private function downloadFavicon($name, $url)
    {
        try {
            // First, try to get the actual favicon from the website's HTML
            $htmlResponse = Http::timeout(15)->get($url);
            
            if ($htmlResponse->successful()) {
                $html = $htmlResponse->body();
                
                // Look for favicon links in the HTML
                $faviconUrls = $this->extractFaviconUrls($html, $url);
                
                // Try each favicon URL found in the HTML
                foreach ($faviconUrls as $faviconUrl) {
                    try {
                        $response = Http::timeout(10)->get($faviconUrl);
                        
                        if ($response->successful() && strlen($response->body()) > 100) {
                            $extension = $this->getExtensionFromContentType($response->header('content-type'));
                            $filename = $name . '.' . $extension;
                            $filepath = public_path('favicons/' . $filename);
                            
                            file_put_contents($filepath, $response->body());
                            
                            return '/favicons/' . $filename;
                        }
                    } catch (\Exception $e) {
                        continue;
                    }
                }
            }

            // Try common favicon locations on the website
            $commonFaviconUrls = [
                $url . '/favicon.ico',
                $url . '/favicon.png',
                $url . '/favicon-192x192.png',
                $url . '/favicon-180x180.png',
                $url . '/favicon-152x152.png',
                $url . '/favicon-144x144.png',
                $url . '/favicon-120x120.png',
                $url . '/apple-touch-icon.png',
                $url . '/favicon-32x32.png',
                $url . '/favicon-16x16.png'
            ];

            foreach ($commonFaviconUrls as $faviconUrl) {
                try {
                    $response = Http::timeout(10)->get($faviconUrl);
                    
                    if ($response->successful() && strlen($response->body()) > 100) {
                        $extension = $this->getExtensionFromContentType($response->header('content-type'));
                        $filename = $name . '.' . $extension;
                        $filepath = public_path('favicons/' . $filename);
                        
                        file_put_contents($filepath, $response->body());
                        
                        return '/favicons/' . $filename;
                    }
                } catch (\Exception $e) {
                    continue;
                }
            }

            // Final fallback: Create a high-resolution SVG favicon
            $this->createHighResSvgFavicon($name, $url);
            return '/favicons/' . $name . '.svg';

        } catch (\Exception $e) {
            Log::warning("Failed to download favicon for {$name}: " . $e->getMessage());
            $this->createHighResSvgFavicon($name, $url);
            return '/favicons/' . $name . '.svg';
        }
    }

    private function extractFaviconUrls($html, $baseUrl)
    {
        $faviconUrls = [];
        $baseUrlParsed = parse_url($baseUrl);
        $baseUrlScheme = $baseUrlParsed['scheme'] ?? 'https';
        $baseUrlHost = $baseUrlParsed['host'] ?? '';
        
        // Look for favicon links in HTML
        preg_match_all('/<link[^>]+rel=["\'](?:icon|shortcut icon|apple-touch-icon)["\'][^>]*>/i', $html, $matches);
        
        foreach ($matches[0] as $linkTag) {
            // Extract href attribute
            if (preg_match('/href=["\']([^"\']+)["\']/', $linkTag, $hrefMatches)) {
                $href = $hrefMatches[1];
                
                // Convert relative URLs to absolute
                if (strpos($href, '//') === 0) {
                    $faviconUrls[] = $baseUrlScheme . ':' . $href;
                } elseif (strpos($href, '/') === 0) {
                    $faviconUrls[] = $baseUrlScheme . '://' . $baseUrlHost . $href;
                } elseif (strpos($href, 'http') === 0) {
                    $faviconUrls[] = $href;
                } else {
                    $faviconUrls[] = rtrim($baseUrl, '/') . '/' . ltrim($href, '/');
                }
            }
        }
        
        return array_unique($faviconUrls);
    }

    private function getExtensionFromContentType($contentType)
    {
        if (str_contains($contentType, 'png')) return 'png';
        if (str_contains($contentType, 'jpg') || str_contains($contentType, 'jpeg')) return 'jpg';
        if (str_contains($contentType, 'gif')) return 'gif';
        if (str_contains($contentType, 'svg')) return 'svg';
        return 'ico';
    }

    private function createHighResSvgFavicon($name, $url)
    {
        try {
            // Create a high-resolution SVG favicon
            $colors = [
                'angieart.uk' => '#ff6384',      // Pink
                'clawandorder.uk' => '#36a2eb',  // Blue
                'gentlepaw.uk' => '#ffcd56',     // Yellow
                'groomly.uk' => '#4bc0c0',      // Teal
                'guineaguru.com' => '#9966ff',   // Purple
                'happyhoppers.info' => '#ff9f40', // Orange
                'healthywellbeing.info' => '#c7c7c7', // Gray
                'reviewable.info' => '#5366ff',  // Indigo
                'thebinday.co.uk' => '#28a745'   // Green
            ];
            
            $color = $colors[$name] ?? '#667eea'; // Default purple
            $text = substr(strtoupper($name), 0, 2);
            
            $svg = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="128" height="128" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:' . $color . ';stop-opacity:1" />
            <stop offset="100%" style="stop-color:' . $this->darkenColor($color, 20) . ';stop-opacity:1" />
        </linearGradient>
    </defs>
    <rect width="128" height="128" fill="url(#grad)" rx="24"/>
    <text x="64" y="80" font-family="Arial, sans-serif" font-size="36" font-weight="bold" text-anchor="middle" fill="white" text-shadow="0 2px 4px rgba(0,0,0,0.3)">' . $text . '</text>
</svg>';
            
            $filepath = public_path('favicons/' . $name . '.svg');
            file_put_contents($filepath, $svg);
            
        } catch (\Exception $e) {
            Log::warning("Failed to create high-res SVG favicon for {$name}: " . $e->getMessage());
        }
    }

    private function darkenColor($color, $percent)
    {
        // Simple color darkening function
        $color = ltrim($color, '#');
        $r = hexdec(substr($color, 0, 2));
        $g = hexdec(substr($color, 2, 2));
        $b = hexdec(substr($color, 4, 2));
        
        $r = max(0, $r - ($r * $percent / 100));
        $g = max(0, $g - ($g * $percent / 100));
        $b = max(0, $b - ($b * $percent / 100));
        
        return sprintf('#%02x%02x%02x', $r, $g, $b);
    }
}