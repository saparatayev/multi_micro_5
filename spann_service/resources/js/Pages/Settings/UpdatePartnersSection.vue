<template>
  <jet-form-section @submitted="updatePartnersSection">
    <template #title> Partners Section </template>

    <template #description> Update Partners Section. </template>

    <template #form>
      <!-- Partners Section Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="partners_section_header"
          value="Partners Section Header DE"
        />
        <jet-input
          id="partners_section_header"
          type="text"
          class="mt-1 block w-full"
          v-model="form.partners_section_header"
          autocomplete="partners_section_header"
        />
        <jet-input-error
          :message="form.errors.partners_section_header"
          class="mt-2"
        />
      </div>

      <!-- Partners Section Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="partners_section_header_ru"
          value="Partners Section Header RU"
        />
        <jet-input
          id="partners_section_header_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.partners_section_header_ru"
          autocomplete="partners_section_header_ru"
        />
        <jet-input-error
          :message="form.errors.partners_section_header_ru"
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
        partners_section_header: this.settings.data.partners_section_header,
        partners_section_header_ru:
          this.settings.data.partners_section_header_ru,
      }),
    };
  },

  methods: {
    updatePartnersSection() {
      this.form.post(route("settings.save-partners-section"), {
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
