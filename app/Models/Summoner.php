<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\User;

class Summoner extends Model
{
    use HasFactory;


    protected $table = 'summoners';

    protected $primaryKey = 'id';

    protected $guarded = [];

    // a Summoner belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
