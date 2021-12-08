<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['name', 'description', 'ingredients', 'steps', 'website', 'comments',
        'calories', 'servings', 'rating', 'country_id', 'user_id', 'restaurant_id'];
}
