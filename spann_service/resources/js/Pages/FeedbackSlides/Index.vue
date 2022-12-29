<template>
  <app-layout title="Dashboard">
    <template #header>
      <Breadcrumbs :items="breadcrumbs" />
    </template>

    <Container>
      <jet-button :href="route('feedback-slides.create')">Add new</jet-button>
      <Card class="mt-4">
        <AppTable :headers="headers" :items="feedback_slides">
          <tr v-for="slide in feedback_slides.data" :key="slide.id">
            <td>{{ slide.name }}</td>
            <td>{{ slide.name_ru }}</td>
            <td>{{ slide.city }}</td>
            <td>{{ slide.city_ru }}</td>
            <td>{{ slide.youtube_link }}</td>
            <td>
              <div class="flex items-center justify-end space-x-2">
                <EditBtn
                  :url="route('feedback-slides.edit', { feedback_slide: slide.id })"
                />
                <DeleteBtn
                  :url="route('feedback-slides.destroy', { feedback_slide: slide.id })"
                  module-name="slide"
                />
              </div>
            </td>
          </tr>
        </AppTable>
      </Card>
    </Container>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import EditBtn from "@/Components/EditBtn.vue";
import DeleteBtn from "@/Components/DeleteBtn.vue";
import AppTable from "@/Components/Table";
import Container from "@/Components/Container";
import Card from "@/Components/Card";
import JetButton from "@/Jetstream/Button";
import Breadcrumbs from "@/Components/Breadcrumbs";

export default defineComponent({
  components: {
    AppLayout,
    EditBtn,
    DeleteBtn,
    AppTable,
    JetButton,
    Container,
    Card,
    Breadcrumbs,
  },
  props: {
    feedback_slides: {},
  },
  computed: {
    headers() {
      return [
        {
          name: "Name DE",
        },
        {
          name: "Name RU",
        },
        {
          name: "City DE",
        },
        {
          name: "City RU",
        },
        {
          name: "Youtube link",
        },
        {
          name: "Action",
          class: "text-right",
        },
      ];
    },
    breadcrumbs() {
      return [
        {
          label: "Feedback slider",
        },
      ];
    },
  },
});
</script>
