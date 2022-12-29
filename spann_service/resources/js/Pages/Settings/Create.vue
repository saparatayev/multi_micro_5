<template>
  <app-layout title="Profile">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Settings
      </h2>
    </template>

    <div>
      <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <UpdateAdminContactsData :settings="settings" />

        <jet-section-border />

        <UpdateMenu :settings="settings" />

        <jet-section-border />

        <UpdateHeaderData :settings="settings" />

        <jet-section-border />

        <UpdateContactsData :settings="settings" />

        <jet-section-border />

        <UpdateForms :settings="settings" />

        <jet-section-border />

        <UpdateAboutSection :settings="settings" />

        <jet-section-border />

        <UpdateServicesSection :settings="settings" />

        <jet-section-border />

        <UpdateRedFormBlockSection :settings="settings" />

        <jet-section-border />

        <UpdateGallerySection :settings="settings" />

        <jet-section-border />

        <UpdateAdvantagesSection :settings="settings" />

        <jet-section-border />

        <UpdateWorkSection :settings="settings" />

        <jet-section-border />

        <UpdateFeedbackSection :settings="settings" />

        <jet-section-border />

        <UpdatePartnersSection :settings="settings" />

        <jet-section-border />

        <UpdateQuestionsSection :settings="settings" />

        <jet-section-border />

        <UpdateFooterSection :settings="settings" />
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import UpdateContactsData from "./UpdateContactsData.vue";
import UpdateMenu from "./UpdateMenu.vue";
import UpdateHeaderData from "./UpdateHeaderData.vue";
import UpdateForms from "./UpdateForms.vue";
import UpdateAboutSection from "./UpdateAboutSection.vue";
import UpdateServicesSection from "./UpdateServicesSection.vue";
import UpdateRedFormBlockSection from "./UpdateRedFormBlockSection.vue";
import UpdateGallerySection from "./UpdateGallerySection.vue";
import UpdateAdvantagesSection from "./UpdateAdvantagesSection.vue";
import UpdateWorkSection from "./UpdateWorkSection.vue";
import UpdateFeedbackSection from "./UpdateFeedbackSection.vue";
import UpdatePartnersSection from "./UpdatePartnersSection.vue";
import UpdateQuestionsSection from "./UpdateQuestionsSection.vue";
import UpdateFooterSection from "./UpdateFooterSection.vue";
import UpdateAdminContactsData from "./UpdateAdminContactsData.vue";
import JetSectionBorder from "@/Jetstream/SectionBorder.vue";

export default defineComponent({
  props: ["settings"],

  components: {
    AppLayout,
    UpdateContactsData,
    UpdateMenu,
    UpdateHeaderData,
    UpdateForms,
    UpdateAboutSection,
    UpdateServicesSection,
    UpdateRedFormBlockSection,
    UpdateGallerySection,
    UpdateAdvantagesSection,
    UpdateWorkSection,
    UpdateFeedbackSection,
    UpdatePartnersSection,
    UpdateQuestionsSection,
    UpdateFooterSection,
    UpdateAdminContactsData,
    JetSectionBorder,
  },
});
</script>
