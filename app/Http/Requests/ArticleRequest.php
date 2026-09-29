<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required | min:3',
            'price'=>'required',
            'typology'=>'required',
            'body'=>'required',
        ];
    }

    public function messages(){

        return [
            'title.required'=>'Il titolo è obbligatorio',
            'title.min'=> 'Il titolo deve avere almeno 3 caratteri',
            'price.required'=>'Il prezzo è obbligatorio',
            'typology.required'=>'La tipologia è obbligatoria',
            'body.required'=>'Il contenuto è obbligatorio'
        ];
    }
}
