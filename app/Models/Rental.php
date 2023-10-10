<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $table = 'rentals';

    protected $fillable = [
        'name',
        'last_name',
        'second_last_name',
        'rut',
        'email',
        'patent',
        'start_date',
        'return_date'
    ];

    public function patent () {
        return $this->belongsTo(Vehicle::class, 'patent');
    }
}
