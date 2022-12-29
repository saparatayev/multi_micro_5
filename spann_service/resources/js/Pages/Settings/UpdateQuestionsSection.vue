<template>
  <jet-form-section @submitted="updateQuestionsSection">
    <template #title> HAVE QUESTIONS Section </template>

    <template #description> Update HAVE QUESTIONS Section. </template>

    <template #form>
      <!-- HAVE QUESTIONS Section Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="questions_section_header"
          value="HAVE QUESTIONS Section Header DE"
        />
        <jet-input
          id="questions_section_header"
          type="text"
          class="mt-1 block w-full"
          v-model="form.questions_section_header"
          autocomplete="questions_section_header"
        />
        <jet-input-error
          :message="form.errors.questions_section_header"
          class="mt-2"
        />
      </div>

      <!-- HAVE QUESTIONS Section Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="questions_section_header_ru"
          value="HAVE QUESTIONS Section Header RU"
        />
        <jet-input
          id="questions_section_header_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.questions_section_header_ru"
          autocomplete="questions_section_header_ru"
        />
        <jet-input-error
          :message="form.errors.questions_section_header_ru"
          class="mt-2"
        />
      </div>

      <!-- HAVE QUESTIONS Section Smaller Text DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="questions_section_desc"
          value="HAVE QUESTIONS Section Smaller Text DE"
        />
        <jet-input
          id="questions_section_desc"
          type="text"
          class="mt-1 block w-full"
          v-model="form.questions_section_desc"
          autocomplete="questions_section_desc"
        />
        <jet-input-error
          :message="form.errors.questions_section_desc"
          class="mt-2"
        />
      </div>

      <!-- HAVE QUESTIONS Section Smaller Text RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="questions_section_desc_ru"
          value="HAVE QUESTIONS Section Smaller Text RU"
        />
        <jet-input
          id="questions_section_desc_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.questions_section_desc_ru"
          autocomplete="questions_section_desc_ru"
        />
        <jet-input-error
          :message="form.errors.questions_section_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- HAVE QUESTIONS Section Phone Text DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="questions_section_phone"
          value="HAVE QUESTIONS Section Phone Text DE"
        />
        <jet-input
          id="questions_section_phone"
          type="text"
          class="mt-1 block w-full"
          v-model="form.questions_section_phone"
          autocomplete="questions_section_phone"
        />
        <jet-input-error
          :message="form.errors.questions_section_phone"
          class="mt-2"
        />
      </div>

      <!-- HAVE QUESTIONS Section Phone Text RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="questions_section_desc_ru"
          value="HAVE QUESTIONS Section Phone Text RU"
        />
        <jet-input
          id="questions_section_phone_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.questions_section_phone_ru"
          autocomplete="questions_section_phone_ru"
        />
        <jet-input-error
          :message="form.errors.questions_section_phone_ru"
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
        questions_section_header: this.settings.data.questions_section_header,
        questions_section_header_ru:
          this.settings.data.questions_section_header_ru,
        questions_section_desc: this.settings.data.questions_section_desc,
        questions_section_desc_ru: this.settings.data.questions_section_desc_ru,
        questions_section_phone: this.settings.data.questions_section_phone,
        questions_section_phone_ru:
          this.settings.data.questions_section_phone_ru,
      }),
    };
  },

  methods: {
    updateQuestionsSection() {
      this.form.post(route("settings.save-questions-section"), {
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
