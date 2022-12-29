<template>
  <jet-form-section @submitted="updateFeedbackSection">
    <template #title> Feedback Section </template>

    <template #description> Update Feedback Section. </template>

    <template #form>
      <!-- Feedback Section Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="feedback_section_header"
          value="Feedback Section Header DE"
        />
        <jet-input
          id="feedback_section_header"
          type="text"
          class="mt-1 block w-full"
          v-model="form.feedback_section_header"
          autocomplete="feedback_section_header"
        />
        <jet-input-error
          :message="form.errors.feedback_section_header"
          class="mt-2"
        />
      </div>

      <!-- Feedback Section Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="feedback_section_header_ru"
          value="Feedback Section Header RU"
        />
        <jet-input
          id="feedback_section_header_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.feedback_section_header_ru"
          autocomplete="feedback_section_header_ru"
        />
        <jet-input-error
          :message="form.errors.feedback_section_header_ru"
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
        feedback_section_header: this.settings.data.feedback_section_header,
        feedback_section_header_ru:
          this.settings.data.feedback_section_header_ru,
      }),
    };
  },

  methods: {
    updateFeedbackSection() {
      this.form.post(route("settings.save-feedback-section"), {
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
