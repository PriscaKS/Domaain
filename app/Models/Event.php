<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'title',
        'location',
        'event_date',
        'description',
        'image_url',
        'tags',
    ];

    protected $casts = [
        'tags' => 'array',
        'event_date' => 'datetime',
    ];
}
