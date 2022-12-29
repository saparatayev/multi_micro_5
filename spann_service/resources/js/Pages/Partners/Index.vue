<template>
  <app-layout title="Dashboard">
    <template #header>
      <Breadcrumbs :items="breadcrumbs" />
    </template>

    <Container>
      <jet-button :href="route('partners.create')">Add new</jet-button>
      <Card class="mt-4">
        <AppTable :headers="headers" :items="partners">
          <tr v-for="partner in partners.data" :key="partner.id">
            <td>{{ partner.title }}</td>
            <td>
              <div class="flex items-center justify-end space-x-2">
                <EditBtn
                  :url="route('partners.edit', { partner: partner.id })"
                />
                <DeleteBtn
                  :url="route('partners.destroy', { partner: partner.id })"
                  module-name="partner"
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
    partners: {},
  },
  computed: {
    headers() {
      return [
        {
          name: "Title",
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
          label: "Partners",
        },
      ];
    },
  },
});
</script>
