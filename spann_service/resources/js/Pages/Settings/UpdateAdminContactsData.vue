<template>
  <jet-form-section @submitted="updateAboutSection">
    <template #title> Admin Contacts Info </template>

    <template #description> Update Admin Contacts Info. </template>

    <template #form>
      <!-- Admin Email -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="admin_email" value="Admin Email" />
        <jet-input
          id="admin_email"
          type="text"
          class="mt-1 block w-full"
          v-model="form.admin_email"
          autocomplete="admin_email"
        />
        <jet-input-error :message="form.errors.admin_email" class="mt-2" />
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
        admin_email: this.settings.data.admin_email,
      }),
    };
  },

  methods: {
    updateAboutSection() {
      this.form.post(route("settings.save-admin-contacts"), {
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
