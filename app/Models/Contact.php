<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false; // switched to false
//  TODO - add => id?, name, email, subject, message
    protected $fillable = ['name', 'email', 'subject','message'];
}
