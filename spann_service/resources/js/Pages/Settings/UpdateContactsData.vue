<template>
  <jet-form-section @submitted="updateContactsInformation">
    <template #title> Contacts Section Information </template>

    <template #description> Update the Contacts Section Information. </template>

    <template #form>
      <!-- Profile Photo -->
      <!-- <div class="col-span-6 sm:col-span-4" v-if="$page.props.jetstream.managesProfilePhotos"> -->
      <div class="col-span-6 sm:col-span-4">
        <AppImage
          :image-url="settings.data.map_image_url"
          label="Map Image"
          :error-message="form.errors.map_image"
          v-model="form.map_image"
        />
      </div>

      <!-- Title DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="title" value="Title DE" />
        <jet-input
          id="title"
          type="text"
          class="mt-1 block w-full"
          v-model="form.contact_title"
          autocomplete="title"
        />
        <jet-input-error :message="form.errors.contact_title" class="mt-2" />
      </div>

      <!-- Title RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="title_ru" value="Title RU" />
        <jet-input
          id="title_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.contact_title_ru"
          autocomplete="title_ru"
        />
        <jet-input-error :message="form.errors.contact_title_ru" class="mt-2" />
      </div>

      <!-- Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="description" value="Description DE" />
        <jet-input
          id="description"
          type="text"
          class="mt-1 block w-full"
          v-model="form.contact_description"
        />
        <jet-input-error
          :message="form.errors.contact_description"
          class="mt-2"
        />
      </div>

      <!-- Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="description_ru" value="Description RU" />
        <jet-input
          id="description_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.contact_description_ru"
        />
        <jet-input-error
          :message="form.errors.contact_description_ru"
          class="mt-2"
        />
      </div>

      <!-- Address DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="address" value="Address DE" />

        <AppCkeditor v-model="form.contact_address"></AppCkeditor>

        <jet-input-error :message="form.errors.contact_address" class="mt-2" />
      </div>

      <!-- Address RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="address_ru" value="Address RU" />

        <AppCkeditor v-model="form.contact_address_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.contact_address_ru"
          class="mt-2"
        />
      </div>

      <!-- Phone 1 -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="phone_1" value="Phone 1" />
        <jet-input
          id="phone_1"
          type="text"
          class="mt-1 block w-full"
          v-model="form.contact_phone_1"
        />
        <jet-input-error :message="form.errors.contact_phone_1" class="mt-2" />
      </div>

      <!-- Phone 2 -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="phone_2" value="Phone 2" />
        <jet-input
          id="phone_2"
          type="text"
          class="mt-1 block w-full"
          v-model="form.contact_phone_2"
        />
        <jet-input-error :message="form.errors.contact_phone_2" class="mt-2" />
      </div>

      <!-- Schedule DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="schedule" value="Schedule DE" />

        <AppCkeditor v-model="form.contact_schedule"></AppCkeditor>

        <jet-input-error :message="form.errors.contact_schedule" class="mt-2" />
      </div>

      <!-- Schedule RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="schedule_ru" value="Schedule RU" />

        <AppCkeditor v-model="form.contact_schedule_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.contact_schedule_ru"
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
import JetSecondaryButton from "@/Jetstream/SecondaryButton.vue";
import AppTextarea from "@/Components/Textarea.vue";
import AppImage from "@/Components/Image.vue";
import AppCkeditor from "@/Components/Ckeditor.vue";

export default defineComponent({
  components: {
    JetActionMessage,
    JetButton,
    JetFormSection,
    JetInput,
    JetInputError,
    JetLabel,
    JetSecondaryButton,
    AppTextarea,
    AppImage,
    AppCkeditor,
  },

  props: ["settings"],

  data() {
    return {
      form: this.$inertia.form({
        contact_title: this.settings.data.contact_title,
        contact_title_ru: this.settings.data.contact_title_ru,
        contact_description: this.settings.data.contact_description,
        contact_description_ru: this.settings.data.contact_description_ru,
        contact_address: this.settings.data.contact_address,
        contact_address_ru: this.settings.data.contact_address_ru,
        contact_phone_1: this.settings.data.contact_phone_1,
        contact_phone_2: this.settings.data.contact_phone_2,
        contact_schedule: this.settings.data.contact_schedule,
        contact_schedule_ru: this.settings.data.contact_schedule_ru,
        map_image: null,
      }),
    };
  },

  methods: {
    updateContactsInformation() {
      this.form.post(route("settings.save-contacts"), {
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
