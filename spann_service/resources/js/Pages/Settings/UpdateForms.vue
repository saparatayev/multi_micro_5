<template>
  <jet-form-section @submitted="updateFormTexts">
    <template #title> Forms </template>

    <template #description> Update Form texts. </template>

    <template #form>
      <!-- Form Name Text DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="form_name" value="Form Name Text DE" />
        <jet-input
          id="form_name"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_name"
          autocomplete="form_name"
        />
        <jet-input-error :message="form.errors.form_name" class="mt-2" />
      </div>

      <!-- Form Name Text RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="form_name_ru" value="Form Name Text RU" />
        <jet-input
          id="form_name_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_name_ru"
          autocomplete="form_name_ru"
        />
        <jet-input-error :message="form.errors.form_name_ru" class="mt-2" />
      </div>

      <!-- Form Telephone Text DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="form_phone" value="Form Telephone Text DE" />
        <jet-input
          id="form_phone"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_phone"
          autocomplete="form_phone"
        />
        <jet-input-error :message="form.errors.form_phone" class="mt-2" />
      </div>

      <!-- Form Telephone Text RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="form_phone_ru" value="Form Telephone Text RU" />
        <jet-input
          id="form_phone_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_phone_ru"
          autocomplete="form_phone_ru"
        />
        <jet-input-error :message="form.errors.form_phone_ru" class="mt-2" />
      </div>

      <!-- Form Success Message Text DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="form_success_message" value="Form Success Message Text DE" />
        <jet-input
          id="form_success_message"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_success_message"
          autocomplete="form_success_message"
        />
        <jet-input-error :message="form.errors.form_success_message" class="mt-2" />
      </div>

      <!-- Form Success Message Text RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="form_success_message_ru" value="Form Success Message Text RU" />
        <jet-input
          id="form_success_message_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_success_message_ru"
          autocomplete="form_success_message_ru"
        />
        <jet-input-error :message="form.errors.form_success_message_ru" class="mt-2" />
      </div>

      <!-- Form Failed Message Text DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="form_error_message" value="Form Failed Message Text DE" />
        <jet-input
          id="form_error_message"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_error_message"
          autocomplete="form_error_message"
        />
        <jet-input-error :message="form.errors.form_error_message" class="mt-2" />
      </div>

      <!-- Form Failed Message Text RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="form_error_message_ru" value="Form Failed Message Text RU" />
        <jet-input
          id="form_error_message_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_error_message_ru"
          autocomplete="form_error_message_ru"
        />
        <jet-input-error :message="form.errors.form_error_message_ru" class="mt-2" />
      </div>

      <!-- Calculate the cost Text (Form on the main slider) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_main_slider_calculate_cost_text"
          value="Calculate the cost Text (Form on the main slider) DE"
        />
        <jet-input
          id="form_main_slider_calculate_cost_text"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_main_slider_calculate_cost_text"
          autocomplete="form_main_slider_calculate_cost_text"
        />
        <jet-input-error
          :message="form.errors.form_main_slider_calculate_cost_text"
          class="mt-2"
        />
      </div>

      <!-- Calculate the cost Text (Form on the main slider) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_main_slider_calculate_cost_text_ru"
          value="Calculate the cost Text (Form on the main slider) RU"
        />
        <jet-input
          id="form_main_slider_calculate_cost_text_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_main_slider_calculate_cost_text_ru"
          autocomplete="form_main_slider_calculate_cost_text_ru"
        />
        <jet-input-error
          :message="form.errors.form_main_slider_calculate_cost_text_ru"
          class="mt-2"
        />
      </div>

      <!-- LEARN HOW TO GET Text (Form on the main slider) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_main_slider_learn_how_text"
          value="LEARN HOW TO GET Text (Form on the main slider) DE"
        />
        <jet-input
          id="form_main_slider_learn_how_text"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_main_slider_learn_how_text"
          autocomplete="form_main_slider_learn_how_text"
        />
        <jet-input-error
          :message="form.errors.form_main_slider_learn_how_text"
          class="mt-2"
        />
      </div>

      <!-- LEARN HOW TO GET Text (Form on the main slider) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_main_slider_learn_how_text_ru"
          value="LEARN HOW TO GET Text (Form on the main slider) RU"
        />
        <jet-input
          id="form_main_slider_learn_how_text_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_main_slider_learn_how_text_ru"
          autocomplete="form_main_slider_learn_how_text_ru"
        />
        <jet-input-error
          :message="form.errors.form_main_slider_learn_how_text_ru"
          class="mt-2"
        />
      </div>

      <!-- Discount Text (Form on the main slider) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_main_slider_discount_text"
          value="Discount Text (Form on the main slider) DE"
        />
        <jet-input
          id="form_main_slider_discount_text"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_main_slider_discount_text"
          autocomplete="form_main_slider_discount_text"
        />
        <jet-input-error
          :message="form.errors.form_main_slider_discount_text"
          class="mt-2"
        />
      </div>

      <!-- Discount Text (Form on the main slider) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_main_slider_discount_text_ru"
          value="Discount Text (Form on the main slider) RU"
        />
        <jet-input
          id="form_main_slider_discount_text_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_main_slider_discount_text_ru"
          autocomplete="form_main_slider_discount_text_ru"
        />
        <jet-input-error
          :message="form.errors.form_main_slider_discount_text_ru"
          class="mt-2"
        />
      </div>

      <!-- Submit button (Form on the main slider) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_main_slider_btn"
          value="Submit button (Form on the main slider) DE"
        />
        <jet-input
          id="form_main_slider_btn"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_main_slider_btn"
          autocomplete="form_main_slider_btn"
        />
        <jet-input-error
          :message="form.errors.form_main_slider_btn"
          class="mt-2"
        />
      </div>

      <!-- Submit button (Form on the main slider) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_main_slider_btn_ru"
          value="Submit button (Form on the main slider) RU"
        />
        <jet-input
          id="form_main_slider_btn_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_main_slider_btn_ru"
          autocomplete="form_main_slider_btn_ru"
        />
        <jet-input-error
          :message="form.errors.form_main_slider_btn_ru"
          class="mt-2"
        />
      </div>

      <!-- Total cost Text (Form in the modal) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_modal_total_cost_text"
          value="Total cost Text (Form in the modal) DE"
        />
        <jet-input
          id="form_modal_total_cost_text"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_modal_total_cost_text"
          autocomplete="form_modal_total_cost_text"
        />
        <jet-input-error
          :message="form.errors.form_modal_total_cost_text"
          class="mt-2"
        />
      </div>

      <!-- Total cost Text (Form in the modal) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_modal_total_cost_text_ru"
          value="Total cost Text (Form in the modal) RU"
        />
        <jet-input
          id="form_modal_total_cost_text_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_modal_total_cost_text_ru"
          autocomplete="form_modal_total_cost_text_ru"
        />
        <jet-input-error
          :message="form.errors.form_modal_total_cost_text_ru"
          class="mt-2"
        />
      </div>

      <!-- Write Us Text (Form in the modal) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_modal_write_us_text"
          value="Write Us Text (Form in the modal) DE"
        />
        <jet-input
          id="form_modal_write_us_text"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_modal_write_us_text"
          autocomplete="form_modal_write_us_text"
        />
        <jet-input-error
          :message="form.errors.form_modal_write_us_text"
          class="mt-2"
        />
      </div>

      <!-- Write Us Text (Form in the modal) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_modal_write_us_text_ru"
          value="Write Us Text (Form in the modal) RU"
        />
        <jet-input
          id="form_modal_write_us_text_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_modal_write_us_text_ru"
          autocomplete="form_modal_write_us_text_ru"
        />
        <jet-input-error
          :message="form.errors.form_modal_write_us_text_ru"
          class="mt-2"
        />
      </div>

      <!-- Mobile Phone Text (Form in the modal) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_modal_mobile_text"
          value="Mobile Phone Text (Form in the modal) DE"
        />
        <jet-input
          id="form_modal_mobile_text"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_modal_mobile_text"
          autocomplete="form_modal_mobile_text"
        />
        <jet-input-error
          :message="form.errors.form_modal_mobile_text"
          class="mt-2"
        />
      </div>

      <!-- Mobile Phone Text (Form in the modal) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_modal_mobile_text_ru"
          value="Mobile Phone Text (Form in the modal) RU"
        />
        <jet-input
          id="form_modal_mobile_text_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_modal_mobile_text_ru"
          autocomplete="form_modal_mobile_text_ru"
        />
        <jet-input-error
          :message="form.errors.form_modal_mobile_text_ru"
          class="mt-2"
        />
      </div>

      <!-- Submit button (Form in the modal) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_modal_btn"
          value="Submit button (Form in the modal) DE"
        />
        <jet-input
          id="form_modal_btn"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_modal_btn"
          autocomplete="form_modal_btn"
        />
        <jet-input-error :message="form.errors.form_modal_btn" class="mt-2" />
      </div>

      <!-- Submit button (Form in the modal) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_modal_btn_ru"
          value="Submit button (Form in the modal) RU"
        />
        <jet-input
          id="form_modal_btn_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_modal_btn_ru"
          autocomplete="form_modal_btn_ru"
        />
        <jet-input-error
          :message="form.errors.form_modal_btn_ru"
          class="mt-2"
        />
      </div>

      <!-- Submit button (Form in the middle red section) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_middle_red_section_btn"
          value="Submit button (Form in the middle red section) DE"
        />
        <jet-input
          id="form_middle_red_section_btn"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_middle_red_section_btn"
          autocomplete="form_middle_red_section_btn"
        />
        <jet-input-error
          :message="form.errors.form_middle_red_section_btn"
          class="mt-2"
        />
      </div>

      <!-- Submit button (Form in the middle red section) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_middle_red_section_btn_ru"
          value="Submit button (Form in the middle red section) RU"
        />
        <jet-input
          id="form_middle_red_section_btn_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_middle_red_section_btn_ru"
          autocomplete="form_middle_red_section_btn_ru"
        />
        <jet-input-error
          :message="form.errors.form_middle_red_section_btn_ru"
          class="mt-2"
        />
      </div>

      <!-- Submit button (Form in the bottom red section) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_bottom_red_section_btn"
          value="Submit button (Form in the bottom red section) DE"
        />
        <jet-input
          id="form_bottom_red_section_btn"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_bottom_red_section_btn"
          autocomplete="form_bottom_red_section_btn"
        />
        <jet-input-error
          :message="form.errors.form_bottom_red_section_btn"
          class="mt-2"
        />
      </div>

      <!-- Submit button (Form in the bottom red section) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_bottom_red_section_btn_ru"
          value="Submit button (Form in the bottom red section) RU"
        />
        <jet-input
          id="form_bottom_red_section_btn_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_bottom_red_section_btn_ru"
          autocomplete="form_bottom_red_section_btn_ru"
        />
        <jet-input-error
          :message="form.errors.form_bottom_red_section_btn_ru"
          class="mt-2"
        />
      </div>

      <!-- Submit button (Form above Contacts section) DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_above_contacts_section_btn"
          value="Submit button (Form above Contacts section) DE"
        />
        <jet-input
          id="form_above_contacts_section_btn"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_above_contacts_section_btn"
          autocomplete="form_above_contacts_section_btn"
        />
        <jet-input-error
          :message="form.errors.form_above_contacts_section_btn"
          class="mt-2"
        />
      </div>

      <!-- Submit button (Form above Contacts section) RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="form_above_contacts_section_btn_ru"
          value="Submit button (Form above Contacts section) RU"
        />
        <jet-input
          id="form_above_contacts_section_btn_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.form_above_contacts_section_btn_ru"
          autocomplete="form_above_contacts_section_btn_ru"
        />
        <jet-input-error
          :message="form.errors.form_above_contacts_section_btn_ru"
          class="mt-2"
        />
      </div>
    </template>

    <template #actions>
      <jet-action-message :on="form.recentlySuccessful" class="mr-3">
        Saved.
      </jet-action-message>

      <jet-button
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
      >
        Save
      </jet-button>
    </template>
  </jet-form-section>
