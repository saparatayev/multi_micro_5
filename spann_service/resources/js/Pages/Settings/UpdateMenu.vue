<template>
    <jet-form-section @submitted="updateMenu">
        <template #title>
            Menu items
        </template>

        <template #description>
            Update Menu items.
        </template>

        <template #form>
            <!-- Menu item Home DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="menu_item_home" value="Menu item Home DE" />
                <jet-input id="menu_item_home" type="text" class="mt-1 block w-full" v-model="form.menu_item_home"
                autocomplete="menu_item_home" />
                <jet-input-error :message="form.errors.menu_item_home" class="mt-2" />
            </div>

            <!-- Menu item Home RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="menu_item_home_ru" value="Menu item Home RU" />
                <jet-input id="menu_item_home_ru" type="text" class="mt-1 block w-full" v-model="form.menu_item_home_ru"
                autocomplete="menu_item_home_ru" />
                <jet-input-error :message="form.errors.menu_item_home_ru" class="mt-2" />
            </div>

            <!-- Menu item Services DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="menu_item_services" value="Menu item Services DE" />
                <jet-input id="menu_item_services" type="text" class="mt-1 block w-full" v-model="form.menu_item_services"
                autocomplete="menu_item_services" />
                <jet-input-error :message="form.errors.menu_item_services" class="mt-2" />
            </div>

            <!-- Menu item Services RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="menu_item_services_ru" value="Menu item Services RU" />
                <jet-input id="menu_item_services_ru" type="text" class="mt-1 block w-full" v-model="form.menu_item_services_ru"
                autocomplete="menu_item_services_ru" />
                <jet-input-error :message="form.errors.menu_item_services_ru" class="mt-2" />
            </div>

            <!-- Menu item Gallery DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="menu_item_gallery" value="Menu item Gallery DE" />
                <jet-input id="menu_item_gallery" type="text" class="mt-1 block w-full" v-model="form.menu_item_gallery"
                autocomplete="menu_item_gallery" />
                <jet-input-error :message="form.errors.menu_item_gallery" class="mt-2" />
            </div>

            <!-- Menu item Gallery RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="menu_item_gallery_ru" value="Menu item Gallery RU" />
                <jet-input id="menu_item_gallery_ru" type="text" class="mt-1 block w-full" v-model="form.menu_item_gallery_ru"
                autocomplete="menu_item_gallery_ru" />
                <jet-input-error :message="form.errors.menu_item_gallery_ru" class="mt-2" />
            </div>

            <!-- Menu item Contacts DE -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="menu_item_contacts" value="Menu item Contacts DE" />
                <jet-input id="menu_item_contacts" type="text" class="mt-1 block w-full" v-model="form.menu_item_contacts"
                autocomplete="menu_item_contacts" />
                <jet-input-error :message="form.errors.menu_item_contacts" class="mt-2" />
            </div>

            <!-- Menu item Contacts RU -->
            <div class="col-span-6 sm:col-span-6">
                <jet-label for="menu_item_contacts_ru" value="Menu item Contacts RU" />
                <jet-input id="menu_item_contacts_ru" type="text" class="mt-1 block w-full" v-model="form.menu_item_contacts_ru"
                autocomplete="menu_item_contacts_ru" />
                <jet-input-error :message="form.errors.menu_item_contacts_ru" class="mt-2" />
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
                    menu_item_home: this.settings.data.menu_item_home,
                    menu_item_home_ru: this.settings.data.menu_item_home_ru,
                    menu_item_services: this.settings.data.menu_item_services,
                    menu_item_services_ru: this.settings.data.menu_item_services_ru,
                    menu_item_gallery: this.settings.data.menu_item_gallery,
                    menu_item_gallery_ru: this.settings.data.menu_item_gallery_ru,
                    menu_item_contacts: this.settings.data.menu_item_contacts,
                    menu_item_contacts_ru: this.settings.data.menu_item_contacts_ru,
                }),
            }
        },

        methods: {
            updateMenu() {
                this.form.post(route('settings.save-menu'), {
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
