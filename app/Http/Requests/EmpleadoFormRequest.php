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
            'Id',//=>'required',
            'CI'=>'required',
			'Nombre'=>'required',
            'Direccion'=>'required',
            'Correo'=>'required',
            'Sexo'=>'required',
            'Profesion'=>'required',
            'IdCargo'=>'required',
            'IdInformPrivada'=>'required',
            'CodigoDpto'=>'required',
            'CodigoJefeDpto'=>'required'
            
        ];
    }
}
