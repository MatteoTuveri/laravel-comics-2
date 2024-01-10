<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:255|unique:comics',
            'price' => 'required|max:30',
            'sale_date' => 'required',
            'series' => 'required|max:100',
            'type' => 'required',
        ];
    }

    public function messages(){
        return [
            'title.required'=>'il campo titolo è obbligatorio',
            'title.min'=>'il campo titolo deve avere almeno :min caratteri',
            'title.max'=>'il campo titolo deve avere massimo :max caratteri',
            'price.required'=>'il campo prezzo è obbligatorio',
            'price.max'=>'il campo prezzo deve avere massimo :max caratteri',
            'sale_date.required'=>'il campo data è obbligatorio',
            'series.required'=>'il campo serie è obbligatorio',
            'series.max'=>'il campo serie deve avere massimo :max caratteri',
            'type.required'=>'il campo tipo è obbligatorio',
        ];
    }
}
