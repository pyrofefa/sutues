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
function edit(id){
    route('news.edit', id);
}
</script>

<template>
    <Head title="Noticias" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Noticias</h2>
        </template>
        <div class="py-12">
            <div class="flex justify-between">
                <Link :href="route('news.create')" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                    Nuevo 
                </Link>
            </div>
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Titulo</th>
                                        <th class="px-4 py-3">Descripción</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <tr class="text-gray-700 dark:text-gray-400" v-for="item in news.data">
                                        <td class="px-4 py-3 text-sm">{{ item.title }}</td>
                                        <td class="px-4 py-3 text-sm"> {{ item.description }}</td>
                                        <td class="px-4 py-3 text-sm">
                                            <div class="flex items-center space-x-4 text-sm">
                                                <Link :href="route('news.edit', item.id)" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </Link>
                                                <button @click="destroy(item.id)" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>               
                        <Pagination :links="news.links" />
                    </div>                    
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
