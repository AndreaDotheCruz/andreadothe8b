<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarUpdate extends FormRequest
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
            //
            'Matricula' =>  'numeric|required|min:10|max:99999999',
            'Nombre' => 'required|regex:/^[\pL\s\-]+$/u',
            'Direccion'=> 'required|regex:/^[\pL\s\-]+$/u',
            //'Edad'=> 'numeric|required|min:17|max:30',
        ];
    }
}