</template>

<script>
import { defineComponent } from "vue";
import JetButton from "@/Jetstream/Button.vue";
import JetFormSection from "@/Jetstream/FormSection.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetActionMessage from "@/Jetstream/ActionMessage.vue";

export default defineComponent({
  components: {
    JetActionMessage,
    JetButton,
    JetFormSection,
    JetInput,
    JetInputError,
    JetLabel,
  },

  props: ["settings"],

  data() {
    return {
      form: this.$inertia.form({
        form_name: this.settings.data.form_name,
        form_name_ru: this.settings.data.form_name_ru,
        form_phone: this.settings.data.form_phone,
        form_phone_ru: this.settings.data.form_phone_ru,
        form_success_message: this.settings.data.form_success_message,
        form_success_message_ru: this.settings.data.form_success_message_ru,
        form_error_message: this.settings.data.form_error_message,
        form_error_message_ru: this.settings.data.form_error_message_ru,
        form_main_slider_calculate_cost_text:
          this.settings.data.form_main_slider_calculate_cost_text,
        form_main_slider_calculate_cost_text_ru:
          this.settings.data.form_main_slider_calculate_cost_text_ru,
        form_main_slider_learn_how_text:
          this.settings.data.form_main_slider_learn_how_text,
        form_main_slider_learn_how_text_ru:
          this.settings.data.form_main_slider_learn_how_text_ru,
        form_main_slider_discount_text:
          this.settings.data.form_main_slider_discount_text,
        form_main_slider_discount_text_ru:
          this.settings.data.form_main_slider_discount_text_ru,
        form_main_slider_btn: this.settings.data.form_main_slider_btn,
        form_main_slider_btn_ru: this.settings.data.form_main_slider_btn_ru,
        form_modal_total_cost_text:
          this.settings.data.form_modal_total_cost_text,
        form_modal_total_cost_text_ru:
          this.settings.data.form_modal_total_cost_text_ru,
        form_modal_write_us_text: this.settings.data.form_modal_write_us_text,
        form_modal_write_us_text_ru:
          this.settings.data.form_modal_write_us_text_ru,
        form_modal_mobile_text: this.settings.data.form_modal_mobile_text,
        form_modal_mobile_text_ru: this.settings.data.form_modal_mobile_text_ru,
        form_modal_btn: this.settings.data.form_modal_btn,
        form_modal_btn_ru: this.settings.data.form_modal_btn_ru,
        form_middle_red_section_btn:
          this.settings.data.form_middle_red_section_btn,
        form_middle_red_section_btn_ru:
          this.settings.data.form_middle_red_section_btn_ru,
        form_bottom_red_section_btn:
          this.settings.data.form_bottom_red_section_btn,
        form_bottom_red_section_btn_ru:
          this.settings.data.form_bottom_red_section_btn_ru,
        form_above_contacts_section_btn:
          this.settings.data.form_above_contacts_section_btn,
        form_above_contacts_section_btn_ru:
          this.settings.data.form_above_contacts_section_btn_ru,
      }),
    };
  },

  methods: {
    updateFormTexts() {
      this.form.post(route("settings.save-form-texts"), {
        preserveScroll: true,
        // onSuccess: () => (this.clearPhotoFileInput()),
      });
    },

    // clearPhotoFileInput() {
    //     if (this.$refs.photo?.value) {
    //         this.$refs.photo.value = null;
    //     }
    // },
  },
});
</script>
