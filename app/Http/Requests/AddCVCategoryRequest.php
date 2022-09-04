<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCVCategoryRequest extends FormRequest
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
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'cv_price_sdg' => 'required|numeric',
            'cv_price_dollar' => 'required|numeric',
            'features' => 'required|min:10|string',
            'features_ar' => 'required|min:10|string',
            'is_featured' => 'nullable|in:0,1',
            'status' => 'nullable',
        ];
    }
}
