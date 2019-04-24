<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodsRequest extends FormRequest
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
            'food_name' => 'required',
            'food_type' => 'required',
            'food_description' => 'required',
            'food_price' => 'required|min:1',

        ];
    }
    public function messages()
    {
        return [
            'food_name.required' => 'Field name can not blank!',
            'food_type.required' => 'Field type can not blank!',
            'food_description.required' => 'Field description can not blank!',
            'food_price.required' => 'Field price can not blank!',
        ];
    }
}
