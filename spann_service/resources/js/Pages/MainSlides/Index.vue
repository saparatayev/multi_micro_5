<template>
  <app-layout title="Dashboard">
    <template #header>
      <Breadcrumbs :items="breadcrumbs" />
    </template>

    <Container>
      <jet-button :href="route('main-slides.create')">Add new</jet-button>
      <Card class="mt-4">
        <AppTable :headers="headers" :items="main_slides">
          <tr v-for="slide in main_slides.data" :key="slide.id">
            <td>{{ slide.title }}</td>
            <td>{{ slide.title_ru }}</td>
            <td>{{ slide.description }}</td>
            <td>{{ slide.description_ru }}</td>
            <td>
              <div class="flex items-center justify-end space-x-2">
                <EditBtn
                  :url="route('main-slides.edit', { main_slide: slide.id })"
                />
                <DeleteBtn
                  :url="route('main-slides.destroy', { main_slide: slide.id })"
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
    main_slides: {},
  },
  computed: {
    headers() {
      return [
        {
          name: "Title DE",
        },
        {
          name: "Title RU",
        },
        {
          name: "Description DE",
        },
        {
          name: "Description RU",
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
          label: "Main slider",
        },
      ];
    },
  },
});
</script>
