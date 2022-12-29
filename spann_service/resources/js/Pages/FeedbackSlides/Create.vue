<template>
  <app-layout title="Dashboard">
    <template #header>
      <Breadcrumbs :items="breadcrumbs" />
    </template>

    <Container>
      <Card>
        <form @submit.prevent="saveSlide">
          <!-- Feedback image image -->
          <AppImage
            class="mt-2"
            v-model="form.image"
            :image-url="imageUrl"
            label="Feedback Image"
            :error-message="form.errors.image"
          />

          <!-- Feedback image image -->
          <AppImage
            class="mt-4"
            v-model="form.image_customer"
            :image-url="imageCustomerUrl"
            label="Customer Image"
            :error-message="form.errors.image_customer"
          />

          <!-- Name DE -->
          <div class="mt-4">
            <jet-label for="name" value="Name DE" />
            <jet-input
              id="name"
              type="text"
              class="mt-1 block w-full"
              v-model="form.name"
              autocomplete="name"
            />
            <jet-input-error :message="form.errors.name" class="mt-2" />
          </div>

          <!-- Name RU -->
          <div class="mt-4">
            <jet-label for="name_ru" value="Name RU" />
            <jet-input
              id="name_ru"
              type="text"
              class="mt-1 block w-full"
              v-model="form.name_ru"
              autocomplete="name_ru"
            />
            <jet-input-error :message="form.errors.name_ru" class="mt-2" />
          </div>

          <!-- City DE -->
          <div class="mt-4">
            <jet-label for="city" value="City DE" />
            <jet-input
              id="city"
              type="text"
              class="mt-1 block w-full"
              v-model="form.city"
              autocomplete="city"
            />
            <jet-input-error :message="form.errors.city" class="mt-2" />
          </div>

          <!-- City RU -->
          <div class="mt-4">
            <jet-label for="city_ru" value="City RU" />
            <jet-input
              id="city_ru"
              type="text"
              class="mt-1 block w-full"
              v-model="form.city_ru"
              autocomplete="city_ru"
            />
            <jet-input-error :message="form.errors.city_ru" class="mt-2" />
          </div>

          <!-- Youtube link -->
          <div class="mt-4">
            <jet-label for="youtube_link" value="Youtube link" />
            <jet-input
              id="youtube_link"
              type="text"
              class="mt-1 block w-full"
              v-model="form.youtube_link"
              autocomplete="youtube_link"
            />
            <jet-input-error :message="form.errors.youtube_link" class="mt-2" />
          </div>

          <!-- Feedback -->
          <div class="mt-4">
            <jet-label for="feedback" value="Feedback" />
            <jet-input
              id="feedback"
              type="text"
              class="mt-1 block w-full"
              v-model="form.feedback"
              autocomplete="feedback"
            />
            <jet-input-error :message="form.errors.feedback" class="mt-2" />
          </div>

          <div class="mt-4">
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
              <span v-if="edit">Updated.</span>
              <span v-else>Saved.</span>
            </jet-action-message>

            <jet-button
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              <span v-if="edit">Update</span>
              <span v-else>Save</span>
            </jet-button>
          </div>
        </form>
      </Card>
    </Container>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetButton from "@/Jetstream/Button.vue";
import JetActionMessage from "@/Jetstream/ActionMessage.vue";
import Container from "@/Components/Container";
import Card from "@/Components/Card";
import Breadcrumbs from "@/Components/Breadcrumbs";
import AppImage from "@/Components/Image.vue";

export default defineComponent({
  components: {
    AppLayout,
    JetInput,
    JetInputError,
    JetLabel,
    JetButton,
    JetActionMessage,
    Container,
    Card,
    Breadcrumbs,
    AppImage,
  },

  props: {
    edit: Boolean,
    slide: Object,
  },

  data() {
    return {
      imageUrl: "",
      imageCustomerUrl: "",
      form: this.$inertia.form({
        _method: this.edit ? "PUT" : "",
        name: "",
        name_ru: "",
        city: "",
        city_ru: "",
        youtube_link: "",
        feedback: "",
        image: null,
        image_customer: null,
      }),
    };
  },

  computed: {
    breadcrumbs() {
      return [
        {
          label: "Feedback slider",
          url: route("feedback-slides.index"),
        },
        {
          label: `${this.edit ? "Edit" : "Add"} slide`,
        },
      ];
    },
  },

  methods: {
    saveSlide() {
      this.edit
        ? this.form.post(
            route("feedback-slides.update", { id: this.slide.data.id })
          )
        : this.form.post(route("feedback-slides.store"));
    },
  },

  mounted() {
    if (this.edit) {
      this.form.name = this.slide.data.name;
      this.form.name_ru = this.slide.data.name_ru;
      this.form.city = this.slide.data.city;
      this.form.city_ru = this.slide.data.city_ru;
      this.form.youtube_link = this.slide.data.youtube_link;
      this.form.feedback = this.slide.data.feedback;
    }
    this.imageUrl = this.slide.data.image_url;
    this.imageCustomerUrl = this.slide.data.image_customer_url;
  },
});
</script>
