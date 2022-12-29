<template>
    <jet-form-section @submitted="updateHeaderInformation">
        <template #title>
            Header Information
        </template>

        <template #description>
            Update Header Information.
        </template>

        <template #form>
            <!-- Big header title DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="big_header_title" value="Big header title DE" />
                <jet-input id="big_header_title" type="text" class="mt-1 block w-full" v-model="form.big_header_title"
                autocomplete="big_header_title" />
                <jet-input-error :message="form.errors.big_header_title" class="mt-2" />
            </div>

            <!-- Big header title RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="big_header_title_ru" value="Big header title RU" />
                <jet-input id="big_header_title_ru" type="text" class="mt-1 block w-full" v-model="form.big_header_title_ru"
                autocomplete="big_header_title_ru" />
                <jet-input-error :message="form.errors.big_header_title_ru" class="mt-2" />
            </div>

            <!-- Header Schedule DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="header_schedule" value="Header Schedule DE" />
                <jet-input id="header_schedule" type="text" class="mt-1 block w-full" v-model="form.header_schedule"
                autocomplete="header_schedule" />
                <jet-input-error :message="form.errors.header_schedule" class="mt-2" />
            </div>

            <!-- Header Schedule RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="header_schedule_ru" value="Header Schedule RU" />
                <jet-input id="header_schedule_ru" type="text" class="mt-1 block w-full" v-model="form.header_schedule_ru"
                autocomplete="header_schedule_ru" />
                <jet-input-error :message="form.errors.header_schedule_ru" class="mt-2" />
            </div>

            <!-- Big Red Header Button DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="big_red_header_btn" value="Big Red Header Button DE" />
                <jet-input id="big_red_header_btn" type="text" class="mt-1 block w-full" v-model="form.big_red_header_btn"
                autocomplete="big_red_header_btn" />
                <jet-input-error :message="form.errors.big_red_header_btn" class="mt-2" />
            </div>

            <!-- Big Red Header Button RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="big_red_header_btn_ru" value="Big Red Header Button RU" />
                <jet-input id="big_red_header_btn_ru" type="text" class="mt-1 block w-full" v-model="form.big_red_header_btn_ru"
                autocomplete="big_red_header_btn_ru" />
                <jet-input-error :message="form.errors.big_red_header_btn_ru" class="mt-2" />
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
                    big_header_title: this.settings.data.big_header_title,
                    big_header_title_ru: this.settings.data.big_header_title_ru,
                    header_schedule: this.settings.data.header_schedule,
                    header_schedule_ru: this.settings.data.header_schedule_ru,
                    big_red_header_btn: this.settings.data.big_red_header_btn,
                    big_red_header_btn_ru: this.settings.data.big_red_header_btn_ru,
                }),
            }
        },

        methods: {
            updateHeaderInformation() {
                this.form.post(route('settings.save-header'), {
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
