<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $attributes = ['user_id' => 1];
    protected $fillable = ['user_id', 'name', 'phone', 'address','wifi', 'desc'];
}
