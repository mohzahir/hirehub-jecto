<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSettingRequest extends FormRequest
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
            'phone1'  => 'required',
            'email1'  => 'required',
            'address1'  => 'required',
            'address1_ar'  => 'required',
            'phone2'  => 'required',
            'email2'  => 'required',
            'address2'  => 'required',
            'address2_ar'  => 'required',
            'phone3'  => 'required',
            'email3'  => 'required',
            'address3'  => 'required',
            'address3_ar'  => 'required',
            'opining_week_day'  => 'required',
            'closing_week_day'  => 'required',
            'opining_hour'  => 'required',
            'closing_hour'  => 'required',
            'feature1_title'  => 'required',
            'feature1_descr'  => 'required',
            'feature2_title'  => 'required',
            'feature2_descr'  => 'required',
            'feature3_title'  => 'required',
            'feature3_descr'  => 'required',
            'feature4_title'  => 'required',
            'feature4_descr'  => 'required',
            'feature5_title'  => 'required',
            'feature5_descr'  => 'required',
            'feature6_title'  => 'required',
            'feature6_descr'  => 'required',
            'feature1_title_ar'  => 'required',
            'feature1_descr_ar'  => 'required',
            'feature2_title_ar'  => 'required',
            'feature2_descr_ar'  => 'required',
            'feature3_title_ar'  => 'required',
            'feature3_descr_ar'  => 'required',
            'feature4_title_ar'  => 'required',
            'feature4_descr_ar'  => 'required',
            'feature5_title_ar'  => 'required',
            'feature5_descr_ar'  => 'required',
            'feature6_title_ar'  => 'required',
            'feature6_descr'  => 'required',
            'ceo_video_link' => 'required',
            'logo1' => 'nullable|dimensions:115,30',
            'logo2' => 'nullable|dimensions:115,30',
            'facebook_link' => 'nullable',
            'twitter_link' => 'nullable',
            'linkedin_link' => 'nullable',
            'youtube_link' => 'nullable',
            'instagram_link' => 'nullable',
            'google_map_link' => 'required',
        ];
    }
}
