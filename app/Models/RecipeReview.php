<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeReview extends Model
{
    use HasFactory;
//  protected $table = 'students';
//  protected $primaryKey = 'id';
    public $timestamps = true;
//  TODO - add => id?, comment, recipe_id, user_id, created_at, updated_at
    protected $fillable = ['comment', 'recipe_id', 'user_id'];
}
