<?php

namespace sisEscolar;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $table = 'tarifas';
    protected $primaryKey = 'id_tarifa';
    public $timestamps = false;

    protected $fillable = ['concepto', 'monto'];
    protected $guarded =[];
}
