<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Rental extends Model
{

    use HasFactory;
    use SoftDeletes;
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
    protected $dates = ['deleted_at'];

    public function patent () {
        return $this->belongsTo(Vehicle::class, 'patent');
    }
}
