<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = [
        'company',
        'role',
        'period',
        'location',
        'achievements',
        'certificate_url',
        'order',
    ];

    protected $casts = [
        'achievements' => 'array',
    ];
}
