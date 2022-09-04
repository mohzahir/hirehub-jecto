<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCVSampleRequest extends FormRequest
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
        if (request()->isMethod('patch')) {
            // edit
            return [
                'cv_category_id' => 'required|exists:categories,id',
                'title' => 'required|min:3|string',
                'title_ar' => 'required|min:3|string',
                'photo' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
                'pdf' => 'nullable|mimes:pdf',
            ];
        } else {
            //add
            return [
                'cv_category_id' => 'required|exists:categories,id',
                'title' => 'required|min:3|string',
                'title_ar' => 'required|min:3|string',
                'photo' => 'required|mimes:jpg,png,jpeg,gif,svg',
                'pdf' => 'nullable|mimes:pdf',
            ];
        }
    }
}
