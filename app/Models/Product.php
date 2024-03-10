<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function connection()
    {
        return $this->belongsTo(Connection::class);
    }

    public function color()
    {
        return $this->belongsToMany(Color::class);
    }
    public function price()
    {
        return $this->hasMany(Price::class);
    }
    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
