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
            'nome' => 'required|string|max:30',
            'descrizione' => 'required|string|max:50',
            'costo' => 'required|string|max:20',
            'city' => 'required|string|max:40',
            'numero_telefono' => 'required|int|max:15'
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