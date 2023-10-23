<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue';
    import { Link } from '@inertiajs/vue3'

    const props = defineProps({
        years: {
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
                        <h1>Obligaciones de trasparencia</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-area section-padding" id="port-masonry">
        <div class="container">
            <div class="section-title text-center pt-0">
                <h3><strong>Años</strong></h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-list">
                        <div v-for="item in years">
                            <Link :href="route('transparencyObligations.year', item.year)" class="single-portfolio-item">
                                <img :alt="item.year" src="/assets/img/transparencyObligations.png">
                                <div class="portfolio-details">
                                    <h5>{{ item.year }}</h5>
                                </div>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
<style scoped>
.single-portfolio-item .portfolio-details h5 {
    background: #fff;
    display: block;
    padding: 10px 20px;
    margin: 10px 0;
    font-size: 25pt;
}
</style>