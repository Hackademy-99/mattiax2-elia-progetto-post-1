<?php

namespace App\Http\Requests;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|unique:articles|min:5',
        'subtitle'=>'required|unique:articles|min:5',
        'body'=>'required|min:10',
        'img'=>'image|required',
        'category'=>'required',
        ];
    }

    public function massages(): array
    {
        return [
            'title.required' => 'Inserire il titolo',
            'subtitle.required' => 'Inserire il sottotitolo',
            'body.required' => 'Inserire il corpo del tuo messaggio',
            'img.image'=> 'Inserire immagine',
            'category.required' => 'Inserire una categoria',
        ];
    }
}
