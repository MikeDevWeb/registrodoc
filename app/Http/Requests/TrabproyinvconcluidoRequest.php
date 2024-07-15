<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrabproyinvconcluidoRequest extends FormRequest
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
			'trabajoproyecto' => 'required',
			'fechainicio' => 'required',
			'fechafin' => 'required',
            'fecharegistro' => 'required|date',
			'duracion' => 'required|string',
			'autor' => 'required|string',
			'coautor' => 'required|string',
			'datospersona_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
