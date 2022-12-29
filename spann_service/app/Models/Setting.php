<?php

namespace App\Models;

use App\Contracts\ImageableContract;
use App\Traits\Imageable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class Setting extends Model implements ImageableContract
{
    use HasFactory;
    use Imageable;

    protected $guarded = ['id'];

    protected $casts = [
        'data' => 'array'
    ];

    public function uploadFolder(): string
    {
        return 'settings';
    }

    public function contactTitle(): ?string
    {
        return Arr::get($this->data, 'contact_title');
    }

    public function contactTitleRu(): ?string
    {
        return Arr::get($this->data, 'contact_title_ru');
    }

    public function contactDescription(): ?string
    {
        return Arr::get($this->data, 'contact_description');
    }

    public function contactDescriptionRu(): ?string
    {
        return Arr::get($this->data, 'contact_description_ru');
    }

    public function contactAddress(): ?string
    {
        return Arr::get($this->data, 'contact_address');
    }

    public function contactAddressRu(): ?string
    {
        return Arr::get($this->data, 'contact_address_ru');
    }

    public function contactPhone1(): ?string
    {
        return Arr::get($this->data, 'contact_phone_1');
    }

    public function contactPhone2(): ?string
    {
        return Arr::get($this->data, 'contact_phone_2');
    }

    public function contactSchedule(): ?string
    {
        return Arr::get($this->data, 'contact_schedule');
    }

    public function contactScheduleRu(): ?string
    {
        return Arr::get($this->data, 'contact_schedule_ru');
    }

    public function menuItemHome()
    {
        return Arr::get($this->data, 'menu_item_home');
    }

    public function menuItemHomeRu()
    {
        return Arr::get($this->data, 'menu_item_home_ru');
    }

    public function menuItemServices()
    {
        return Arr::get($this->data, 'menu_item_services');
    }

    public function menuItemServicesRu()
    {
        return Arr::get($this->data, 'menu_item_services_ru');
    }

    public function menuItemGallery()
    {
        return Arr::get($this->data, 'menu_item_gallery');
    }

    public function menuItemGalleryRu()
    {
        return Arr::get($this->data, 'menu_item_gallery_ru');
    }

    public function menuItemContacts()
    {
        return Arr::get($this->data, 'menu_item_contacts');
    }

    public function menuItemContactsRu()
    {
        return Arr::get($this->data, 'menu_item_contacts_ru');
    }

    public function bigHeaderTitle()
    {
        return Arr::get($this->data, 'big_header_title');
    }

    public function bigHeaderTitleRu()
    {
        return Arr::get($this->data, 'big_header_title_ru');
    }

    public function headerSchedule()
    {
        return Arr::get($this->data, 'header_schedule');
    }

    public function headerScheduleRu()
    {
        return Arr::get($this->data, 'header_schedule_ru');
    }

    public function bigRedHeaderBtn()
    {
        return Arr::get($this->data, 'big_red_header_btn');
    }

    public function bigRedHeaderBtnRu()
    {
        return Arr::get($this->data, 'big_red_header_btn_ru');
    }

    public function form_name()
    {
        return Arr::get($this->data, 'form_name');
    }
    public function form_name_ru()
    {
        return Arr::get($this->data, 'form_name_ru');
    }
    public function form_phone()
    {
        return Arr::get($this->data, 'form_phone');
    }
    public function form_phone_ru()
    {
        return Arr::get($this->data, 'form_phone_ru');
    }
    public function form_success_message()
    {
        return Arr::get($this->data, 'form_success_message');
    }
    public function form_success_message_ru()
    {
        return Arr::get($this->data, 'form_success_message_ru');
    }
    public function form_error_message()
    {
        return Arr::get($this->data, 'form_error_message');
    }
    public function form_error_message_ru()
    {
        return Arr::get($this->data, 'form_error_message_ru');
    }
    public function form_main_slider_calculate_cost_text()
    {
        return Arr::get($this->data, 'form_main_slider_calculate_cost_text');
    }
    public function form_main_slider_calculate_cost_text_ru()
    {
        return Arr::get($this->data, 'form_main_slider_calculate_cost_text_ru');
    }
    public function form_main_slider_learn_how_text()
    {
        return Arr::get($this->data, 'form_main_slider_learn_how_text');
    }
    public function form_main_slider_learn_how_text_ru()
    {
        return Arr::get($this->data, 'form_main_slider_learn_how_text_ru');
    }
    public function form_main_slider_discount_text()
    {
        return Arr::get($this->data, 'form_main_slider_discount_text');
    }
    public function form_main_slider_discount_text_ru()
    {
        return Arr::get($this->data, 'form_main_slider_discount_text_ru');
    }
    public function form_main_slider_btn()
    {
        return Arr::get($this->data, 'form_main_slider_btn');
    }
    public function form_main_slider_btn_ru()
    {
        return Arr::get($this->data, 'form_main_slider_btn_ru');
    }
    public function form_modal_total_cost_text()
    {
        return Arr::get($this->data, 'form_modal_total_cost_text');
    }
    public function form_modal_total_cost_text_ru()
    {
        return Arr::get($this->data, 'form_modal_total_cost_text_ru');
    }
    public function form_modal_write_us_text()
    {
        return Arr::get($this->data, 'form_modal_write_us_text');
    }
    public function form_modal_write_us_text_ru()
    {
        return Arr::get($this->data, 'form_modal_write_us_text_ru');
    }
    public function form_modal_mobile_text()
    {
        return Arr::get($this->data, 'form_modal_mobile_text');
    }
    public function form_modal_mobile_text_ru()
    {
        return Arr::get($this->data, 'form_modal_mobile_text_ru');
    }
    public function form_modal_btn()
    {
        return Arr::get($this->data, 'form_modal_btn');
    }
    public function form_modal_btn_ru()
    {
        return Arr::get($this->data, 'form_modal_btn_ru');
    }
    public function form_middle_red_section_btn()
    {
        return Arr::get($this->data, 'form_middle_red_section_btn');
    }
    public function form_middle_red_section_btn_ru()
    {
        return Arr::get($this->data, 'form_middle_red_section_btn_ru');
    }
    public function form_bottom_red_section_btn()
    {
        return Arr::get($this->data, 'form_bottom_red_section_btn');
    }
    public function form_bottom_red_section_btn_ru()
    {
        return Arr::get($this->data, 'form_bottom_red_section_btn_ru');
    }
    public function form_above_contacts_section_btn()
    {
        return Arr::get($this->data, 'form_above_contacts_section_btn');
    }
    public function form_above_contacts_section_btn_ru()
    {
        return Arr::get($this->data, 'form_above_contacts_section_btn_ru');
    }

    public function about_section_experience_title()
    {
        return Arr::get($this->data, 'about_section_experience_title');
    }

    public function about_section_experience_title_ru()
    {
        return Arr::get($this->data, 'about_section_experience_title_ru');
    }

    public function about_section_experience_desc()
    {
        return Arr::get($this->data, 'about_section_experience_desc');
    }

    public function about_section_experience_desc_ru()
    {
        return Arr::get($this->data, 'about_section_experience_desc_ru');
    }

    public function about_section_customers_number_title()
    {
        return Arr::get($this->data, 'about_section_customers_number_title');
    }

    public function about_section_customers_number_title_ru()
    {
        return Arr::get($this->data, 'about_section_customers_number_title_ru');
    }

    public function about_section_plan_title()
    {
        return Arr::get($this->data, 'about_section_plan_title');
    }

    public function about_section_plan_title_ru()
    {
        return Arr::get($this->data, 'about_section_plan_title_ru');
    }

    public function about_section_post_pay_title()
    {
        return Arr::get($this->data, 'about_section_post_pay_title');
    }

    public function about_section_post_pay_title_ru()
    {
        return Arr::get($this->data, 'about_section_post_pay_title_ru');
    }

    public function about_section_customers_number_desc()
    {
        return Arr::get($this->data, 'about_section_customers_number_desc');
    }

    public function about_section_customers_number_desc_ru()
    {
        return Arr::get($this->data, 'about_section_customers_number_desc_ru');
    }

    public function about_section_plan_desc()
    {
        return Arr::get($this->data, 'about_section_plan_desc');
    }

    public function about_section_plan_desc_ru()
    {
        return Arr::get($this->data, 'about_section_plan_desc_ru');
    }

    public function about_section_post_pay_desc()
    {
        return Arr::get($this->data, 'about_section_post_pay_desc');
    }

    public function about_section_post_pay_desc_ru()
    {
        return Arr::get($this->data, 'about_section_post_pay_desc_ru');
    }

    public function services_section_header()
    {
        return Arr::get($this->data, 'services_section_header');
    }

    public function services_section_header_ru()
    {
        return Arr::get($this->data, 'services_section_header_ru');
    }

    public function services_section_red_btn()
    {
        return Arr::get($this->data, 'services_section_red_btn');
    }

    public function services_section_red_btn_ru()
    {
        return Arr::get($this->data, 'services_section_red_btn_ru');
    }

    public function red_form_block_section_header()
    {
        return Arr::get($this->data, 'red_form_block_section_header');
    }

    public function red_form_block_section_header_ru()
    {
        return Arr::get($this->data, 'red_form_block_section_header_ru');
    }

    public function red_form_block_section_desc()
    {
        return Arr::get($this->data, 'red_form_block_section_desc');
    }

    public function red_form_block_section_desc_ru()
    {
        return Arr::get($this->data, 'red_form_block_section_desc_ru');
    }

    public function red_form_block_section_phone()
    {
        return Arr::get($this->data, 'red_form_block_section_phone');
    }

    public function red_form_block_section_phone_ru()
    {
        return Arr::get($this->data, 'red_form_block_section_phone_ru');
    }

    public function gallery_section_header()
    {
        return Arr::get($this->data, 'gallery_section_header');
    }

    public function gallery_section_header_ru()
    {
        return Arr::get($this->data, 'gallery_section_header_ru');
    }

    public function gallery_section_zoom_btn()
    {
        return Arr::get($this->data, 'gallery_section_zoom_btn');
    }

    public function gallery_section_zoom_btn_ru()
    {
        return Arr::get($this->data, 'gallery_section_zoom_btn_ru');
    }

    public function gallery_item_black_btn()
    {
        return Arr::get($this->data, 'gallery_item_black_btn');
    }

    public function gallery_item_black_btn_ru()
    {
        return Arr::get($this->data, 'gallery_item_black_btn_ru');
    }

    public function gallery_item_price_from_text()
    {
        return Arr::get($this->data, 'gallery_item_price_from_text');
    }

    public function gallery_item_price_from_text_ru()
    {
        return Arr::get($this->data, 'gallery_item_price_from_text_ru');
    }
    public function gallery_item_price_currency()
    {
        return Arr::get($this->data, 'gallery_item_price_currency');
    }

    public function gallery_item_price_currency_ru()
    {
        return Arr::get($this->data, 'gallery_item_price_currency_ru');
    }

    public function advantages_section_warranty_header()
    {
        return Arr::get($this->data, 'advantages_section_warranty_header');
    }

    public function advantages_section_warranty_header_ru()
    {
        return Arr::get($this->data, 'advantages_section_warranty_header_ru');
    }

    public function advantages_section_warranty_desc()
    {
        return Arr::get($this->data, 'advantages_section_warranty_desc');
    }

    public function advantages_section_warranty_desc_ru()
    {
        return Arr::get($this->data, 'advantages_section_warranty_desc_ru');
    }

    public function advantages_section_qual_specs_header()
    {
        return Arr::get($this->data, 'advantages_section_qual_specs_header');
    }

    public function advantages_section_qual_specs_header_ru()
    {
        return Arr::get($this->data, 'advantages_section_qual_specs_header_ru');
    }

    public function advantages_section_qual_specs_desc()
    {
        return Arr::get($this->data, 'advantages_section_qual_specs_desc');
    }

    public function advantages_section_qual_specs_desc_ru()
    {
        return Arr::get($this->data, 'advantages_section_qual_specs_desc_ru');
    }

    public function advantages_section_high_service_header()
    {
        return Arr::get($this->data, 'advantages_section_high_service_header');
    }

    public function advantages_section_high_service_header_ru()
    {
        return Arr::get($this->data, 'advantages_section_high_service_header_ru');
    }

    public function advantages_section_high_service_desc()
    {
        return Arr::get($this->data, 'advantages_section_high_service_desc');
    }

    public function advantages_section_high_service_desc_ru()
    {
        return Arr::get($this->data, 'advantages_section_high_service_desc_ru');
    }

    public function advantages_section_avail_prices_header()
    {
        return Arr::get($this->data, 'advantages_section_avail_prices_header');
    }

    public function advantages_section_avail_prices_header_ru()
    {
        return Arr::get($this->data, 'advantages_section_avail_prices_header_ru');
    }

    public function advantages_section_avail_prices_desc()
    {
        return Arr::get($this->data, 'advantages_section_avail_prices_desc');
    }

    public function advantages_section_avail_prices_desc_ru()
    {
        return Arr::get($this->data, 'advantages_section_avail_prices_desc_ru');
    }

    public function work_section_top_header()
    {
        return Arr::get($this->data, 'work_section_top_header');
    }
    public function work_section_top_header_ru()
    {
        return Arr::get($this->data, 'work_section_top_header_ru');
    }

    public function work_section_step_1_header()
    {
        return Arr::get($this->data, 'work_section_step_1_header');
    }

    public function work_section_step_1_header_ru()
    {
        return Arr::get($this->data, 'work_section_step_1_header_ru');
    }

    public function work_section_step_1_desc()
    {
        return Arr::get($this->data, 'work_section_step_1_desc');
    }

    public function work_section_step_1_desc_ru()
    {
        return Arr::get($this->data, 'work_section_step_1_desc_ru');
    }

    public function work_section_step_2_header()
    {
        return Arr::get($this->data, 'work_section_step_2_header');
    }

    public function work_section_step_2_header_ru()
    {
        return Arr::get($this->data, 'work_section_step_2_header_ru');
    }

    public function work_section_step_2_desc()
    {
        return Arr::get($this->data, 'work_section_step_2_desc');
    }

    public function work_section_step_2_desc_ru()
    {
        return Arr::get($this->data, 'work_section_step_2_desc_ru');
    }

    public function work_section_step_3_header()
    {
        return Arr::get($this->data, 'work_section_step_3_header');
    }

    public function work_section_step_3_header_ru()
    {
        return Arr::get($this->data, 'work_section_step_3_header_ru');
    }

    public function work_section_step_3_desc()
    {
        return Arr::get($this->data, 'work_section_step_3_desc');
    }

    public function work_section_step_3_desc_ru()
    {
        return Arr::get($this->data, 'work_section_step_3_desc_ru');
    }

    public function work_section_step_4_header()
    {
        return Arr::get($this->data, 'work_section_step_4_header');
    }

    public function work_section_step_4_header_ru()
    {
        return Arr::get($this->data, 'work_section_step_4_header_ru');
    }

    public function work_section_step_4_desc()
    {
        return Arr::get($this->data, 'work_section_step_4_desc');
    }

    public function work_section_step_4_desc_ru()
    {
        return Arr::get($this->data, 'work_section_step_4_desc_ru');
    }

    public function feedback_section_header()
    {
        return Arr::get($this->data, 'feedback_section_header');
    }
    public function feedback_section_header_ru()
    {
        return Arr::get($this->data, 'feedback_section_header_ru');
    }

    public function partners_section_header()
    {
        return Arr::get($this->data, 'partners_section_header');
    }
    public function partners_section_header_ru()
    {
        return Arr::get($this->data, 'partners_section_header_ru');
    }

    public function questions_section_header()
    {
        return Arr::get($this->data, 'questions_section_header');
    }
    public function questions_section_header_ru()
    {
        return Arr::get($this->data, 'questions_section_header_ru');
    }
    public function questions_section_desc()
    {
        return Arr::get($this->data, 'questions_section_desc');
    }
    public function questions_section_desc_ru()
    {
        return Arr::get($this->data, 'questions_section_desc_ru');
    }
    public function questions_section_phone()
    {
        return Arr::get($this->data, 'questions_section_phone');
    }
    public function questions_section_phone_ru()
    {
        return Arr::get($this->data, 'questions_section_phone_ru');
    }

    public function vk_link()
    {
        return Arr::get($this->data, 'vk_link');
    }
    public function facebook_link()
    {
        return Arr::get($this->data, 'facebook_link');
    }
    public function ok_link()
    {
        return Arr::get($this->data, 'ok_link');
    }
    public function insta_link()
    {
        return Arr::get($this->data, 'insta_link');
    }
    public function youtube_link()
    {
        return Arr::get($this->data, 'youtube_link');
    }

    public function footer_modal_btn()
    {
        return Arr::get($this->data, 'footer_modal_btn');
    }
    public function footer_modal_btn_ru()
    {
        return Arr::get($this->data, 'footer_modal_btn_ru');
    }
    public function admin_email()
    {
        return Arr::get($this->data, 'admin_email');
    }
}
