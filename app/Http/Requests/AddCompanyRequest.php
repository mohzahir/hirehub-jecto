<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCompanyRequest extends FormRequest
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
            'name' => 'required|min:3|string',
            'name_ar' => 'required|min:3|string',
            'status' => 'nullable',
            'logo' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
        ];
    }
}
