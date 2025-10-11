<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\FaviconService;

class FetchFavicons extends Command
{
    protected $signature = 'favicons:fetch';
    protected $description = 'Fetch favicons for all real project websites';

    public function handle()
    {
        $faviconService = new FaviconService();
        
        $this->info('Fetching favicons for real project websites...');
        
        $favicons = $faviconService->getFaviconUrls();
        
        foreach ($favicons as $website => $faviconUrl) {
            $this->info("✓ {$website}: {$faviconUrl}");
        }
        
        $this->info('Favicon fetching completed!');
        $this->info('These URLs can be used in the portfolio to display real website favicons.');
    }
}
