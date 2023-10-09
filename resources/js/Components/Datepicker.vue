<template>
    <VueDatePicker v-model="date" enable-time-picker="false" locale="es" format="yyyy-MM-dd"></VueDatePicker>
</template>
<script>
    import VueDatePicker from '@vuepic/vue-datepicker';
    import '@vuepic/vue-datepicker/dist/main.css'

    export default {
    components: { VueDatePicker },
        data() {
            return {
                date: null,
            };
        }
    }
</script>