<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformacionPrivadaRequest extends FormRequest
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
            'Nacionalidad'=>'required',
            'EstadoCivil'=>'required',
            'NroHijos'=>'required',
            'Ciudad'=>'required',
            'FechaNacimiento'=>'required',
            'NroCuentaBancaria'=>'required',
            'NombreContactoEmergencia'=>'required',
            'NroContactoEmergencia'=>'required',
            'Pasaporte'=>'required',
            
        ];
    }
}
