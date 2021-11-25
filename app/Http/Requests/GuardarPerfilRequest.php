<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarPerfilRequest extends FormRequest
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
            "nro_doc" => "required|unique:perfil,nro_doc",
            "nombres" => "required",
            "ap_paterno" => "required",
            "ap_materno" => "required",
            "direccion" => "required",
            "celular" => "required",
            "correo" => "required",
            "fecha_nacimiento" => "required",
        ];
    }
}
