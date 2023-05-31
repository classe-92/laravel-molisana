<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'image' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'title.max' => "Il tittolo non deve superare 255 caratteri",
            'title.min' => "Il titolo deve contenere almano 3 caratteri",
            'image.required' => "Devi inserire la url di una immagine",
            'image.max' => "La url dell'immagine deve essere di massimo 255 caratteri",
            'type.required' => 'Il campo è obbligatorio',
            'type.max' => 'Lunghezza massima 25 caratteri',
            'cooking_time.required' => 'Il campo è obbligatorio',
            'cooking_time.max' => 'Lunghezza massima 25 caratteri',
            'weight.required' => 'Il campo è obbligatorio',
            'weight.max' => 'Lunghezza massima 25 caratteri',
            'description.required' => 'Il campo è obbligatorio'

        ];
    }
}