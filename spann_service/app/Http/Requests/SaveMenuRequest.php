<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveMenuRequest extends FormRequest
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
            'menu_item_home' => 'required|string',
            'menu_item_home_ru' => 'required|string',
            'menu_item_services' => 'required|string',
            'menu_item_services_ru' => 'required|string',
            'menu_item_gallery' => 'required|string',
            'menu_item_gallery_ru' => 'required|string',
            'menu_item_contacts' => 'required|string',
            'menu_item_contacts_ru' => 'required|string',
        ];
    }
}
