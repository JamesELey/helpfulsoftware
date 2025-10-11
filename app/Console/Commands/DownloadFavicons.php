<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\FaviconDownloadService;

class DownloadFavicons extends Command
{
    protected $signature = 'favicons:download';
    protected $description = 'Download actual favicon files from all real project websites';

    public function handle()
    {
        $this->info('Downloading actual favicon files from real project websites...');
        
        $faviconService = new FaviconDownloadService();
        $results = $faviconService->downloadAllFavicons();
        
        $this->info('Favicon download results:');
        foreach ($results as $website => $path) {
            $this->info("✓ {$website}: {$path}");
        }
        
        $this->info('All favicon files have been downloaded to public/favicons/');
        $this->info('You can now update the database to use local favicon files.');
    }
}
