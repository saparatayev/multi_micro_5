<template>
  <jet-form-section @submitted="updateAdvantagesSection">
    <template #title> Advantages Section </template>

    <template #description> Update Advantages Section. </template>

    <template #form>
      <!-- Advantages Section Warranty Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_warranty_header"
          value="Advantages Section Warranty Header DE"
        />

        <AppCkeditor
          v-model="form.advantages_section_warranty_header"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_warranty_header"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Warranty Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_warranty_desc"
          value="Advantages Section Warranty Description DE"
        />

        <AppCkeditor
          v-model="form.advantages_section_warranty_desc"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_warranty_desc"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Warranty Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_warranty_header_ru"
          value="Advantages Section Warranty Header RU"
        />

        <AppCkeditor
          v-model="form.advantages_section_warranty_header_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_warranty_header_ru"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Warranty Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_warranty_desc_ru"
          value="Advantages Section Warranty Description RU"
        />

        <AppCkeditor
          v-model="form.advantages_section_warranty_desc_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_warranty_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Qualified Specialists Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_qual_specs_header"
          value="Advantages Section Qualified Specialists Header DE"
        />

        <AppCkeditor
          v-model="form.advantages_section_qual_specs_header"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_qual_specs_header"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Qualified Specialists Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_qual_specs_desc"
          value="Advantages Section Qualified Specialists Description DE"
        />

        <AppCkeditor
          v-model="form.advantages_section_qual_specs_desc"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_qual_specs_desc"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Qualified Specialists Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_qual_specs_header_ru"
          value="Advantages Section Qualified Specialists Header RU"
        />

        <AppCkeditor
          v-model="form.advantages_section_qual_specs_header_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_qual_specs_header_ru"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Qualified Specialists Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_qual_specs_desc_ru"
          value="Advantages Section Qualified Specialists Description RU"
        />

        <AppCkeditor
          v-model="form.advantages_section_qual_specs_desc_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_qual_specs_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section High Service Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_high_service_header"
          value="Advantages Section High Service Header DE"
        />

        <AppCkeditor
          v-model="form.advantages_section_high_service_header"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_high_service_header"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section High Service Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_high_service_desc"
          value="Advantages Section High Service Description DE"
        />

        <AppCkeditor
          v-model="form.advantages_section_high_service_desc"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_high_service_desc"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section High Service Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_high_service_header_ru"
          value="Advantages Section High Service Header RU"
        />

        <AppCkeditor
          v-model="form.advantages_section_high_service_header_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_high_service_header_ru"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section High Service Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_high_service_desc_ru"
          value="Advantages Section High Service Description RU"
        />

        <AppCkeditor
          v-model="form.advantages_section_high_service_desc_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_high_service_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Available Prices Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_avail_prices_header"
          value="Advantages Section Available Prices Header DE"
        />

        <AppCkeditor
          v-model="form.advantages_section_avail_prices_header"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_avail_prices_header"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Available Prices Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_avail_prices_desc"
          value="Advantages Section Available Prices Description DE"
        />

        <AppCkeditor
          v-model="form.advantages_section_avail_prices_desc"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_avail_prices_desc"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Available Prices Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_avail_prices_header_ru"
          value="Advantages Section Available Prices Header RU"
        />

        <AppCkeditor
          v-model="form.advantages_section_avail_prices_header_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_avail_prices_header_ru"
          class="mt-2"
        />
      </div>

      <!-- Advantages Section Available Prices Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="advantages_section_avail_prices_desc_ru"
          value="Advantages Section Available Description desc RU"
        />

        <AppCkeditor
          v-model="form.advantages_section_avail_prices_desc_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.advantages_section_avail_prices_desc_ru"
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
import AppCkeditor from "@/Components/Ckeditor.vue";

export default defineComponent({
  components: {
    JetActionMessage,
    JetButton,
    JetFormSection,
    JetInput,
    JetInputError,
    JetLabel,
    AppCkeditor,
  },

  props: ["settings"],

  data() {
    return {
      form: this.$inertia.form({
        advantages_section_warranty_header:
          this.settings.data.advantages_section_warranty_header,
        advantages_section_warranty_header_ru:
          this.settings.data.advantages_section_warranty_header_ru,
        advantages_section_warranty_desc:
          this.settings.data.advantages_section_warranty_desc,
        advantages_section_warranty_desc_ru:
          this.settings.data.advantages_section_warranty_desc_ru,
        advantages_section_qual_specs_header:
          this.settings.data.advantages_section_qual_specs_header,
        advantages_section_qual_specs_header_ru:
          this.settings.data.advantages_section_qual_specs_header_ru,
        advantages_section_qual_specs_desc:
          this.settings.data.advantages_section_qual_specs_desc,
        advantages_section_qual_specs_desc_ru:
          this.settings.data.advantages_section_qual_specs_desc_ru,
        advantages_section_high_service_header:
          this.settings.data.advantages_section_high_service_header,
        advantages_section_high_service_header_ru:
          this.settings.data.advantages_section_high_service_header_ru,
        advantages_section_high_service_desc:
          this.settings.data.advantages_section_high_service_desc,
        advantages_section_high_service_desc_ru:
          this.settings.data.advantages_section_high_service_desc_ru,
        advantages_section_avail_prices_header:
          this.settings.data.advantages_section_avail_prices_header,
        advantages_section_avail_prices_header_ru:
          this.settings.data.advantages_section_avail_prices_header_ru,
        advantages_section_avail_prices_desc:
          this.settings.data.advantages_section_avail_prices_desc,
        advantages_section_avail_prices_desc_ru:
          this.settings.data.advantages_section_avail_prices_desc_ru,
      }),
    };
  },

  methods: {
    updateAdvantagesSection() {
      this.form.post(route("settings.save-advantages-section"), {
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
