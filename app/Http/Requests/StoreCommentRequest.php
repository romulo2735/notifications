<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            /* O exits garante que o comentário exista para aquele Post, para que o User não burle o sistema */
            'post_id' => 'required|exists:posts,id',
            'title' => 'required|min:3|max:100',
            'body' => 'required|min:3|max:1000',
        ];
    }

    public function messages(){

        return [
            'title.required' => 'O Titulo é obrigatório',
            'body.required' => 'A Descrição é obrigatório',
        ];
    }
}
