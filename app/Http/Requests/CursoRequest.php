<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
            'foto_curso'=> 'required|image',
            'nome' => 'required|string|max:45',
            'carga_horaria' => 'required|string|max:20', 
            'preco' => 'required|regex:/^-?[0-9]+(?:\.[0-9]{1,3})?$/',
            'nivel' => 'required|tinyInteger',
            'prerequisitos' => 'required|tinyInteger',
            'description' => 'required|text',
            'status' => 'required|tinyInteger',
        ];
    }
}
