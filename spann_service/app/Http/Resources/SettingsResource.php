<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            // Contacts
            'contact_title' => $this->contactTitle(),
            'contact_title_ru' => $this->contactTitleRu(),
            'contact_description' => $this->contactDescription(),
            'contact_description_ru' => $this->contactDescriptionRu(),
            'contact_address' => $this->contactAddress(),
            'contact_address_ru' => $this->contactAddressRu(),
            'contact_phone_1' => $this->contactPhone1(),
            'contact_phone_2' => $this->contactPhone2(),
            'contact_schedule' => $this->contactSchedule(),
            'contact_schedule_ru' => $this->contactScheduleRu(),
            'map_image_url' => $this->imageUrl('data->map_image'),

            // Menu
            'menu_item_home' => $this->menuItemHome(),
            'menu_item_home_ru' => $this->menuItemHomeRu(),
            'menu_item_services' => $this->menuItemServices(),
            'menu_item_services_ru' => $this->menuItemServicesRu(),
            'menu_item_gallery' => $this->menuItemGallery(),
            'menu_item_gallery_ru' => $this->menuItemGalleryRu(),
            'menu_item_contacts' => $this->menuItemContacts(),
            'menu_item_contacts_ru' => $this->menuItemContactsRu(),

            // Header
            'big_header_title' => $this->bigHeaderTitle(),
            'big_header_title_ru' => $this->bigHeaderTitleRu(),
            'header_schedule' => $this->headerSchedule(),
            'header_schedule_ru' => $this->headerScheduleRu(),
            'big_red_header_btn' => $this->bigRedHeaderBtn(),
            'big_red_header_btn_ru' => $this->bigRedHeaderBtnRu(),

            // Forms
            'form_name' => $this->form_name(),
            'form_name_ru' => $this->form_name_ru(),
            'form_phone' => $this->form_phone(),
            'form_phone_ru' => $this->form_phone_ru(),
            'form_success_message' => $this->form_success_message(),
            'form_success_message_ru' => $this->form_success_message_ru(),
            'form_error_message' => $this->form_error_message(),
            'form_error_message_ru' => $this->form_error_message_ru(),
            'form_main_slider_calculate_cost_text' => $this->form_main_slider_calculate_cost_text(),
            'form_main_slider_calculate_cost_text_ru' => $this->form_main_slider_calculate_cost_text_ru(),
            'form_main_slider_learn_how_text' => $this->form_main_slider_learn_how_text(),
            'form_main_slider_learn_how_text_ru' => $this->form_main_slider_learn_how_text_ru(),
            'form_main_slider_discount_text' => $this->form_main_slider_discount_text(),
            'form_main_slider_discount_text_ru' => $this->form_main_slider_discount_text_ru(),
            'form_main_slider_btn' => $this->form_main_slider_btn(),
            'form_main_slider_btn_ru' => $this->form_main_slider_btn_ru(),
            'form_modal_total_cost_text' => $this->form_modal_total_cost_text(),
            'form_modal_total_cost_text_ru' => $this->form_modal_total_cost_text_ru(),
            'form_modal_write_us_text' => $this->form_modal_write_us_text(),
            'form_modal_write_us_text_ru' => $this->form_modal_write_us_text_ru(),
            'form_modal_mobile_text' => $this->form_modal_mobile_text(),
            'form_modal_mobile_text_ru' => $this->form_modal_mobile_text_ru(),
            'form_modal_btn' => $this->form_modal_btn(),
            'form_modal_btn_ru' => $this->form_modal_btn_ru(),
            'form_middle_red_section_btn' => $this->form_middle_red_section_btn(),
            'form_middle_red_section_btn_ru' => $this->form_middle_red_section_btn_ru(),
            'form_bottom_red_section_btn' => $this->form_bottom_red_section_btn(),
            'form_bottom_red_section_btn_ru' => $this->form_bottom_red_section_btn_ru(),
            'form_above_contacts_section_btn' => $this->form_above_contacts_section_btn(),
            'form_above_contacts_section_btn_ru' => $this->form_above_contacts_section_btn_ru(),

            // About section
            'about_section_experience_title' => $this->about_section_experience_title(),
            'about_section_experience_title_ru' => $this->about_section_experience_title_ru(),
            'about_section_experience_desc' => $this->about_section_experience_desc(),
            'about_section_experience_desc_ru' => $this->about_section_experience_desc_ru(),
            'about_section_customers_number_title' => $this->about_section_customers_number_title(),
            'about_section_customers_number_title_ru' => $this->about_section_customers_number_title_ru(),
            'about_section_plan_title' => $this->about_section_plan_title(),
            'about_section_plan_title_ru' => $this->about_section_plan_title_ru(),
            'about_section_post_pay_title' => $this->about_section_post_pay_title(),
            'about_section_post_pay_title_ru' => $this->about_section_post_pay_title_ru(),
            'about_section_customers_number_desc' => $this->about_section_customers_number_desc(),
            'about_section_customers_number_desc_ru' => $this->about_section_customers_number_desc_ru(),
            'about_section_plan_desc' => $this->about_section_plan_desc(),
            'about_section_plan_desc_ru' => $this->about_section_plan_desc_ru(),
            'about_section_post_pay_desc' => $this->about_section_post_pay_desc(),
            'about_section_post_pay_desc_ru' => $this->about_section_post_pay_desc_ru(),

            // Services section
            'services_section_header' => $this->services_section_header(),
            'services_section_header_ru' => $this->services_section_header_ru(),
            'services_section_red_btn' => $this->services_section_red_btn(),
            'services_section_red_btn_ru' => $this->services_section_red_btn_ru(),

            // Red Form Block section
            'red_form_block_section_header' => $this->red_form_block_section_header(),
            'red_form_block_section_header_ru' => $this->red_form_block_section_header_ru(),
            'red_form_block_section_desc' => $this->red_form_block_section_desc(),
            'red_form_block_section_desc_ru' => $this->red_form_block_section_desc_ru(),
            'red_form_block_section_phone' => $this->red_form_block_section_phone(),
            'red_form_block_section_phone_ru' => $this->red_form_block_section_phone_ru(),

            // Gallery section
            'gallery_section_header' => $this->gallery_section_header(),
            'gallery_section_header_ru' => $this->gallery_section_header_ru(),
            'gallery_section_zoom_btn' => $this->gallery_section_zoom_btn(),
            'gallery_section_zoom_btn_ru' => $this->gallery_section_zoom_btn_ru(),
            'gallery_item_black_btn' => $this->gallery_item_black_btn(),
            'gallery_item_black_btn_ru' => $this->gallery_item_black_btn_ru(),
            'gallery_item_price_from_text' => $this->gallery_item_price_from_text(),
            'gallery_item_price_from_text_ru' => $this->gallery_item_price_from_text_ru(),
            'gallery_item_price_currency' => $this->gallery_item_price_currency(),
            'gallery_item_price_currency_ru' => $this->gallery_item_price_currency_ru(),

            // Advantages section
            'advantages_section_warranty_header' => $this->advantages_section_warranty_header(),
            'advantages_section_warranty_header_ru' => $this->advantages_section_warranty_header_ru(),
            'advantages_section_warranty_desc' => $this->advantages_section_warranty_desc(),
            'advantages_section_warranty_desc_ru' => $this->advantages_section_warranty_desc_ru(),
            'advantages_section_qual_specs_header' => $this->advantages_section_qual_specs_header(),
            'advantages_section_qual_specs_header_ru' => $this->advantages_section_qual_specs_header_ru(),
            'advantages_section_qual_specs_desc' => $this->advantages_section_qual_specs_desc(),
            'advantages_section_qual_specs_desc_ru' => $this->advantages_section_qual_specs_desc_ru(),
            'advantages_section_high_service_header' => $this->advantages_section_high_service_header(),
            'advantages_section_high_service_header_ru' => $this->advantages_section_high_service_header_ru(),
            'advantages_section_high_service_desc' => $this->advantages_section_high_service_desc(),
            'advantages_section_high_service_desc_ru' => $this->advantages_section_high_service_desc_ru(),
            'advantages_section_avail_prices_header' => $this->advantages_section_avail_prices_header(),
            'advantages_section_avail_prices_header_ru' => $this->advantages_section_avail_prices_header_ru(),
            'advantages_section_avail_prices_desc' => $this->advantages_section_avail_prices_desc(),
            'advantages_section_avail_prices_desc_ru' => $this->advantages_section_avail_prices_desc_ru(),

            // Work section
            'work_section_top_header' => $this->work_section_top_header(),
            'work_section_top_header_ru' => $this->work_section_top_header_ru(),

            'work_section_step_1_header' => $this->work_section_step_1_header(),
            'work_section_step_1_header_ru' => $this->work_section_step_1_header_ru(),
            'work_section_step_1_desc' => $this->work_section_step_1_desc(),
            'work_section_step_1_desc_ru' => $this->work_section_step_1_desc_ru(),
            'work_section_step_2_header' => $this->work_section_step_2_header(),
            'work_section_step_2_header_ru' => $this->work_section_step_2_header_ru(),
            'work_section_step_2_desc' => $this->work_section_step_2_desc(),
            'work_section_step_2_desc_ru' => $this->work_section_step_2_desc_ru(),
            'work_section_step_3_header' => $this->work_section_step_3_header(),
            'work_section_step_3_header_ru' => $this->work_section_step_3_header_ru(),
            'work_section_step_3_desc' => $this->work_section_step_3_desc(),
            'work_section_step_3_desc_ru' => $this->work_section_step_3_desc_ru(),
            'work_section_step_4_header' => $this->work_section_step_4_header(),
            'work_section_step_4_header_ru' => $this->work_section_step_4_header_ru(),
            'work_section_step_4_desc' => $this->work_section_step_4_desc(),
            'work_section_step_4_desc_ru' => $this->work_section_step_4_desc_ru(),

            // Feedback section
            'feedback_section_header' => $this->feedback_section_header(),
            'feedback_section_header_ru' => $this->feedback_section_header_ru(),

            // Partners section
            'partners_section_header' => $this->partners_section_header(),
            'partners_section_header_ru' => $this->partners_section_header_ru(),

            // Questions section
            'questions_section_header' => $this->questions_section_header(),
            'questions_section_header_ru' => $this->questions_section_header_ru(),
            'questions_section_desc' => $this->questions_section_desc(),
            'questions_section_desc_ru' => $this->questions_section_desc_ru(),
            'questions_section_phone' => $this->questions_section_phone(),
            'questions_section_phone_ru' => $this->questions_section_phone_ru(),

            // Footer section
            'vk_link' => $this->vk_link(),
            'facebook_link' => $this->facebook_link(),
            'ok_link' => $this->ok_link(),
            'insta_link' => $this->insta_link(),
            'youtube_link' => $this->youtube_link(),
            'footer_modal_btn' => $this->footer_modal_btn(),
            'footer_modal_btn_ru' => $this->footer_modal_btn_ru(),

            // Admin Contacts
            'admin_email' => $this->admin_email(),
        ];
    }
}
