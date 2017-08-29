<?php

namespace sisEscolar\Http\Requests;

use sisEscolar\Http\Requests\Request;

class TarifaRequest extends Request
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
            'concepto' => 'required|max:50',
            'monto' => 'required|max:9'
        ];
    }
}
