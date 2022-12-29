<template>
  <app-layout title="Dashboard">
    <template #header>
      <Breadcrumbs :items="breadcrumbs" />
    </template>

    <Container>
      <Card>
        <form @submit.prevent="saveSlide">
          <!-- Service image -->
          <AppImage
            class="mt-2"
            v-model="form.image"
            :image-url="imageUrl"
            label="Image"
            :error-message="form.errors.image"
          />

          <!-- Title DE -->
          <div class="mt-4">
            <jet-label for="title" value="Title DE" />
            <jet-input
              id="title"
              type="text"
              class="mt-1 block w-full"
              v-model="form.title"
              autocomplete="title"
            />
            <jet-input-error :message="form.errors.title" class="mt-2" />
          </div>

          <!-- Title RU -->
          <div class="mt-4">
            <jet-label for="title_ru" value="Title RU" />
            <jet-input
              id="title_ru"
              type="text"
              class="mt-1 block w-full"
              v-model="form.title_ru"
              autocomplete="title_ru"
            />
            <jet-input-error :message="form.errors.title_ru" class="mt-2" />
          </div>

          <!-- Description DE -->
          <div class="mt-4">
            <jet-label for="description" value="Description DE" />
            <jet-input
              id="description"
              type="text"
              class="mt-1 block w-full"
              v-model="form.description"
              autocomplete="description"
            />
            <jet-input-error :message="form.errors.description" class="mt-2" />
          </div>

          <!-- Description RU -->
          <div class="mt-4">
            <jet-label for="description_ru" value="Description RU" />
            <jet-input
              id="description_ru"
              type="text"
              class="mt-1 block w-full"
              v-model="form.description_ru"
              autocomplete="description_ru"
            />
            <jet-input-error
              :message="form.errors.description_ru"
              class="mt-2"
            />
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
      form: this.$inertia.form({
        _method: this.edit ? "PUT" : "",
        title: "",
        title_ru: "",
        description: "",
        description_ru: "",
        image: null,
      }),
    };
  },

  computed: {
    breadcrumbs() {
      return [
        {
          label: "Main slider",
          url: route("main-slides.index"),
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
            route("main-slides.update", { id: this.slide.data.id })
          )
        : this.form.post(route("main-slides.store"));
    },
  },

  mounted() {
    if (this.edit) {
      this.form.title = this.slide.data.title;
      this.form.title_ru = this.slide.data.title_ru;
      this.form.description = this.slide.data.description;
      this.form.description_ru = this.slide.data.description_ru;
    }
    this.imageUrl = this.slide.data.image_url;
  },
});
</script>
