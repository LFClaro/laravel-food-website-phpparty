<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
//  protected $table = 'students';
//  protected $primaryKey = 'id';
    public $timestamps = true;
//  TODO: add => id?, name, address, phone, menu_options, email, website, comments, rating, country_id
//  TODO: created_at, updated_at
    protected $fillable = ['name', 'address', 'phone', 'menu_options', 'email',
                            'website', 'comments', 'rating', 'country_id'];

    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }

    public function reviews()
    {
        return $this->belongsTo('App\Models\RestaurantReview','id');
    }
}
