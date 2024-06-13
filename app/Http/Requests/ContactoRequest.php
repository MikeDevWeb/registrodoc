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
			'telefonofijo' => 'required|string',
			'celular' => 'required|string',
			'correo' => 'required|string',
			'facebook' => 'required|string',
			'twitter' => 'required|string',
			'linkedin' => 'required|string',
			'instagram' => 'required|string',
			'telegram' => 'required|string',
			'whatsapp' => 'required|string',
			'datospersona_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
