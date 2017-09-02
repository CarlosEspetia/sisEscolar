<?php

namespace sisEscolar;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos'; //Variable que refiere a la tabla de la BD.
    protected $primaryKey = 'id_alumno'; //Variable que refiere al id de la tabla.
    public $timestamps = false; //Desactivamos las columnas de creacion y actualizacion.
    //Variables que efieren a campos que se pueden ingresar en la tabla.
    protected $fillable = [
        'escuela_alumno',
        'estado_alumno',
        'nombre_alumno',
        'apellido_alumno',
        'direcion_alumno',
        'telefono_emergencia_alumno',
        'autorizados_alumno',
        'observaciones_alumno',
        'foto_alumno',
        'edad_alumno',
        'telefono_alumno',
        'nombre_padre_alumno',
        'nombre_madre_alumno'
    ];
    //Variables que arian referencia a campos de la tabla que no queremos que sean reguistrados.
    protected $guarded = [
        
    ];
}
