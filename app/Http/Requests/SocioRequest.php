<?php

namespace App\Http\Requests;
use Validator;
use Illuminate\Foundation\Http\FormRequest;

class SocioRequest extends FormRequest
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
          
            'idSocio'=> 'required|size:8|unique:socio',
            'Nombre' => 'required|min:3|max:255',
            'Apellido' => 'required|min:3|max:255',
            'FechaNacimiento' => 'required|size:10',
            'Domicilio' => 'required|min:3|max:255',
            'Localidad' => 'required|min:3|max:255',
            'FechaIngreso' => 'required|size:10',
            'Telefono' => 'required|integer|min:6',

        ];
    }
}
