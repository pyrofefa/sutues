<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useObjectUrl } from '@vueuse/core'
import { shallowRef, inject } from 'vue'
import { Head, useForm  } from '@inertiajs/vue3';
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import CkEditor from "@/Components/CkEditor.vue";
import Datepicker from "@/Components/Datepicker.vue";
import FileUpload from "@/Components/FileUpload.vue";
const Swal = inject('$swal')

const props = defineProps({
    news: {
        type: Object,
        default: () => ({}),
    },
    attacheds: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    id: props.news.id,
    title: props.news.title,
    description: props.news.description,
    content: props.news.content,
    end:  props.news.end,
    picture: props.news.picture,
    file:  props.news.file,
    _method: "PUT"
});

const file = shallowRef()
const url = useObjectUrl(file)

function onFileChange(event) {
  file.value = event.target.files[0]
  form.picture = event.target.files[0]
}

const submit = () => {
    form.post(route("news.update", props.news.id),{
        forceFormData: true,
    });
};

const deletePicture = (id) => {
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
            form.get(route("picture.news",id),{
                forceFormData: true,
            });
        }
    })
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
            form.get(route("file.news",id),{
                forceFormData: true,
            });
        }
    })
};
</script>
<template>
    <Head title="Editar Noticia" />
    <AuthenticatedLayout title="Crear proyecto">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Noticia</h2>
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
                                <input type="file" @change="onFileChange($event)" />
                            </div>
                            <div class="my-6">
                                <div class="row">
                                    <div class="col-2">
                                        <img v-if="url != null" :src="url" class="rounded-full w-36 h-36" />
                                        <img v-if="form.picture != null && url == null" :src="'/storage/heroarea/'+ form.picture" class="rounded-full w-36 h-36" />
                                    </div>
                                    <div class="col-1">
                                        <button v-if="form.picture != null && url == null" type="button" @click="deletePicture(form.id)" class="flex items-left justify-between px-1 py-1 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </div>                                
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
                            <div class="my-6">
                                <InputLabel for="description" value="Archivos adjuntos" />
                                <div class="row">
                                    <div class="col-7">
                                        <FileUpload @input="form.file = $event.target.files" />
                                    </div>
                                    <div class="col-5">
                                        <table class="table-auto w-full">
                                            <tbody class="text-sm divide-y divide-gray-100">
                                                <template v-for="item in attacheds">
                                                    <tr>
                                                        <td class="px-4 py-3 text-sm">
                                                            <a :href="'/storage/news/attacheds/'+form.id+'/'+ item.file" target="_blank" >{{ item.file }}</a>
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