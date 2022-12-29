<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveHeaderRequest extends FormRequest
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
            'big_header_title' => 'required|string',
            'big_header_title_ru' => 'required|string',
            'header_schedule' => 'required|string',
            'header_schedule_ru' => 'required|string',
            'big_red_header_btn' => 'required|string',
            'big_red_header_btn_ru' => 'required|string',
        ];
    }
}
