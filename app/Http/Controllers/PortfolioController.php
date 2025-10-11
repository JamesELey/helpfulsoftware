<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('featured', 'desc')
                      ->orderBy('created_at', 'desc')
                      ->get();
        
        return view('portfolio.index', compact('brands'));
    }

    public function show(Brand $brand)
    {
        $relatedBrands = Brand::where('id', '!=', $brand->id)
                             ->inRandomOrder()
                             ->limit(3)
                             ->get();
        
        return view('portfolio.show', compact('brand', 'relatedBrands'));
    }

    public function about()
    {
        return view('portfolio.about');
    }

    public function contact()
    {
        return view('portfolio.contact');
    }
}
