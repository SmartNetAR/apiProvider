<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'year', 'imdbID', 'type', 'urlPoster',
    ];

    protected $hidden = [
        'lastDateUpdate', 
    ];
    
}
