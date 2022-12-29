<template>
  <app-layout title="Dashboard">
    <template #header>
      <Breadcrumbs :items="breadcrumbs" />
    </template>

    <Container>
      <jet-button :href="route('double-slides.create')">Add new</jet-button>
      <Card class="mt-4">
        <AppTable :headers="headers" :items="double_slides">
          <tr v-for="slide in double_slides.data" :key="slide.id">
            <td>{{ slide.title }}</td>
            <td>{{ slide.title_ru }}</td>
            <td>{{ slide.price }}</td>
            <td>
              <div class="flex items-center justify-end space-x-2">
                <EditBtn
                  :url="route('double-slides.edit', { double_slide: slide.id })"
                />
                <DeleteBtn
                  :url="route('double-slides.destroy', { double_slide: slide.id })"
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
    double_slides: {},
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
          name: "Price",
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
          label: "Double slider",
        },
      ];
    },
  },
});
</script>
