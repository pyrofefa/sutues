<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    import Accordion from '@/Components/Statutes.vue';

    defineProps({
        statutes: {
            type: Object,
            default: () => ({}),
        },
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
                        <h1>Estatutos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-section gray-bg section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="cp-custom-accordion">
                        <div class="accordions">
                            <Accordion
                                v-for="statute in statutes"
                                :key="statute.id"
                                :title="statute.article"
                                :info="statute.content"
                            />
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>


