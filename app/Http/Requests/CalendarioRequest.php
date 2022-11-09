<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalendarioRequest extends FormRequest
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
        'titulo_evento' => 'nullable|string|max:45',
        'categoria' => 'nullable|string|max:1',
        'data_inicio' => 'date',
        'data_termino' => 'nullable|datetime',
        'dia_todo' => 'nullable|Boolean',
        'descricao' => 'nullable|Text',
        'link' => 'nullable|string|max:255'
        ];
    }
}
