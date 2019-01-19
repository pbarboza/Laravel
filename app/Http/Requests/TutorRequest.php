<?php

namespace App\Http\Requests;
use Validator;
use Illuminate\Foundation\Http\FormRequest;

class TutorRequest extends FormRequest
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
          
            'idTutor'=> 'required|size:8|unique:tutor',
            'Nombre' => 'required|min:3|max:255',
            'Apellido' => 'required|min:3|max:255',
            'Domicilio' => 'required|min:3|max:255',
            'Localidad' => 'required|min:3|max:255',
            'Telefono' => 'required|min:6|',
            'Celular' => 'required|min:6',

        ];
    }
}
