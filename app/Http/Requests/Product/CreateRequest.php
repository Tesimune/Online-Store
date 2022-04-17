<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:5'],
            'category_id' => ['required', 'string'],
            'cost_price' => ['required', 'integer', 'min:5'],
            'price' => ['required', 'integer', 'min:5'],
            'quantity' => ['required', 'integer', 'min:5'],
            'discount' => ['required', 'integer'],
            'thumbnail' => ['required', 'image:jpg,png,jpeg', 'max:5120'],
            'description' => ['required', 'string', 'min:10'],
        ];
    }
}
