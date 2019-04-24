<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderTableRequest extends FormRequest
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
            'name' => 'required',
            'phone' =>'required|numeric',
            'email' =>'required|unique:users,email',
            'restaurant_branch' =>'required',
            'order_date' => 'required|date|after:today',
            'num_of_customers' =>'required',
            'hour'=>'required',
        ];
    }
}
