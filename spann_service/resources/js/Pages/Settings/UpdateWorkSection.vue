<template>
  <jet-form-section @submitted="updateWorkSection">
    <template #title> Work Section </template>

    <template #description> Update Work Section. </template>

    <template #form>
      <!-- HOW WE WORK Section Top Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_top_header"
          value="HOW WE WORK Section Top Header DE"
        />
        <jet-input
          id="work_section_top_header"
          type="text"
          class="mt-1 block w-full"
          v-model="form.work_section_top_header"
          autocomplete="work_section_top_header"
        />
        <jet-input-error
          :message="form.errors.work_section_top_header"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Top Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_top_header_ru"
          value="HOW WE WORK Section Top Header RU"
        />
        <jet-input
          id="work_section_top_header_ru"
          type="text"
          class="mt-1 block w-full"
          v-model="form.work_section_top_header_ru"
          autocomplete="work_section_top_header_ru"
        />
        <jet-input-error
          :message="form.errors.work_section_top_header_ru"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 1 Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_1_header"
          value="HOW WE WORK Section Step 1 Header DE"
        />

        <AppCkeditor v-model="form.work_section_step_1_header"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_1_header"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 1 Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_1_desc"
          value="HOW WE WORK Section Step 1 Description DE"
        />

        <AppCkeditor v-model="form.work_section_step_1_desc"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_1_desc"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 1 Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_1_header_ru"
          value="HOW WE WORK Section Step 1 Header RU"
        />

        <AppCkeditor v-model="form.work_section_step_1_header_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_1_header_ru"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 1 Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_1_desc_ru"
          value="HOW WE WORK Section Step 1 Description RU"
        />

        <AppCkeditor v-model="form.work_section_step_1_desc_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_1_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 2 Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_2_header"
          value="HOW WE WORK Section Step 2 Header DE"
        />

        <AppCkeditor v-model="form.work_section_step_2_header"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_2_header"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 2 Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_2_desc"
          value="HOW WE WORK Section Step 2 Description DE"
        />

        <AppCkeditor v-model="form.work_section_step_2_desc"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_2_desc"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 2 Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_2_header_ru"
          value="HOW WE WORK Section Step 2 Header RU"
        />

        <AppCkeditor v-model="form.work_section_step_2_header_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_2_header_ru"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 2 Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_2_desc_ru"
          value="HOW WE WORK Section Step 2 Description RU"
        />

        <AppCkeditor v-model="form.work_section_step_2_desc_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_2_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 3 Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_3_header"
          value="HOW WE WORK Section Step 3 Header DE"
        />

        <AppCkeditor v-model="form.work_section_step_3_header"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_3_header"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 3 Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_3_desc"
          value="HOW WE WORK Section Step 3 Description DE"
        />

        <AppCkeditor v-model="form.work_section_step_3_desc"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_3_desc"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 3 Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_3_header_ru"
          value="HOW WE WORK Section Step 3 Header RU"
        />

        <AppCkeditor v-model="form.work_section_step_3_header_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_3_header_ru"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 3 Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_3_desc_ru"
          value="HOW WE WORK Section Step 3 Description RU"
        />

        <AppCkeditor v-model="form.work_section_step_3_desc_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_3_desc_ru"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 4 Header DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_4_header"
          value="HOW WE WORK Section Step 4 Header DE"
        />

        <AppCkeditor v-model="form.work_section_step_4_header"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_4_header"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 4 Description DE -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_4_desc"
          value="HOW WE WORK Section Step 4 Description DE"
        />

        <AppCkeditor v-model="form.work_section_step_4_desc"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_4_desc"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 4 Header RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_4_header_ru"
          value="HOW WE WORK Section Step 4 Header RU"
        />

        <AppCkeditor v-model="form.work_section_step_4_header_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_4_header_ru"
          class="mt-2"
        />
      </div>

      <!-- HOW WE WORK Section Step 4 Description RU -->
      <div class="col-span-6 sm:col-span-6">
        <jet-label
          for="work_section_step_4_desc_ru"
          value="HOW WE WORK Section Step 4 Description desc RU"
        />

        <AppCkeditor v-model="form.work_section_step_4_desc_ru"></AppCkeditor>

        <jet-input-error
          :message="form.errors.work_section_step_4_desc_ru"
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
        work_section_step_1_header:
          this.settings.data.work_section_step_1_header,
        work_section_step_1_header_ru:
          this.settings.data.work_section_step_1_header_ru,
        work_section_step_1_desc: this.settings.data.work_section_step_1_desc,
        work_section_step_1_desc_ru:
          this.settings.data.work_section_step_1_desc_ru,
        work_section_step_2_header:
          this.settings.data.work_section_step_2_header,
        work_section_step_2_header_ru:
          this.settings.data.work_section_step_2_header_ru,
        work_section_step_2_desc: this.settings.data.work_section_step_2_desc,
        work_section_step_2_desc_ru:
          this.settings.data.work_section_step_2_desc_ru,
        work_section_step_3_header:
          this.settings.data.work_section_step_3_header,
        work_section_step_3_header_ru:
          this.settings.data.work_section_step_3_header_ru,
        work_section_step_3_desc: this.settings.data.work_section_step_3_desc,
        work_section_step_3_desc_ru:
          this.settings.data.work_section_step_3_desc_ru,
        work_section_step_4_header:
          this.settings.data.work_section_step_4_header,
        work_section_step_4_header_ru:
          this.settings.data.work_section_step_4_header_ru,
        work_section_step_4_desc: this.settings.data.work_section_step_4_desc,
        work_section_step_4_desc_ru:
          this.settings.data.work_section_step_4_desc_ru,
         work_section_top_header:  this.settings.data.work_section_top_header,
         work_section_top_header_ru:  this.settings.data.work_section_top_header_ru,
      }),
    };
  },

  methods: {
    updateWorkSection() {
      this.form.post(route("settings.save-work-section"), {
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
