<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm  } from '@inertiajs/vue3';
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import CkEditor from "@/Components/CkEditor.vue";
import Datepicker from "@/Components/Datepicker.vue";
import FileUpload from "@/Components/FileUpload.vue";

const form = useForm({
    title: "",
    description: "",
    content: "",
    end: "",
    picture:"",
    file: "",
});

const submit = () => {
    form.post(route("news.store"),{
        forceFormData: true,
    });
};
</script>
<template>
    <Head title="Crear Noticia" />
    <AuthenticatedLayout title="Crear proyecto">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Noticia</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="title" value="Titulo" />

                                <TextInput
                                    id="title"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.title"
                                    required
                                    autofocus
                                    autocomplete="title"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.title"
                                />
                            </div>
                            <div class="my-6">
                                <InputLabel for="end" value="Fecha de vecimiento" />
                                <Datepicker v-model="form.end" />
                            </div>
                            <div class="my-6">
                                <InputLabel for="description" value="Imagen encabezado" />
                                <input type="file" @input="form.picture = $event.target.files[0]" />
                            </div>

                            <div class="my-6">
                                <InputLabel for="description" value="Descripcion" />

                                <TextInput
                                    id="description"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.description"
                                    required
                                    autofocus
                                    autocomplete="description"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.description"
                                />
                            </div>
                            <div class="my-6">
                                <InputLabel for="description" value="Archivos adjuntos" />
                                <FileUpload @input="form.file = $event.target.files" />
                            </div>
                            <div class="my-6">
                                <InputLabel for="content" value="Contenido" />
                                <CkEditor v-model="form.content" />
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
