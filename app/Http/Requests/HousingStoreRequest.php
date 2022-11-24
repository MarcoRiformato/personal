<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HousingStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|max:50',
            'descrizione' => 'required|string|max:250',
            'costo' => 'required|string|max:50',
            'city' => 'required|string|max:100',
            'numero_telefono' => 'required|string|max:30'
        ];
    }
}
/*
            'nome' => ['required', 'max:20'],
            'descrizione' => ['max:100'],
            'costo' => ['required', 'max:10'],
            'city' => ['required', 'max:20'],
            'numero_telefono' => ['required', 'max:15']
*/
