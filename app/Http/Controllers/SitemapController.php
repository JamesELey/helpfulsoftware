<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        // Homepage
        $sitemap .= '    <url>' . "\n";
        $sitemap .= '        <loc>' . url('/') . '</loc>' . "\n";
        $sitemap .= '        <lastmod>' . date('Y-m-d') . '</lastmod>' . "\n";
        $sitemap .= '        <changefreq>weekly</changefreq>' . "\n";
        $sitemap .= '        <priority>1.0</priority>' . "\n";
        $sitemap .= '    </url>' . "\n";
        
        // About page
        $sitemap .= '    <url>' . "\n";
        $sitemap .= '        <loc>' . url('/about') . '</loc>' . "\n";
        $sitemap .= '        <lastmod>' . date('Y-m-d') . '</lastmod>' . "\n";
        $sitemap .= '        <changefreq>monthly</changefreq>' . "\n";
        $sitemap .= '        <priority>0.8</priority>' . "\n";
        $sitemap .= '    </url>' . "\n";
        
        // Contact page
        $sitemap .= '    <url>' . "\n";
        $sitemap .= '        <loc>' . url('/contact') . '</loc>' . "\n";
        $sitemap .= '        <lastmod>' . date('Y-m-d') . '</lastmod>' . "\n";
        $sitemap .= '        <changefreq>monthly</changefreq>' . "\n";
        $sitemap .= '        <priority>0.8</priority>' . "\n";
        $sitemap .= '    </url>' . "\n";
        
        // Brand pages
        foreach ($brands as $brand) {
            $sitemap .= '    <url>' . "\n";
            $sitemap .= '        <loc>' . url('/brand/' . $brand->slug) . '</loc>' . "\n";
            $sitemap .= '        <lastmod>' . $brand->updated_at->format('Y-m-d') . '</lastmod>' . "\n";
            $sitemap .= '        <changefreq>monthly</changefreq>' . "\n";
            $sitemap .= '        <priority>0.6</priority>' . "\n";
            $sitemap .= '    </url>' . "\n";
        }
        
        $sitemap .= '</urlset>';
        
        return response($sitemap, 200)
            ->header('Content-Type', 'application/xml');
    }
}