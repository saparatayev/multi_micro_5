<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePartnersSectionRequest extends FormRequest
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
            'partners_section_header' => 'required|string',
            'partners_section_header_ru' => 'required|string',
            ];
    }
}
