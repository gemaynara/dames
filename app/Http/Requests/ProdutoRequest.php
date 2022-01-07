<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'categoria_id'=>'required',
            'marca_id'=>'required',
            'codigo'=>'required|string',
            'nome'=>'required|max:50',
            'descricao'=>'nullable|max:500',
            'detalhes'=>'nullable|max:800',
            'valor'=>'required',
            'estoque'=>'required|integer',
            'valor_desconto'=>'nullable',
            'peso'=>'required',
            'altura'=>'required',
            'largura'=>'required',
            'comprimento'=>'required',
        ];
    }
}
