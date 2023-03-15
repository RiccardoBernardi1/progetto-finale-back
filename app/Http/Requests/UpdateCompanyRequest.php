<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'company_name'=>'required|string|max:255',
            'telephone'=>'required|string|max:20',
            'p_iva'=>'required|string|max:100',
            'address'=>'required|string|max:150',
            'opening_hours'=>'required|string|max:50',
            'image'=>'nullable|image|max:2048',
            'minimum_order'=>'required|decimal:2|min:0',
            'typologies'=>'required|exists:typologies,id'
        ];
    }
}
