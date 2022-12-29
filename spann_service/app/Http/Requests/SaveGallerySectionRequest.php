<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveGallerySectionRequest extends FormRequest
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
            'gallery_section_header' => 'required|string',
            'gallery_section_header_ru' => 'required|string',
            'gallery_section_zoom_btn' => 'required|string',
            'gallery_section_zoom_btn_ru' => 'required|string',
            'gallery_item_black_btn' => 'required|string',
            'gallery_item_black_btn_ru' => 'required|string',
            'gallery_item_price_from_text' => 'required|string',
            'gallery_item_price_from_text_ru' => 'required|string',
            'gallery_item_price_currency' => 'required|string',
            'gallery_item_price_currency_ru' => 'required|string',
        ];
    }
}
