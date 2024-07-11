<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatospersonbRequest extends FormRequest
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
			'idiomaNativo' => 'required',
			'nivelidiomaescritura' => 'required',
			'nivelidiomalectura' => 'required',
			'nivelidiomahabla' => 'required',
			'idiomaSecundario' => 'required',
			'nivelidiomaSecundarioescritura' => 'required',
			'nivelidiomaSecundariolectura' => 'required',
			'nivelidiomaSecundariohabla' => 'required',
            'fecharegistro' => 'required',
			'datospersona_id' => 'required',
			'user_id' => 'required',
        ];
    }
}
