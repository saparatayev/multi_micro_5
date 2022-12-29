<template>
  <jet-form-section @submitted="updateAboutSection">
    <template #title> About Section </template>

    <template #description> Update About Section. </template>

    <template #form>
      <!-- Experience (years) Title DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_experience_title"
          value="Experience (years) Title DE"
        />
        <jet-input
          id="about_section_experience_title"
          type="text"
          class="mt-1 block w-full"
          v-model="form.about_section_experience_title"
          autocomplete="about_section_experience_title"
        />
        <jet-input-error
          :message="form.errors.about_section_experience_title"
          class="mt-2"
        />
      </div>

      <!-- Experience (years) Title RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_experience_title_ru"
          value="Experience (years) Title RU"
        />
        <jet-input
          id="about_section_experience_title_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.about_section_experience_title_ru"
          autocomplete="about_section_experience_title_ru"
        />
        <jet-input-error
          :message="form.errors.about_section_experience_title_ru"
          class="mt-2"
        />
      </div>

      <!-- Experience (years) Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_experience_desc"
          value="Experience (years) Description DE"
        />

        <AppCkeditor v-model="form.about_section_experience_desc"></AppCkeditor>

        <jet-input-error
          :message="form.errors.about_section_experience_desc"
          class="mt-2"
        />
      </div>

      <!-- Experience (years) Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_experience_desc_ru"
          value="Experience (years) Description RU"
        />

        <AppCkeditor
          v-model="form.about_section_experience_desc_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.about_section_experience_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- Number of Customers Title DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_customers_number_title"
          value="Number of Customers Title DE"
        />
        <jet-input
          id="about_section_customers_number_title"
          type="text"
          class="mt-1 block w-full"
          v-model="form.about_section_customers_number_title"
          autocomplete="about_section_customers_number_title"
        />
        <jet-input-error
          :message="form.errors.about_section_customers_number_title"
          class="mt-2"
        />
      </div>

      <!-- Number of Customers Title RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_customers_number_title_ru"
          value="Number of Customers Title RU"
        />
        <jet-input
          id="about_section_customers_number_title_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.about_section_customers_number_title_ru"
          autocomplete="about_section_customers_number_title_ru"
        />
        <jet-input-error
          :message="form.errors.about_section_customers_number_title_ru"
          class="mt-2"
        />
      </div>

      <!-- Number of Customers Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_customers_number_desc"
          value="Number of Customers Description DE"
        />

        <AppCkeditor
          v-model="form.about_section_customers_number_desc"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.about_section_customers_number_desc"
          class="mt-2"
        />
      </div>

      <!-- Number of Customers Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_customers_number_desc_ru"
          value="Number of Customers Description RU"
        />

        <AppCkeditor
          v-model="form.about_section_customers_number_desc_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.about_section_customers_number_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- Installment plan Title DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_plan_title"
          value="Installment plan Title DE"
        />
        <jet-input
          id="about_section_plan_title"
          type="text"
          class="mt-1 block w-full"
          v-model="form.about_section_plan_title"
          autocomplete="about_section_plan_title"
        />
        <jet-input-error
          :message="form.errors.about_section_plan_title"
          class="mt-2"
        />
      </div>

      <!-- Installment plan Title RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_plan_title_ru"
          value="Installment plan Title RU"
        />
        <jet-input
          id="about_section_plan_title_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.about_section_plan_title_ru"
          autocomplete="about_section_plan_title_ru"
        />
        <jet-input-error
          :message="form.errors.about_section_plan_title_ru"
          class="mt-2"
        />
      </div>

      <!-- Installment plan Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_plan_desc"
          value="Installment plan Description DE"
        />

        <AppCkeditor v-model="form.about_section_plan_desc"></AppCkeditor>

        <jet-input-error
          :message="form.errors.about_section_plan_desc"
          class="mt-2"
        />
      </div>

      <!-- Installment plan Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_plan_desc_ru"
          value="Installment plan Description RU"
        />

        <AppCkeditor v-model="form.about_section_plan_desc_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.about_section_plan_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- Post factum payment Title DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_post_pay_title"
          value="Post factum payment Title DE"
        />
        <jet-input
          id="about_section_post_pay_title"
          type="text"
          class="mt-1 block w-full"
          v-model="form.about_section_post_pay_title"
          autocomplete="about_section_post_pay_title"
        />
        <jet-input-error
          :message="form.errors.about_section_post_pay_title"
          class="mt-2"
        />
      </div>

      <!-- Post factum payment Title RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_post_pay_title_ru"
          value="Post factum payment Title RU"
        />
        <jet-input
          id="about_section_post_pay_title_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.about_section_post_pay_title_ru"
          autocomplete="about_section_post_pay_title_ru"
        />
        <jet-input-error
          :message="form.errors.about_section_post_pay_title_ru"
          class="mt-2"
        />
      </div>

      <!-- Post factum payment Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_post_pay_desc"
          value="Post factum payment Description DE"
        />

        <AppCkeditor v-model="form.about_section_post_pay_desc"></AppCkeditor>

        <jet-input-error
          :message="form.errors.about_section_post_pay_desc"
          class="mt-2"
        />
      </div>

      <!-- Post factum payment Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="about_section_post_pay_desc_ru"
          value="Post factum payment Description RU"
        />

        <AppCkeditor
          v-model="form.about_section_post_pay_desc_ru"
        ></AppCkeditor>

        <jet-input-error
          :message="form.errors.about_section_post_pay_desc_ru"
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
        about_section_experience_title:
          this.settings.data.about_section_experience_title,
        about_section_experience_title_ru:
          this.settings.data.about_section_experience_title_ru,
        about_section_experience_desc:
          this.settings.data.about_section_experience_desc,
        about_section_experience_desc_ru:
          this.settings.data.about_section_experience_desc_ru,
        about_section_customers_number_title:
          this.settings.data.about_section_customers_number_title,
        about_section_customers_number_title_ru:
          this.settings.data.about_section_customers_number_title_ru,
        about_section_plan_title: this.settings.data.about_section_plan_title,
        about_section_plan_title_ru:
          this.settings.data.about_section_plan_title_ru,
        about_section_post_pay_title:
          this.settings.data.about_section_post_pay_title,
        about_section_post_pay_title_ru:
          this.settings.data.about_section_post_pay_title_ru,
        about_section_customers_number_desc:
          this.settings.data.about_section_customers_number_desc,
        about_section_customers_number_desc_ru:
          this.settings.data.about_section_customers_number_desc_ru,
        about_section_plan_desc: this.settings.data.about_section_plan_desc,
        about_section_plan_desc_ru:
          this.settings.data.about_section_plan_desc_ru,
        about_section_post_pay_desc:
          this.settings.data.about_section_post_pay_desc,
        about_section_post_pay_desc_ru:
          this.settings.data.about_section_post_pay_desc_ru,
      }),
    };
  },

  methods: {
    updateAboutSection() {
      this.form.post(route("settings.save-about-section"), {
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
