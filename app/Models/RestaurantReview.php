<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantReview extends Model
{
    use HasFactory;
//  protected $table = 'students';
//  protected $primaryKey = 'id';
    public $timestamps = true;
//  TODO - add => id?, comment, restuarant_id, user_id, created_at, updated_at
    protected $fillable = ['comment', 'restuarant_id', 'user_id'];
}
