<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'highlights',
        'tech_stack',
        'category',
        'metric_badge',
        'github_url',
        'live_url',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'highlights' => 'array',
        'tech_stack' => 'array',
        'is_featured' => 'boolean',
    ];
}
