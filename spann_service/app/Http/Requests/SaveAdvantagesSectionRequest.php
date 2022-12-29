<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveAdvantagesSectionRequest extends FormRequest
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
            'advantages_section_warranty_header' => 'required|string',
            'advantages_section_warranty_header_ru' => 'required|string',
            'advantages_section_warranty_desc' => 'required|string',
            'advantages_section_warranty_desc_ru' => 'required|string',
            'advantages_section_qual_specs_header' => 'required|string',
            'advantages_section_qual_specs_header_ru' => 'required|string',
            'advantages_section_qual_specs_desc' => 'required|string',
            'advantages_section_qual_specs_desc_ru' => 'required|string',
            'advantages_section_high_service_header' => 'required|string',
            'advantages_section_high_service_header_ru' => 'required|string',
            'advantages_section_high_service_desc' => 'required|string',
            'advantages_section_high_service_desc_ru' => 'required|string',
            'advantages_section_avail_prices_header' => 'required|string',
            'advantages_section_avail_prices_header_ru' => 'required|string',
            'advantages_section_avail_prices_desc' => 'required|string',
            'advantages_section_avail_prices_desc_ru' => 'required|string',
        ];
    }
}
