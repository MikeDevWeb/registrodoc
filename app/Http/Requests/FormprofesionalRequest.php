<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormprofesionalRequest extends FormRequest
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
			'universidad' => 'required|string',
			'anio' => 'required|string',
			'gradoacademico' => 'required',
			'titulodiploma' => 'required|string',
            'fecharegistro' => 'required|date',
			'datospersona_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
