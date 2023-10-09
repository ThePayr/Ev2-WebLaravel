<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    protected $fillable = ['category_id', 'patent' , 'year', 'brand', 'model'];

    public function category () {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function rentals () {
        return $this->hasMany(Rental::class, 'patent');
    }
}
