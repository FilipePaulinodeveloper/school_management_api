<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GastoRequest extends FormRequest
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
            'nome_gasto' => 'required|string|max:45',
            'valor' => 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,3})?$/',
            'data_vencimento' => 'required|date',
            'data_pagamento' => 'nullable|date',
            'ano' => 'required|date_format: Y'
        ];
    }
}
