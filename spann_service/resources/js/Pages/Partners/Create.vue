<template>
  <app-layout title="Dashboard">
    <template #header>
      <Breadcrumbs :items="breadcrumbs" />
    </template>

    <Container>
      <Card>
        <form @submit.prevent="saveService">
          <!-- Service image -->
          <AppImage
            class="mt-2"
            v-model="form.image"
            :image-url="imageUrl"
            label="Image"
            :error-message="form.errors.image"
          />

          <!-- Title -->
          <div class="mt-4">
            <jet-label for="title" value="Title" />
            <jet-input
              id="title"
              type="text"
              class="mt-1 block w-full"
              v-model="form.title"
              autocomplete="title"
            />
            <jet-input-error :message="form.errors.title" class="mt-2" />
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
    partner: Object,
  },

  data() {
    return {
      imageUrl: "",
      form: this.$inertia.form({
        _method: this.edit ? "PUT" : "",
        title: "",
        image: null,
      }),
    };
  },

  computed: {
    breadcrumbs() {
      return [
        {
          label: "Partners",
          url: route("partners.index"),
        },
        {
          label: `${this.edit ? "Edit" : "Add"} partner`,
        },
      ];
    },
  },

  methods: {
    saveService() {
      this.edit
        ? this.form.post(route("partners.update", { id: this.partner.data.id }))
        : this.form.post(route("partners.store"));
    },
  },

  mounted() {
    if (this.edit) {
      this.form.title = this.partner.data.title;
    }
    this.imageUrl = this.partner.data.image_url;
  },
});
</script>
