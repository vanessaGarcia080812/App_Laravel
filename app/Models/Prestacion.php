<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestacion extends Model
{
    use HasFactory;

    protected $table = 'prestaciones';
    protected $primaryKey = 'id_prestacion';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_prestacion',
        'nro_documento_empleado',
        'tipo_prestacion',
        'monto',
        'fecha_pago'
    ];
}
