<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormExampleRequest extends FormRequest
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
            'food_name' => 'required|min:6',
            'food_description' => 'required|min:6',
            'food_type' => 'required|min:6',
            'food_cooker' => 'required|min:6',
            'food_price' => 'required|numeric|min:4',
            'food_rating' => 'required|min:6',
            'food_status' => 'required|min:6',
            'food_picture_url' => 'required',
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        $messages = [
            'food_name.required' => 'Tên món ăn không được để trống.',
            'food_name.min' => 'Ten mon an phai co it nhat 6 ki tu',
            'food_description.required' => 'Mô tả không được để trống.',


        ];
        return $messages;
    }
}
