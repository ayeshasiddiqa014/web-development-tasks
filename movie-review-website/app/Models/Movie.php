<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Define your movie properties here (e.g., title, year, director, etc.)
    protected $fillable = ['title', 'year', 'director', 'synopsis']; // Fillable fields

    // Add additional model methods if needed
}
