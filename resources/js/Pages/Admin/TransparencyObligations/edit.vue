<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { inject } from 'vue'
import { Head, useForm  } from '@inertiajs/vue3';
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import FileUpload from "@/Components/FileUpload.vue";
const Swal = inject('$swal')

const props = defineProps({
    transparency: {
        type: Object,
        default: () => ({}),
    },
    files: {
        type: Object,
        default: () => ({}),
    },
});
const form = useForm({
    id: props.transparency.id,
    year: props.transparency.year,
    article: props.transparency.article,
    quarter: props.transparency.quarter,
    file:  props.transparency.file,
    _method: "PUT"
});
const submit = () => {
    form.post(route("transparency-obligations.update", props.transparency.id),{
        forceFormData: true,
    });
};

const deleteFile = (id) => {
    Swal.fire({
        title: 'Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {
            form.get(route("file.transparency",id),{
                forceFormData: true,
            });
        }
    })
};
</script>
<template>
    <Head title="Editar Obligaciones" />
    <AuthenticatedLayout title="Editar Obligaciones">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Obligaciones</h2>
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
                                <InputLabel for="quarter" value="Trimestre" />

                                <TextInput
                                    id="quarter"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.quarter"
                                    required
                                    autofocus
                                    autocomplete="quarter"
                                />
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.quarter"
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
                                <InputLabel for="description" value="Archivos adjuntos" />
                                <div class="row">
                                    <div class="col-7">
                                        <FileUpload @input="form.file = $event.target.files" />
                                    </div>
                                    <div class="col-5">
                                        <table class="table-auto w-full">
                                            <tbody class="text-sm divide-y divide-gray-100">
                                                <template v-for="item in files">
                                                    <tr>
                                                        <td class="px-4 py-3 text-sm">
                                                            <a :href="'/storage/trasparency/'+ item.quarter" target="_blank" >{{ item.file }}</a>
                                                        </td>
                                                        <td class="px-4 py-3 text-sm">
                                                            <div class="flex items-center space-x-4 text-sm">
                                                                <button type="button" @click="deleteFile(item.id)" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </template>
                                            </tbody>                                  
                                        </table>
                                    </div>
                                </div>                                
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
