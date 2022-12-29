<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveWorkSectionRequest extends FormRequest
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
            'work_section_top_header' => 'required|string',
            'work_section_top_header_ru' => 'required|string',
            'work_section_step_1_header' => 'required|string',
            'work_section_step_1_header_ru' => 'required|string',
            'work_section_step_1_desc' => 'required|string',
            'work_section_step_1_desc_ru' => 'required|string',
            'work_section_step_2_header' => 'required|string',
            'work_section_step_2_header_ru' => 'required|string',
            'work_section_step_2_desc' => 'required|string',
            'work_section_step_2_desc_ru' => 'required|string',
            'work_section_step_3_header' => 'required|string',
            'work_section_step_3_header_ru' => 'required|string',
            'work_section_step_3_desc' => 'required|string',
            'work_section_step_3_desc_ru' => 'required|string',
            'work_section_step_4_header' => 'required|string',
            'work_section_step_4_header_ru' => 'required|string',
            'work_section_step_4_desc' => 'required|string',
            'work_section_step_4_desc_ru' => 'required|string',
        ];
    }
}
