<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

//  protected $table = 'students';
//  protected $primaryKey = 'id';
    public $timestamps = true;
//  TODO - add => id?, name, description, ingredients, steps, website, comments, calories, servings, rating,
//  TODO -        country_id, user_id, restaurant_id, created_at, updated_at
    protected $fillable = ['name', 'description', 'ingredients', 'steps', 'website', 'comments',
                            'calories', 'servings', 'rating', 'country_id', 'user_id', 'restaurant_id'];

    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }

    public function reviews()
    {
        return $this->belongsTo('App\Models\RecipeReview','id');
    }
}
