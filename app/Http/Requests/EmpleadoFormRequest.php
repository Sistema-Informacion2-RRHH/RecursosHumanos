<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoFormRequest extends FormRequest
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
            'id'=>'required',
            'CI'=>'required',
			'Nombre'=>'required',
            'Direccion'=>'required',
            'Email'=>'required',
            'Sexo'=>'required',
            'Telefono_tra'=>'required',
            'movil_tra'=>'required',
            'Profesion'=>'required',
            'IdCargo'=>'required',
            'CodDepartamento'=>'required'
            
        ];
    }
}
