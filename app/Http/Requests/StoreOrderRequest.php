<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'telephone'=>'required|string|max:20',
            'address'=>'required|string|max:150',
            'email'=>'required|string',
            'total_price'=>'required|decimal:2|min:0',
            'products'=>'required'
        ];
    }
}
