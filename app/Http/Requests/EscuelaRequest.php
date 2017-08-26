<?php

namespace sisEscolar\Http\Requests;

use sisEscolar\Http\Requests\Request;

class EscuelaRequest extends Request
{
    /**
     * Determina si el usario esta autorizado para hacer el request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * Reglas.
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_escuela' => 'required|max:100',
            'direcion_escuela' => 'required|max:100',
            'tipo_escuela'=>'required|max:1'
        ];
    }
}
