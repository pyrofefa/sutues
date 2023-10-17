<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm  } from '@inertiajs/vue3'
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Pagination from '@/Components/Pagination.vue'

defineProps({
    news: {
        type: Object,
        required: true,
    },
})

const form = useForm({});

function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        form.delete(route("news.destroy", id));
    }
}
</script>

<template>
    <Head title="Noticias" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Noticias</h2>
        </template>

        <div class="py-12">
            <div class="">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-between">
                            <Link
                                :href="route('news.create')"
                                class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded"
                            >
                                Nuevo 
                            </Link>
                        </div>
                        <div class="mt-4">
                            <table class="table table-striped">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2">Titulo</th>
                                        <th class="px-4 py-2">Descripcion</th>
                                        <th class="px-4 py-2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100" v-if="news.data.length > 0">
                                    <template v-for="item in news.data">
                                        <tr>
                                            <td class="border px-4">{{ item.title }}</td>
                                            <td class="border px-4">{{ item.description }}</td>
                                            <td class="border px-4 py-4" style="width: 300px">
                                                <Link :href="route('news.edit', item.id)" class="px-4 py-2 text-white bg-blue-600 rounded-lg">Editar</Link>
                                                <PrimaryButton class="px-4 py-2 text-white bg-red-600 rounded-lg" @click="destroy(item.id)">
                                                    Eliminar
                                                </PrimaryButton>
                                            </td>
                                            
                                        </tr>
                                    </template>
                                </tbody>
                                <tbody v-else>
                                    <tr class="bg-red-400 text-white text-center">
                                        <td colspan="4" class="border px-4 py-2">No hay noticias para mostrar</td>
                                    </tr>
                                </tbody>
                            </table>
                            <Pagination :links="news.links" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
