<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'title',
        'organization',
        'date',
        'description',
        'badge',
        'credential_url',
        'order',
    ];
}
