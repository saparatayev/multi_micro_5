<?php

namespace App\Http\Controllers;

use App\Actions\UploadFileAction;
use App\Http\Requests\SaveAboutSectionRequest;
use App\Http\Requests\SaveAdminContactsRequest;
use App\Http\Requests\SaveAdvantagesSectionRequest;
use App\Http\Requests\SaveFeedbackSectionRequest;
use App\Http\Requests\SaveFooterSectionRequest;
use App\Http\Requests\SaveFormTextsRequest;
use App\Http\Requests\SaveGallerySectionRequest;
use App\Http\Requests\SaveHeaderRequest;
use App\Http\Requests\SaveMenuRequest;
use App\Http\Requests\SavePartnersSectionRequest;
use App\Http\Requests\SaveQuestionsSectionRequest;
use App\Http\Requests\SaveRedFormBlockSectionRequest;
use App\Http\Requests\SaveServicesSectionRequest;
use App\Http\Requests\SaveWorkSectionRequest;
use App\Http\Resources\SettingsResource;
use App\Models\Setting;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingsController extends Controller
{
    private $settings;

    public function __construct()
    {
        $this->settings = Setting::find(1) ?? new Setting();
    }

    public function create()
    {
        return Inertia::render('Settings/Create', [
            'settings' => new SettingsResource($this->settings)
        ]);
    }

    public function saveContacts(Request $request)
    {
        $request->validate([
            'contact_title' => 'required|string',
            'contact_title_ru' => 'required|string',
            'contact_description' => 'required|string',
            'contact_description_ru' => 'required|string',
            'contact_address' => 'required|string',
            'contact_address_ru' => 'required|string',
            'contact_phone_1' => 'required|string',
            'contact_phone_2' => 'required|string',
            'contact_schedule' => 'required|string',
            'contact_schedule_ru' => 'required|string',
            'map_image' => 'nullable|image',
        ]);

        $data['contact_title'] = $request->get('contact_title');
        $data['contact_title_ru'] = $request->get('contact_title_ru');
        $data['contact_description'] = $request->get('contact_description');
        $data['contact_description_ru'] = $request->get('contact_description_ru');
        $data['contact_address'] = $request->get('contact_address');
        $data['contact_address_ru'] = $request->get('contact_address_ru');
        $data['contact_phone_1'] = $request->get('contact_phone_1');
        $data['contact_phone_2'] = $request->get('contact_phone_2');
        $data['contact_schedule'] = $request->get('contact_schedule');
        $data['contact_schedule_ru'] = $request->get('contact_schedule_ru');

        if ($request->file('map_image')) {

            $this->settings->deleteImage('data->map_image');

            $imageName = (new UploadFileAction)
                ->setFile($request->file('map_image'))
                ->setUploadPath($this->settings->uploadFolder())
                ->execute();

            $data['map_image'] = $imageName;
        }

        $this->save($data);

        return redirect()->back();
    }

    public function saveFormTexts(SaveFormTextsRequest $request)
    {
        $data['form_name'] = $request->get('form_name');
        $data['form_name_ru'] = $request->get('form_name_ru');
        $data['form_phone'] = $request->get('form_phone');
        $data['form_phone_ru'] = $request->get('form_phone_ru');
        $data['form_success_message'] = $request->get('form_success_message');
        $data['form_success_message_ru'] = $request->get('form_success_message_ru');
        $data['form_error_message'] = $request->get('form_error_message');
        $data['form_error_message_ru'] = $request->get('form_error_message_ru');
        $data['form_main_slider_calculate_cost_text'] = $request->get('form_main_slider_calculate_cost_text');
        $data['form_main_slider_calculate_cost_text_ru'] = $request->get('form_main_slider_calculate_cost_text_ru');
        $data['form_main_slider_learn_how_text'] = $request->get('form_main_slider_learn_how_text');
        $data['form_main_slider_learn_how_text_ru'] = $request->get('form_main_slider_learn_how_text_ru');
        $data['form_main_slider_discount_text'] = $request->get('form_main_slider_discount_text');
        $data['form_main_slider_discount_text_ru'] = $request->get('form_main_slider_discount_text_ru');
        $data['form_main_slider_btn'] = $request->get('form_main_slider_btn');
        $data['form_main_slider_btn_ru'] = $request->get('form_main_slider_btn_ru');
        $data['form_modal_total_cost_text'] = $request->get('form_modal_total_cost_text');
        $data['form_modal_total_cost_text_ru'] = $request->get('form_modal_total_cost_text_ru');
        $data['form_modal_write_us_text'] = $request->get('form_modal_write_us_text');
        $data['form_modal_write_us_text_ru'] = $request->get('form_modal_write_us_text_ru');
        $data['form_modal_mobile_text'] = $request->get('form_modal_mobile_text');
        $data['form_modal_mobile_text_ru'] = $request->get('form_modal_mobile_text_ru');
        $data['form_modal_btn'] = $request->get('form_modal_btn');
        $data['form_modal_btn_ru'] = $request->get('form_modal_btn_ru');
        $data['form_middle_red_section_btn'] = $request->get('form_middle_red_section_btn');
        $data['form_middle_red_section_btn_ru'] = $request->get('form_middle_red_section_btn_ru');
        $data['form_bottom_red_section_btn'] = $request->get('form_bottom_red_section_btn');
        $data['form_bottom_red_section_btn_ru'] = $request->get('form_bottom_red_section_btn_ru');
        $data['form_above_contacts_section_btn'] = $request->get('form_above_contacts_section_btn');
        $data['form_above_contacts_section_btn_ru'] = $request->get('form_above_contacts_section_btn_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveAboutSection(SaveAboutSectionRequest $request)
    {
        $data['about_section_experience_title'] = $request->get('about_section_experience_title');
        $data['about_section_experience_title_ru'] = $request->get('about_section_experience_title_ru');
        $data['about_section_experience_desc'] = $request->get('about_section_experience_desc');
        $data['about_section_experience_desc_ru'] = $request->get('about_section_experience_desc_ru');
        $data['about_section_customers_number_title'] = $request->get('about_section_customers_number_title');
        $data['about_section_customers_number_title_ru'] = $request->get('about_section_customers_number_title_ru');
        $data['about_section_plan_title'] = $request->get('about_section_plan_title');
        $data['about_section_plan_title_ru'] = $request->get('about_section_plan_title_ru');
        $data['about_section_post_pay_title'] = $request->get('about_section_post_pay_title');
        $data['about_section_post_pay_title_ru'] = $request->get('about_section_post_pay_title_ru');
        $data['about_section_customers_number_desc'] = $request->get('about_section_customers_number_desc');
        $data['about_section_customers_number_desc_ru'] = $request->get('about_section_customers_number_desc_ru');
        $data['about_section_plan_desc'] = $request->get('about_section_plan_desc');
        $data['about_section_plan_desc_ru'] = $request->get('about_section_plan_desc_ru');
        $data['about_section_post_pay_desc'] = $request->get('about_section_post_pay_desc');
        $data['about_section_post_pay_desc_ru'] = $request->get('about_section_post_pay_desc_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveAdminContacts(SaveAdminContactsRequest $request)
    {
        $data['admin_email'] = $request->get('admin_email');

        $this->save($data);

        return redirect()->back();
    }

    public function saveServicesSection(SaveServicesSectionRequest $request)
    {
        $data['services_section_header'] = $request->get('services_section_header');
        $data['services_section_header_ru'] = $request->get('services_section_header_ru');
        $data['services_section_red_btn'] = $request->get('services_section_red_btn');
        $data['services_section_red_btn_ru'] = $request->get('services_section_red_btn_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveRedFormBlockSection(SaveRedFormBlockSectionRequest $request)
    {
        $data['red_form_block_section_header'] = $request->get('red_form_block_section_header');
        $data['red_form_block_section_header_ru'] = $request->get('red_form_block_section_header_ru');
        $data['red_form_block_section_desc'] = $request->get('red_form_block_section_desc');
        $data['red_form_block_section_desc_ru'] = $request->get('red_form_block_section_desc_ru');
        $data['red_form_block_section_phone'] = $request->get('red_form_block_section_phone');
        $data['red_form_block_section_phone_ru'] = $request->get('red_form_block_section_phone_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveGallerySection(SaveGallerySectionRequest $request)
    {
        $data['gallery_section_header'] = $request->get('gallery_section_header');
        $data['gallery_section_header_ru'] = $request->get('gallery_section_header_ru');
        $data['gallery_section_zoom_btn'] = $request->get('gallery_section_zoom_btn');
        $data['gallery_section_zoom_btn_ru'] = $request->get('gallery_section_zoom_btn_ru');
        $data['gallery_item_black_btn'] = $request->get('gallery_item_black_btn');
        $data['gallery_item_black_btn_ru'] = $request->get('gallery_item_black_btn_ru');
        $data['gallery_item_price_from_text'] = $request->get('gallery_item_price_from_text');
        $data['gallery_item_price_from_text_ru'] = $request->get('gallery_item_price_from_text_ru');
        $data['gallery_item_price_currency'] = $request->get('gallery_item_price_currency');
        $data['gallery_item_price_currency_ru'] = $request->get('gallery_item_price_currency_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveAdvantagesSection(SaveAdvantagesSectionRequest $request)
    {
        $data['advantages_section_warranty_header'] = $request->get('advantages_section_warranty_header');
        $data['advantages_section_warranty_header_ru'] = $request->get('advantages_section_warranty_header_ru');
        $data['advantages_section_warranty_desc'] = $request->get('advantages_section_warranty_desc');
        $data['advantages_section_warranty_desc_ru'] = $request->get('advantages_section_warranty_desc_ru');
        $data['advantages_section_qual_specs_header'] = $request->get('advantages_section_qual_specs_header');
        $data['advantages_section_qual_specs_header_ru'] = $request->get('advantages_section_qual_specs_header_ru');
        $data['advantages_section_qual_specs_desc'] = $request->get('advantages_section_qual_specs_desc');
        $data['advantages_section_qual_specs_desc_ru'] = $request->get('advantages_section_qual_specs_desc_ru');
        $data['advantages_section_high_service_header'] = $request->get('advantages_section_high_service_header');
        $data['advantages_section_high_service_header_ru'] = $request->get('advantages_section_high_service_header_ru');
        $data['advantages_section_high_service_desc'] = $request->get('advantages_section_high_service_desc');
        $data['advantages_section_high_service_desc_ru'] = $request->get('advantages_section_high_service_desc_ru');
        $data['advantages_section_avail_prices_header'] = $request->get('advantages_section_avail_prices_header');
        $data['advantages_section_avail_prices_header_ru'] = $request->get('advantages_section_avail_prices_header_ru');
        $data['advantages_section_avail_prices_desc'] = $request->get('advantages_section_avail_prices_desc');
        $data['advantages_section_avail_prices_desc_ru'] = $request->get('advantages_section_avail_prices_desc_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveWorkSection(SaveWorkSectionRequest $request)
    {
        $data['work_section_top_header'] = $request->get('work_section_top_header');
        $data['work_section_top_header_ru'] = $request->get('work_section_top_header_ru');
        $data['work_section_step_1_header'] = $request->get('work_section_step_1_header');
        $data['work_section_step_1_header_ru'] = $request->get('work_section_step_1_header_ru');
        $data['work_section_step_1_desc'] = $request->get('work_section_step_1_desc');
        $data['work_section_step_1_desc_ru'] = $request->get('work_section_step_1_desc_ru');
        $data['work_section_step_2_header'] = $request->get('work_section_step_2_header');
        $data['work_section_step_2_header_ru'] = $request->get('work_section_step_2_header_ru');
        $data['work_section_step_2_desc'] = $request->get('work_section_step_2_desc');
        $data['work_section_step_2_desc_ru'] = $request->get('work_section_step_2_desc_ru');
        $data['work_section_step_3_header'] = $request->get('work_section_step_3_header');
        $data['work_section_step_3_header_ru'] = $request->get('work_section_step_3_header_ru');
        $data['work_section_step_3_desc'] = $request->get('work_section_step_3_desc');
        $data['work_section_step_3_desc_ru'] = $request->get('work_section_step_3_desc_ru');
        $data['work_section_step_4_header'] = $request->get('work_section_step_4_header');
        $data['work_section_step_4_header_ru'] = $request->get('work_section_step_4_header_ru');
        $data['work_section_step_4_desc'] = $request->get('work_section_step_4_desc');
        $data['work_section_step_4_desc_ru'] = $request->get('work_section_step_4_desc_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveFeedbackSection(SaveFeedbackSectionRequest $request)
    {
        $data['feedback_section_header'] = $request->get('feedback_section_header');
        $data['feedback_section_header_ru'] = $request->get('feedback_section_header_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function savePartnersSection(SavePartnersSectionRequest $request)
    {
        $data['partners_section_header'] = $request->get('partners_section_header');
        $data['partners_section_header_ru'] = $request->get('partners_section_header_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveQuestionsSection(SaveQuestionsSectionRequest $request)
    {
        $data['questions_section_header'] = $request->get('questions_section_header');
        $data['questions_section_header_ru'] = $request->get('questions_section_header_ru');
        $data['questions_section_desc'] = $request->get('questions_section_desc');
        $data['questions_section_desc_ru'] = $request->get('questions_section_desc_ru');
        $data['questions_section_phone'] = $request->get('questions_section_phone');
        $data['questions_section_phone_ru'] = $request->get('questions_section_phone_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveFooterSection(SaveFooterSectionRequest $request)
    {
        $data['vk_link'] = $request->get('vk_link');
        $data['facebook_link'] = $request->get('facebook_link');
        $data['ok_link'] = $request->get('ok_link');
        $data['insta_link'] = $request->get('insta_link');
        $data['youtube_link'] = $request->get('youtube_link');
        $data['footer_modal_btn'] = $request->get('footer_modal_btn');
        $data['footer_modal_btn_ru'] = $request->get('footer_modal_btn_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveMenu(SaveMenuRequest $request)
    {
        $data['menu_item_home'] = $request->get('menu_item_home');
        $data['menu_item_home_ru'] = $request->get('menu_item_home_ru');
        $data['menu_item_services'] = $request->get('menu_item_services');
        $data['menu_item_services_ru'] = $request->get('menu_item_services_ru');
        $data['menu_item_gallery'] = $request->get('menu_item_gallery');
        $data['menu_item_gallery_ru'] = $request->get('menu_item_gallery_ru');
        $data['menu_item_contacts'] = $request->get('menu_item_contacts');
        $data['menu_item_contacts_ru'] = $request->get('menu_item_contacts_ru');

        $this->save($data);

        return redirect()->back();
    }

    public function saveHeader(SaveHeaderRequest $request)
    {
        $data = $request->only([
            'big_header_title',
            'big_header_title_ru',
            'header_schedule',
            'header_schedule_ru',
            'big_red_header_btn',
            'big_red_header_btn_ru',
        ]);

        $this->save($data);

        return redirect()->back();
    }

    private function save(array $data)
    {
        $this->settings->data = array_merge($this->settings->data ?? [], $data);
        $this->settings->save();
    }
}
