<template>
    <jet-form-section @submitted="updateServicesSection">
        <template #title>
            Services Section
        </template>

        <template #description>
            Update Services Section.
        </template>

        <template #form>
            <!-- Services Section Header DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="services_section_header" value="Services Section Header DE" />
                <jet-input id="services_section_header" type="text" class="mt-1 block w-full" v-model="form.services_section_header"
                autocomplete="services_section_header" />
                <jet-input-error :message="form.errors.services_section_header" class="mt-2" />
            </div>

            <!-- Services Section Header RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="services_section_header_ru" value="Services Section Header RU" />
                <jet-input id="services_section_header_ru" type="text" class="mt-1 block w-full" v-model="form.services_section_header_ru"
                autocomplete="services_section_header_ru" />
                <jet-input-error :message="form.errors.services_section_header_ru" class="mt-2" />
            </div>

            <!-- Service Hover Red Button DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="services_section_red_btn" value="Service Hover Red Button DE" />
                <jet-input id="services_section_red_btn" type="text" class="mt-1 block w-full" v-model="form.services_section_red_btn"
                autocomplete="services_section_red_btn" />
                <jet-input-error :message="form.errors.services_section_red_btn" class="mt-2" />
            </div>

            <!-- Service Hover Red Button RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="services_section_red_btn_ru" value="Service Hover Red Button RU" />
                <jet-input id="services_section_red_btn_ru" type="text" class="mt-1 block w-full" v-model="form.services_section_red_btn_ru"
                autocomplete="services_section_red_btn_ru" />
                <jet-input-error :message="form.errors.services_section_red_btn_ru" class="mt-2" />
            </div>
        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetInputError from '@/Jetstream/InputError.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'

    export default defineComponent({
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
        },

        props: ['settings'],

        data() {
            return {
                form: this.$inertia.form({
                    services_section_header: this.settings.data.services_section_header,
                    services_section_header_ru: this.settings.data.services_section_header_ru,
                    services_section_red_btn: this.settings.data.services_section_red_btn,
                    services_section_red_btn_ru: this.settings.data.services_section_red_btn_ru,
                }),
            }
        },

        methods: {
            updateServicesSection() {
                this.form.post(route('settings.save-services-section'), {
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
    })
</script>
