<?php

namespace App\Http\Requests\Dashboard\News;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'name'=>'required|string',
            'body'=>'required|string',
            'link'=>'required|url',
            'image'=>'sometimes|image|max:5000',
        ];
    }
}
