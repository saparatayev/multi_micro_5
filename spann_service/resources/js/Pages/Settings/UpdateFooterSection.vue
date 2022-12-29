<template>
  <jet-form-section @submitted="updateFooterSection">
    <template #title> Footer Section </template>

    <template #description> Update Footer Section. </template>

    <template #form>
      <!-- Vkontakte Link -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="vk_link" value="Vkontakte Link" />
        <jet-input
          id="vk_link"
          type="text"
          class="mt-1 block w-full"
          v-model="form.vk_link"
          autocomplete="vk_link"
        />
        <jet-input-error :message="form.errors.vk_link" class="mt-2" />
      </div>

      <!-- Facebook Link -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="facebook_link" value="Facebook Link" />
        <jet-input
          id="facebook_link"
          type="text"
          class="mt-1 block w-full"
          v-model="form.facebook_link"
          autocomplete="facebook_link"
        />
        <jet-input-error :message="form.errors.facebook_link" class="mt-2" />
      </div>

      <!-- Odnoklassniki Link -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="ok_link" value="Odnoklassniki Link" />
        <jet-input
          id="ok_link"
          type="text"
          class="mt-1 block w-full"
          v-model="form.ok_link"
          autocomplete="ok_link"
        />
        <jet-input-error :message="form.errors.ok_link" class="mt-2" />
      </div>

      <!-- Instagram Link -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="insta_link" value="Instagram Link" />
        <jet-input
          id="insta_link"
          type="text"
          class="mt-1 block w-full"
          v-model="form.insta_link"
          autocomplete="insta_link"
        />
        <jet-input-error :message="form.errors.insta_link" class="mt-2" />
      </div>

      <!-- YouTube Link -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="youtube_link" value="YouTube Link" />
        <jet-input
          id="youtube_link"
          type="text"
          class="mt-1 block w-full"
          v-model="form.youtube_link"
          autocomplete="youtube_link"
        />
        <jet-input-error :message="form.errors.youtube_link" class="mt-2" />
      </div>

      <!-- Footer Modal Button DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="footer_modal_btn" value="Footer Modal Button DE" />
        <jet-input
          id="footer_modal_btn"
          type="text"
          class="mt-1 block w-full"
          v-model="form.footer_modal_btn"
          autocomplete="footer_modal_btn"
        />
        <jet-input-error :message="form.errors.footer_modal_btn" class="mt-2" />
      </div>

      <!-- Footer Modal Button RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label for="footer_modal_btn_ru" value="Footer Modal Button RU" />
        <jet-input
          id="footer_modal_btn_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.footer_modal_btn_ru"
          autocomplete="footer_modal_btn_ru"
        />
        <jet-input-error :message="form.errors.footer_modal_btn_ru" class="mt-2" />
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
        vk_link: this.settings.data.vk_link,
        facebook_link: this.settings.data.facebook_link,
        ok_link: this.settings.data.ok_link,
        insta_link: this.settings.data.insta_link,
        youtube_link: this.settings.data.youtube_link,
        footer_modal_btn: this.settings.data.footer_modal_btn,
        footer_modal_btn_ru: this.settings.data.footer_modal_btn_ru,
      }),
    };
  },

  methods: {
    updateFooterSection() {
      this.form.post(route("settings.save-footer-section"), {
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
