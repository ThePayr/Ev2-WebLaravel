<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $fillable = [
        'nombre',
        'rut',
        'patente',
        'entrega',
        'devolucion',
    ];

    protected $dates = [
        'entrega',
        'devolucion',
    ];

    public function vehicle()
{
    return $this->belongsTo(Vehicle::class);
}
}
