<template>
  <app-layout title="Dashboard">
    <template #header>
      <Breadcrumbs :items="breadcrumbs" />
    </template>

    <Container>
      <jet-button :href="route('services.create')">Add new</jet-button>
      <Card class="mt-4">
        <AppTable :headers="headers" :items="services">
          <tr v-for="service in services.data" :key="service.id">
            <td>{{ service.title }}</td>
            <td>{{ service.title_ru }}</td>
            <td>{{ service.description }}</td>
            <td>{{ service.description_ru }}</td>
            <td>
              <div class="flex items-center justify-end space-x-2">
                <EditBtn
                  :url="route('services.edit', { service: service.id })"
                />
                <DeleteBtn
                  :url="route('services.destroy', { service: service.id })"
                  module-name="service"
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
    services: {},
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
          label: "Services",
        },
      ];
    },
  },
});
</script>
