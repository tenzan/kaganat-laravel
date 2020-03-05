<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id', 'name', 'phone', 'address','wifi', 'desc'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
