<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
			'ciudadresidencia' => 'required|string',
			'direccion' => 'required|string',
			'telefonofijo' => 'string',
			'celular' => 'required|string',
			'correo' => 'required|string',
			'facebook' => 'required|string',
			'twitter' => 'string',
			'linkedin' => 'string',
			'instagram' => 'string',
			'telegram' => 'string',
			'whatsapp' => 'string',
            'fecharegistro' => 'required|date',
			'datospersona_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
