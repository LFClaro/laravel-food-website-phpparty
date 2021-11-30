<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RestaurantReview extends Model
{

    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['comment','restaurant_id','user_id'];

public function restaurant(){
    return $this->belongsTo('App\Models\Restaurant','restaurant_id');
}

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

}
