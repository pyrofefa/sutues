<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm  } from '@inertiajs/vue3';
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";

const props = defineProps({
    documents: {
        type: Object,
        default: () => ({}),
    },
});


const form = useForm({
    id: props.documents.id,
    title: props.documents.title,
    description: props.documents.description,
    file:  props.documents.picture,
    _method: "PUT"
});

const submit = () => {
    form.post(route("documents.update", props.documents.id),{
        forceFormData: true,
    });
};
</script>
<template>
    <Head title="Crear Documento" />
    <AuthenticatedLayout title="Crear proyecto">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Crear Documento</h2>
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
                                <input type="file" @input="form.file = $event.target.files[0]" />
                            </div>
                            <div class="my-6">
                                <InputLabel for="description" value="Descripcion" />

                                <TextInput
                                    id="description"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.description"
                                    autofocus
                                    autocomplete="description"
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.description"
                                />
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
