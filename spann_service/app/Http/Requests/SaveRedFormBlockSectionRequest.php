<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveRedFormBlockSectionRequest extends FormRequest
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
            'red_form_block_section_header' => 'required|string',
            'red_form_block_section_header_ru' => 'required|string',
            'red_form_block_section_desc' => 'required|string',
            'red_form_block_section_desc_ru' => 'required|string',
            'red_form_block_section_phone' => 'required|string',
            'red_form_block_section_phone_ru' => 'required|string',
        ];
    }
}
