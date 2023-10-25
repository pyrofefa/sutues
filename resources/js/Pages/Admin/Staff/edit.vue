<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { router } from '@inertiajs/vue3'
import { Head, useForm  } from '@inertiajs/vue3';
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import FileUpload from "@/Components/FileUpload.vue";

const props = defineProps({
    staff: {
        type: Object,
        default: () => ({}),
    },
    office: {
        type: Object,
    },
    position: {
        type: Object,
    },
});

const form = useForm({
    id: props.staff.person.id,
    name: props.staff.person.first_name,
    lastName: props.staff.person.last_name,
    office: props.staff.office_id,
    position: props.staff.position.id,
    file: props.staff.person.photo,
});

const submit = () => {
    router.post(route("staff.update", props.staff.person.id), {
        _method: 'put',
        id: form.id,
        name: form.name,
        lastName: form.lastName,
        office: form.office,
        position: form.position,
        file:  form.file,
    })
};
</script>
<template>
    <Head title="Editar Secretario" />
    <AuthenticatedLayout title="Crear Comité">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Comité Actual</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="name" value="Nombres" />

                                <TextInput
                                    id="name"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.name"
                                    required
                                    autofocus
                                    autocomplete="name"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.name"
                                />
                            </div>

                            <div class="my-6">
                                <InputLabel for="lastName" value="Apellidos" />

                                <TextInput
                                    id="lastName"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.lastName"
                                    required
                                    autofocus
                                    autocomplete="lastName"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.lastName"
                                />
                            </div>
                            <div class="my-6">
                                <InputLabel for="position" value="Oficina" />
                                <select class="form-select" aria-label="Default select example" v-model="form.office" >
                                    <option v-for="item in office" :value="item.id"> {{ item.name }}</option>
                                </select>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.office"
                                />
                            </div>
                            <div class="my-6">
                                <InputLabel for="position" value="Cargo" />
                                <select class="form-select" aria-label="Default select example" v-model="form.position" >
                                    <option v-for="item in position" :value="item.id"> {{ item.name }}</option>
                                </select>
                                <InputError
                                    class="mt-2"
                                    :message="form.errors.position"
                                />
                            </div>
                            <div class="my-6">
                               <FileUpload @input="form.file = $event.target.files[0]" />
                            </div>
                            <PrimaryButton
                                type="submit"
                                :class="{ 'opacity-25': form.processing }"
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
