<?php

namespace sisEscolar\Http\Requests;

use sisEscolar\Http\Requests\Request;

class AlumnoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'escuela_alumno'=>'required',
            'nombre_alumno'=>'required|max:100',
            'apellido_alumno'=>'required|max:100',
            'direcion_alumno'=>'required|max:100',
            'telefono_emergencia_alumno'=>'required|max:11',
            'autorizados_alumno'=>'max:100',
            'observaciones_alumno'=>'max:100',
            'foto_alumno'=>'mimes:jpeg,bmp,png',
            'edad_alumno'=>'required|max:11',
            'telefono_alumno'=>'required|max:11',
            'nombre_padre_alumno'=>'required|max:100',
            'nombre_madre_alumno'=>'required|max:100'        
        ];
    }
}
