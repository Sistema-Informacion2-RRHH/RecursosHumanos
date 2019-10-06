<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReclutamientoFormRequest extends FormRequest
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
            'NombrePuesto'=>'min:4|max:15|required',
            'DescripcionPuesto'=>'min:10|max:50|required',
            'LugarTrabajo'=>'min:10|max:50|required',
            'NroEmpleadosEsperados'=>'min:1|max:3|required'
        ];
    }
}
