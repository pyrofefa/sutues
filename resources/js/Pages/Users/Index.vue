<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm  } from '@inertiajs/vue3'
import Pagination from '@/Components/Pagination.vue'
import { inject } from 'vue'
const Swal = inject('$swal')

defineProps({
    users: {
        type: Object,
        required: true,
    },
})

const form = useForm({});

function destroy(id) {
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
            form.delete(route("users.destroy", id));
            Swal.fire({
                icon: 'success',
                text: 'Eliminado!'
            })
        }
    })
}
</script>
<template>
    <Head title="Obligaciones de transparencia" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Usuarios</h2>
        </template>
        <div v-if="$page.props.flash.success" class="alert alert-success" role="alert">
            {{ $page.props.flash.success }}
        </div>
        <div v-if="$page.props.flash.warning" class="alert alert-warning" role="alert">
            {{ $page.props.flash.warning }}
        </div>
        <div v-if="$page.props.flash.danger" class="alert alert-danger" role="alert">
            {{ $page.props.flash.danger }}
        </div>
        <div>
            <div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-between">
                            <Link :href="route('users.create')" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                Nuevo
                            </Link>
                        </div>
                        <div class="mt-4">
                            <div class="table-responsive-sm">
                                <table class="table-auto w-full">
                                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-3">Name</th>
                                            <th class="px-4 py-3">Emai</th>
                                            <th class="px-4 py-3">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm divide-y divide-gray-100" v-if="users.data.length > 0">
                                        <template v-for="item in users.data">
                                            <tr>
                                                <td class="px-4 py-3 text-sm">{{ item.name }}</td>
                                                <td class="px-4 py-3 text-sm"> {{ item.email }}</td>
                                                <td class="px-4 py-3 text-sm">
                                                    <div class="flex items-center space-x-4 text-sm">
                                                        <button @click="destroy(item.id)" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </template>
                                    </tbody>
                                    <tbody v-else>
                                        <tr class="bg-red-400 text-white text-center">
                                            <td colspan="4" class="border px-4 py-2">No hay usuarios para mostrar</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <Pagination :links="users.links" />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
