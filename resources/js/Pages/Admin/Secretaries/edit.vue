<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm  } from '@inertiajs/vue3';
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";

const props = defineProps({
    secretary: {
        type: Object,
        default: () => ({}),
    },
});

const form = useForm({
    id: props.secretary.person.id,
    name: props.secretary.person.name,
    lastName: props.secretary.person.last_name,
    period: props.secretary.period,
});

const submit = () => {
    form.put(route("secretaries.update", props.secretary.person.id));
};
</script>
<template>
    <Head title="Editar Secretario" />
    <AuthenticatedLayout title="Crear proyecto">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Secretarios Generales</h2>
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
                                <InputLabel for="period" value="Periodo" />

                                <TextInput
                                    id="period"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.period"
                                    required
                                    autofocus
                                    autocomplete="period"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.period"
                                />
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