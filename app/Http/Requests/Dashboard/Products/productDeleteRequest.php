<?php

namespace App\Http\Requests\Dashboard\products;

use Illuminate\Foundation\Http\FormRequest;

class productDeleteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id'=>'required|exists:products,id',
        ];
    }
}
