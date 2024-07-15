<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReconocimientoRequest extends FormRequest
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
			'reconocimiento' => 'required|string',
			'institucion' => 'required|string',
			'anio' => 'required|string',
			'actividad' => 'required|string',
            'fecharegistro' => 'required|date',
			'datospersona_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
