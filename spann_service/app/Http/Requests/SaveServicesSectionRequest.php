<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveServicesSectionRequest extends FormRequest
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
            'services_section_header' => 'required|string',
            'services_section_header_ru' => 'required|string',
            'services_section_red_btn' => 'required|string',
            'services_section_red_btn_ru' => 'required|string',
        ];
    }
}
