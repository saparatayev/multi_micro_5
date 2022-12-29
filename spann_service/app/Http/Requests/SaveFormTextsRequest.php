<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveFormTextsRequest extends FormRequest
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
            'form_name' => 'required|string',
            'form_name_ru' => 'required|string',
            'form_phone' => 'required|string',
            'form_phone_ru' => 'required|string',
            'form_success_message' => 'required|string',
            'form_success_message_ru' => 'required|string',
            'form_error_message' => 'required|string',
            'form_error_message_ru' => 'required|string',
            'form_main_slider_calculate_cost_text' => 'required|string',
            'form_main_slider_calculate_cost_text_ru' => 'required|string',
            'form_main_slider_learn_how_text' => 'required|string',
            'form_main_slider_learn_how_text_ru' => 'required|string',
            'form_main_slider_discount_text' => 'required|string',
            'form_main_slider_discount_text_ru' => 'required|string',
            'form_main_slider_btn' => 'required|string',
            'form_main_slider_btn_ru' => 'required|string',
            'form_modal_total_cost_text' => 'required|string',
            'form_modal_total_cost_text_ru' => 'required|string',
            'form_modal_write_us_text' => 'required|string',
            'form_modal_write_us_text_ru' => 'required|string',
            'form_modal_mobile_text' => 'required|string',
            'form_modal_mobile_text_ru' => 'required|string',
            'form_modal_btn' => 'required|string',
            'form_modal_btn_ru' => 'required|string',
            'form_middle_red_section_btn' => 'required|string',
            'form_middle_red_section_btn_ru' => 'required|string',
            'form_bottom_red_section_btn' => 'required|string',
            'form_bottom_red_section_btn_ru' => 'required|string',
            'form_above_contacts_section_btn' => 'required|string',
            'form_above_contacts_section_btn_ru' => 'required|string',
        ];
    }
}
