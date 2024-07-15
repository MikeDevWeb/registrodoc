<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormcursoRequest extends FormRequest
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
			'institucion' => 'required|string',
			'tipo' => 'required',
			'nombreevento' => 'required|string',
			'fechainicio' => 'required|date',
			'fechafin' => 'required|date',
            'fecharegistro' => 'required|date',
			'duracion' => 'required|string',
			'datospersona_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
