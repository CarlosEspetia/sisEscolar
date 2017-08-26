<?php

namespace sisEscolar;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table = 'escuelas'; //Variable que refiere a la tabla de la BD.
    protected $primaryKey = 'id_escuela'; //Variable que refiere al id de la tabla.
    public $timestamps = false; //Desactivamos las columnas de creacion y actualizacion.
    //Variables que efieren a campos que se pueden ingresar en la tabla.
    protected $fillable = [
        'nombre_escuela',
        'direcion_escuela',
        'tipo_escuela'
    ];
    //Variables que arian referencia a campos de la tabla que no queremos que sean reguistrados.
    protected $guarded = [

    ];

}
