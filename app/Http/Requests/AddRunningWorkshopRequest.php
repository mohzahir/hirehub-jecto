<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRunningWorkshopRequest extends FormRequest
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
            'workshop_id' => 'required|exists:workshops,id',
            'price_sdg' => 'required|numeric',
            'price_dollar' => 'required|numeric',
            'start_date' => 'required|date',
            'finish_date' => 'required|date',
            'lecture_hours' => 'required|numeric',
            'total_hours' => 'required|numeric',
            'location' => 'required|string',
        ];
    }
}
