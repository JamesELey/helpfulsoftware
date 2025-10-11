<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'short_description',
        'logo',
        'screenshot',
        'website_url',
        'industry',
        'featured',
        'metrics',
        'testimonial',
        'testimonial_author',
        'testimonial_position',
        'launch_date',
        'status',
        'technologies',
        'challenges',
        'solutions',
        'results'
    ];

    protected $casts = [
        'metrics' => 'array',
        'technologies' => 'array',
        'featured' => 'boolean',
        'launch_date' => 'date',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugAttribute()
    {
        return str($this->name)->slug();
    }
}
