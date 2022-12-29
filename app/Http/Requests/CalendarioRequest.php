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
        'titulo_evento' => 'required|string|max:45',
        'categoria' => 'required|string|max:1',
        'data_inicio' => 'required|date_format:Y-m-d H:i:s',
        'data_termino' => 'nullable|date',
        'dia_todo' => 'nullable|Boolean',
        'descricao' => 'nullable|string', 
        'link' => 'nullable|string|max:255'
        ];
    }
}
