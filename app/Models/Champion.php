<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    use HasFactory;

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
