<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm  } from '@inertiajs/vue3';
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import FileUpload from "@/Components/FileUpload.vue";

const form = useForm({
    year: "",
    article: "",
    file:""
});

const submit = () => {
    form.post(route("transparency-obligations.store"),{
        forceFormData: true,
    });
};
</script>
<template>
    <Head title="Crear Noticia" />
    <AuthenticatedLayout title="Crear proyecto">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Obligaciones</h2>
        </template>
        
        <div class="py-12">
            <div class="mx-auto max-w-12xl">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="year" value="Año" />

                                <TextInput
                                    id="year"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.year"
                                    required
                                    autofocus
                                    autocomplete="year"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.title"
                                />
                            </div>
                            <div class="my-6">
                                <InputLabel for="article" value="Articulo" />

                                <TextInput
                                    id="article"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.article"
                                    required
                                    autofocus
                                    autocomplete="article"
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.article"
                                />
                            </div>
                              <div class="my-6">
                                <FileUpload @input="form.file = $event.target.files" />
                            </div>
                            <PrimaryButton
                                type="submit"
                                class="success"
                                :disabled="form.processing"
                            >
                                Guardar
                            </PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>