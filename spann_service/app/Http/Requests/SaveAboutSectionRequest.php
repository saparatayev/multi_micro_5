<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveAboutSectionRequest extends FormRequest
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
            'about_section_experience_title' => 'required|string',
            'about_section_experience_title_ru' => 'required|string',
            'about_section_experience_desc' => 'required|string',
            'about_section_experience_desc_ru' => 'required|string',
            'about_section_customers_number_title' => 'required|string',
            'about_section_customers_number_title_ru' => 'required|string',
            'about_section_plan_title' => 'required|string',
            'about_section_plan_title_ru' => 'required|string',
            'about_section_post_pay_title' => 'required|string',
            'about_section_post_pay_title_ru' => 'required|string',
            'about_section_customers_number_desc' => 'required|string',
            'about_section_customers_number_desc_ru' => 'required|string',
            'about_section_plan_desc' => 'required|string',
            'about_section_plan_desc_ru' => 'required|string',
            'about_section_post_pay_desc' => 'required|string',
            'about_section_post_pay_desc_ru' => 'required|string',
        ];
    }
}
