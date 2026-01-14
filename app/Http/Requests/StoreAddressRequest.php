<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [
            'cep'         => 'required|string|size:8',
            'logradouro'  => 'required|string|max:255',
            'numero'      => 'required|string|max:20',
            'complemento' => 'nullable|string|max:255',
            'bairro'      => 'required|string|max:255',
            'cidade'      => 'required|string|max:255',
            'uf'          => 'required|string|size:2',
            'referencia'  => 'nullable|string|max:255',
        ];
    }

}
