<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Champion extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $casts = [
        'stats' => 'array'
    ];

    protected $fillable = [
        'key',
        'nickname',
        'name',
        'title',
        'tags',
        'img',
        'difficulty'
    ];
}
