<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveQuestionsSectionRequest extends FormRequest
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
            'questions_section_header' => 'required|string',
            'questions_section_header_ru' => 'required|string',
            'questions_section_desc' => 'required|string',
            'questions_section_desc_ru' => 'required|string',
            'questions_section_phone' => 'required|string',
            'questions_section_phone_ru' => 'required|string',
        ];
    }
}
