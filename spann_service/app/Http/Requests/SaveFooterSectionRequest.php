<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveFooterSectionRequest extends FormRequest
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
            'vk_link' => 'required|string',
            'facebook_link' => 'required|string',
            'ok_link' => 'required|string',
            'insta_link' => 'required|string',
            'youtube_link' => 'required|string',
            'footer_modal_btn' => 'required|string',
            'footer_modal_btn_ru' => 'required|string',
        ];
    }
}
