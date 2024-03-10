<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['street_name', 'street_number', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
