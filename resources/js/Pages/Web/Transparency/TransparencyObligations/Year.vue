<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue';
    import Accordion from '@/Components/Accordion.vue';
    defineProps({
        year: String,
        articles: {
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
                        <h1>Obligaciones de trasparencia</h1>
                        <h1>{{ year }}</h1>
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
                                 <Accordion
                                    v-for="question in articles"
                                    :key="question.id"
                                    :title="question.article"
                                    :info="question"
                                />
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>


