<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TutortribunalRequest extends FormRequest
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
			'pregradopostgrado' => 'required',
			'nivelprograma' => 'required|string',
			'tutorevalutribu' => 'required',
			'tituloinvestigacion' => 'required|string',
			'datospersona_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
