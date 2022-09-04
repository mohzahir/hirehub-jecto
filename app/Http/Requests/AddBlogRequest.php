<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
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
                'category_id' => 'required|exists:categories,id',
                'title' => 'required|min:3|string',
                'title_ar' => 'required|min:3|string',
                'keywords' => 'nullable|string',
                'content' => 'required|min:10|string',
                'content_ar' => 'required|min:10|string',
                'is_featured' => 'nullable|in:0,1',
                'status' => 'nullable',
                'photo' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
            ];
        } else {
            //add
            return [
                'category_id' => 'required|exists:categories,id',
                'title' => 'required|min:3|string',
                'title_ar' => 'required|min:3|string',
                'keywords' => 'nullable|string',
                'content' => 'required|min:10|string',
                'content_ar' => 'required|min:10|string',
                'is_featured' => 'nullable|in:0,1',
                'status' => 'nullable',
                'photo' => 'required|mimes:jpg,png,jpeg,gif,svg',
            ];
        }
    }
}
