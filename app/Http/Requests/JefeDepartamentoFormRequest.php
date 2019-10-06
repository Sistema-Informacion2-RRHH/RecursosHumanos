<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JefeDepartamentoFormRequest extends FormRequest
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
            'CorreoElectronico'=>'min:5|max:25|required',
            'Descripcion'=>'min:5|max:50|required'
        ];
    }
}
