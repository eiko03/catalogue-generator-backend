<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|string|min:1|max:255',
            'description'=>'required|string|min:1|max:1024',
            'unit_price'=>'required|numeric|min:0',
            'image'=>'sometimes',
        ];
    }
}
