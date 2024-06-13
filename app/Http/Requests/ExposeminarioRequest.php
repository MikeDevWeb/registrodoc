<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExposeminarioRequest extends FormRequest
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
			'tipoevento' => 'required',
			'tematica' => 'required|string',
			'fechainicio' => 'required',
			'fechafin' => 'required',
			'duracion' => 'required|string',
			'datospersona_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
