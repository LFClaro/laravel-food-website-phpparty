<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
//  protected $table = 'students';
//  protected $primaryKey = 'id';
    public $timestamps = true;
//  TODO - add => id?, name, region, created_at, updated_at
    protected $fillable = ['name', 'region'];
}
