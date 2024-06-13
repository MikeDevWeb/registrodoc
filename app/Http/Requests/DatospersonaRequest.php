<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatospersonaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'fecharegistro' => 'required|date',
			'nombre' => 'required|string',
			'apellidoPaterno' => 'required|string',
			'apellidoMaterno' => 'required|string',
			'profesion' => 'required|string',
			'fechaNacimiento' => 'required|date',
			'lugarNacimiento' => 'required',
			'edad' => 'required|string',
			'estadoCivil' => 'required',
			'sexo' => 'required',
			'carnetidentidad' => 'required|string',
			'ciexpedido' => 'nullable|string',
			'user_id' => 'required',
        ];
    }
}
