<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddJobPostRequest extends FormRequest
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
            'job_id' => 'required|exists:jobs,id',
            'city_id' => 'required|exists:cities,id',
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'short_descr' => 'required|min:3|string',
            'short_descr_ar' => 'required|min:3|string',
            'descr' => 'required|min:10|string',
            'descr_ar' => 'required|min:10|string',
            'salary_from' => 'nullable|numeric',
            'salary_to' => 'nullable|numeric',
            'currency' => 'required_if:salary_from,true|in:dollar,SAR,SDG,KWD,AED,EGP,QAR',
            'experience' => 'nullable|numeric',
            'duration' => 'nullable|string',
            'job_type' => 'required|in:fulltime,remote,parttime,temporary,internship,freelancer',
            'is_featured' => 'nullable|in:0,1',
            'status' => 'nullable',
        ];
    }
}
