<template>
    <jet-form-section @submitted="updateRedFormBlockSection">
        <template #title>
            Red Form Block Section
        </template>

        <template #description>
            Update Red Form Block Section.
        </template>

        <template #form>
            <!-- Red Form Block Section Header DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="red_form_block_section_header" value="Red Form Block Section Header DE" />
                <jet-input id="red_form_block_section_header" type="text" class="mt-1 block w-full" v-model="form.red_form_block_section_header"
                autocomplete="red_form_block_section_header" />
                <jet-input-error :message="form.errors.red_form_block_section_header" class="mt-2" />
            </div>

            <!-- Red Form Block Section Header RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="red_form_block_section_header_ru" value="Red Form Block Section Header RU" />
                <jet-input id="red_form_block_section_header_ru" type="text" class="mt-1 block w-full" v-model="form.red_form_block_section_header_ru"
                autocomplete="red_form_block_section_header_ru" />
                <jet-input-error :message="form.errors.red_form_block_section_header_ru" class="mt-2" />
            </div>

            <!-- Red Form Block Section Description DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="red_form_block_section_desc" value="Red Form Block Section Description DE" />
                <jet-input id="red_form_block_section_desc" type="text" class="mt-1 block w-full" v-model="form.red_form_block_section_desc"
                autocomplete="red_form_block_section_desc" />
                <jet-input-error :message="form.errors.red_form_block_section_desc" class="mt-2" />
            </div>

            <!-- Red Form Block Section Description RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="red_form_block_section_desc_ru" value="Red Form Block Section Description RU" />
                <jet-input id="red_form_block_section_desc_ru" type="text" class="mt-1 block w-full" v-model="form.red_form_block_section_desc_ru"
                autocomplete="red_form_block_section_desc_ru" />
                <jet-input-error :message="form.errors.red_form_block_section_desc_ru" class="mt-2" />
            </div>

            <!-- Red Form Block Section Phone paragraph DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="red_form_block_section_phone" value="Red Form Block Section Phone paragraph DE" />
                <jet-input id="red_form_block_section_phone" type="text" class="mt-1 block w-full" v-model="form.red_form_block_section_phone"
                autocomplete="red_form_block_section_phone" />
                <jet-input-error :message="form.errors.red_form_block_section_phone" class="mt-2" />
            </div>

            <!-- Red Form Block Section Phone paragraph RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="red_form_block_section_phone_ru" value="Red Form Block Section Phone paragraph RU" />
                <jet-input id="red_form_block_section_phone_ru" type="text" class="mt-1 block w-full" v-model="form.red_form_block_section_phone_ru"
                autocomplete="red_form_block_section_phone_ru" />
                <jet-input-error :message="form.errors.red_form_block_section_phone_ru" class="mt-2" />
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
                    red_form_block_section_header: this.settings.data.red_form_block_section_header,
                    red_form_block_section_header_ru: this.settings.data.red_form_block_section_header_ru,
                    red_form_block_section_desc: this.settings.data.red_form_block_section_desc,
                    red_form_block_section_desc_ru: this.settings.data.red_form_block_section_desc_ru,
                    red_form_block_section_phone: this.settings.data.red_form_block_section_phone,
                    red_form_block_section_phone_ru: this.settings.data.red_form_block_section_phone_ru,
                }),
            }
        },

        methods: {
            updateRedFormBlockSection() {
                this.form.post(route('settings.save-red-form-block-section'), {
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
