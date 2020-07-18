<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool'
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
        
        $id = $this->segment(2);
        
        return [
            'name' => "required|min:3|max:25|unique:products,name,{$id},id",
            'description' => 'required|min:3|max:25',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório',
            'name.unique' => 'Nome já existe',
            'name.min' => 'Nome tem que ter no mínimo 3 caracteres',
            'name.max' => 'Nome tem que ter no máximo 25 caracteres',
            'description.required' => 'A descrição é obrigatória',
            'description.min' => 'Descrição tem que ter no mínimo 3 caracteres',
            'description.max' => 'Descrição tem que ter no máximo 25 caracteres',
            'price.required' => 'O preço é obrigatório',
            'image.image' => 'O arquivo precisa ser uma imagem',
        ];
    }
}
