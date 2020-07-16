<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:25',
            'description' => 'nullable|min:3|max:25',
            'photo' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório',
            'name.min' => 'Nome tem que ter no mínimo 3 caracteres',
            'name.max' => 'Nome tem que ter no máximo 25 caracteres',
            'description.min' => 'Descrição tem que ter no mínimo 3 caracteres',
            'description.max' => 'Descrição tem que ter no máximo 25 caracteres',
            'photo.required' => 'É necessário escolher um arquivo',
            'photo.image' => 'O arquivo precisa ser uma imagem',
        ];
    }
}
