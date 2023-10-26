<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    import Suppliers from '@/Components/Suppliers.vue';

    const props = defineProps({
        suppliers: {
            type: Object,
            default: () => ({}),
        }
    });

</script>
<template>
    <Header />
    <div class="breadcrumb-area bread-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-title">
                        <h1>Proveedores</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="faq-section gray-bg section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 mb-50">
                    <div class="cp-custom-accordion">
                        <div class="accordions">
                                 <Suppliers
                                    v-for="question in suppliers"
                                    :key="question.id"
                                    :title="question.name"
                                    :info="question.content"
                                    :logo="question.logo"
                                />
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
