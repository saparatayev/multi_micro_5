<template>
  <jet-form-section @submitted="updateGallerySection">
    <template #title> Gallery Section </template>

    <template #description> Update Gallery Section. </template>

    <template #form>
      <!-- Gallery Section Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_section_header"
          value="Gallery Section Header DE"
        />
        <jet-input
          id="gallery_section_header"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_section_header"
          autocomplete="gallery_section_header"
        />
        <jet-input-error
          :message="form.errors.gallery_section_header"
          class="mt-2"
        />
      </div>

      <!-- Gallery Section Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_section_header_ru"
          value="Gallery Section Header RU"
        />
        <jet-input
          id="gallery_section_header_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_section_header_ru"
          autocomplete="gallery_section_header_ru"
        />
        <jet-input-error
          :message="form.errors.gallery_section_header_ru"
          class="mt-2"
        />
      </div>

      <!-- Gallery Section Zoom Button DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_section_zoom_btn"
          value="Gallery Section Zoom Button DE"
        />
        <jet-input
          id="gallery_section_zoom_btn"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_section_zoom_btn"
          autocomplete="gallery_section_zoom_btn"
        />
        <jet-input-error
          :message="form.errors.gallery_section_zoom_btn"
          class="mt-2"
        />
      </div>

      <!-- Gallery Section Zoom Button RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_section_zoom_btn_ru"
          value="Gallery Section Zoom Button RU"
        />
        <jet-input
          id="gallery_section_zoom_btn_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_section_zoom_btn_ru"
          autocomplete="gallery_section_zoom_btn_ru"
        />
        <jet-input-error
          :message="form.errors.gallery_section_zoom_btn_ru"
          class="mt-2"
        />
      </div>

      <!-- Gallery Item Black Button DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_item_black_btn"
          value="Gallery Item Black Button DE"
        />
        <jet-input
          id="gallery_item_black_btn"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_item_black_btn"
          autocomplete="gallery_item_black_btn"
        />
        <jet-input-error
          :message="form.errors.gallery_item_black_btn"
          class="mt-2"
        />
      </div>

      <!-- Gallery Item Black Button RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_item_black_btn_ru"
          value="Gallery Item Black Button RU"
        />
        <jet-input
          id="gallery_item_black_btn_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_item_black_btn_ru"
          autocomplete="gallery_item_black_btn_ru"
        />
        <jet-input-error
          :message="form.errors.gallery_item_black_btn_ru"
          class="mt-2"
        />
      </div>

      <!-- Gallery Item Price FROM Text DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_item_price_from_text"
          value="Gallery Item Price FROM Text DE"
        />
        <jet-input
          id="gallery_item_price_from_text"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_item_price_from_text"
          autocomplete="gallery_item_price_from_text"
        />
        <jet-input-error
          :message="form.errors.gallery_item_price_from_text"
          class="mt-2"
        />
      </div>

      <!-- Gallery Item Price FROM Text RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_item_price_from_text_ru"
          value="Gallery Item Price FROM Text RU"
        />
        <jet-input
          id="gallery_item_price_from_text_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_item_price_from_text_ru"
          autocomplete="gallery_item_price_from_text_ru"
        />
        <jet-input-error
          :message="form.errors.gallery_item_price_from_text_ru"
          class="mt-2"
        />
      </div>

      <!-- Gallery Item Price Currency DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_item_price_currency"
          value="Gallery Item Price Currency DE"
        />
        <jet-input
          id="gallery_item_price_currency"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_item_price_currency"
          autocomplete="gallery_item_price_currency"
        />
        <jet-input-error
          :message="form.errors.gallery_item_price_currency"
          class="mt-2"
        />
      </div>

      <!-- Gallery Item Price Currency RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="gallery_item_price_currency_ru"
          value="Gallery Item Price Currency RU"
        />
        <jet-input
          id="gallery_item_price_currency_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.gallery_item_price_currency_ru"
          autocomplete="gallery_item_price_currency_ru"
        />
        <jet-input-error
          :message="form.errors.gallery_item_price_currency_ru"
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
        gallery_section_header: this.settings.data.gallery_section_header,
        gallery_section_header_ru: this.settings.data.gallery_section_header_ru,
        gallery_section_zoom_btn: this.settings.data.gallery_section_zoom_btn,
        gallery_section_zoom_btn_ru:
          this.settings.data.gallery_section_zoom_btn_ru,
        gallery_item_black_btn: this.settings.data.gallery_item_black_btn,
        gallery_item_black_btn_ru:
          this.settings.data.gallery_item_black_btn_ru,
        gallery_item_price_from_text:
          this.settings.data.gallery_item_price_from_text,
        gallery_item_price_from_text_ru:
          this.settings.data.gallery_item_price_from_text_ru,
        gallery_item_price_currency:
          this.settings.data.gallery_item_price_currency,
        gallery_item_price_currency_ru:
          this.settings.data.gallery_item_price_currency,
      }),
    };
  },

  methods: {
    updateGallerySection() {
      this.form.post(route("settings.save-gallery-section"), {
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
