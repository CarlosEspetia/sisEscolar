<?php

namespace sisEscolar;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';           //Variable que refiere a la tabla de la db.
    protected $prymaryKey = 'id_alumno';    //valriable que refiere al id de la tabla.
    public $timestamps = false;             //Columnos de creacion y modificacion.

    //Campos que se pueden insertar en la tabla.
    protected $fillable = [
        
    ];
}
