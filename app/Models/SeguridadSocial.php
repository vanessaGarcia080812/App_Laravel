<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeguridadSocial extends Model
{
    use HasFactory;

    protected $table = 'seguridadsocial';
    protected $primaryKey = 'id_seguridad_social';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_seguridad_social',
        'nro_documento_empleado',
        'nombre_seguridad_social',
        'porcentaje_empleado',
        'porcentaje_empleador'
    ];
}
