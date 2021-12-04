<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeReview extends Model
{
    use HasFactory;

    public $timestamps = true;
//  TODO - add => id?, comment, recipe_id, user_id, created_at, updated_at
    protected $fillable = ['comment', 'recipe_id', 'user_id'];

    public function recipe(){
        return $this->belongsTo('App\Models\Recipe','recipe_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

}
