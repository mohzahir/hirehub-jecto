<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddWorkshopRequest extends FormRequest
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
                'description' => 'required|min:10|string',
                'description_ar' => 'required|min:10|string',
                'trainer_name' => 'required|min:3|string',
                'trainer_name_ar' => 'required|min:3|string',
                'trainer_job_title' => 'required|min:3|string',
                'trainer_job_title_ar' => 'required|min:3|string',
                'trainer_descr' => 'required|min:3|string',
                'trainer_descr_ar' => 'required|min:3|string',
                'img' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
            ];
        } else {
            //add
            return [
                'category_id' => 'required|exists:categories,id',
                'title' => 'required|min:3|string',
                'title_ar' => 'required|min:3|string',
                'description' => 'required|min:10|string',
                'description_ar' => 'required|min:10|string',
                'trainer_name' => 'required|min:3|string',
                'trainer_name_ar' => 'required|min:3|string',
                'trainer_job_title' => 'required|min:3|string',
                'trainer_job_title_ar' => 'required|min:3|string',
                'trainer_descr' => 'required|min:3|string',
                'trainer_descr_ar' => 'required|min:3|string',
                'img' => 'required|mimes:jpg,png,jpeg,gif,svg',

            ];
        }
    }
}
