<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeReview extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['comment', 'recipe_id', 'user_id'];

}
