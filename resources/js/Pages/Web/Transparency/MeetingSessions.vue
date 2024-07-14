<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue';
    import { router, Link } from '@inertiajs/vue3';
    import PaginationNews from '@/Components/PaginationNews.vue';
    import moment from 'moment/moment';
    import 'moment/locale/es';
    import { ref, watch } from 'vue'

    defineProps({
        meetings: {
            type: Object,
            default: () => ({}),
        }
    });

    const term = ref('');    
    watch(term, (value) => {
        router.get( route( 'meeting-sessions', { term: value } ), {}, { preserveState: true } );
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
                        <h1>Actas de Sesiones</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-two section-padding pb-60 pt-10 blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="search-bar-wrap d-flex text-right">
                        <input placeholder="Buscar" type="search" v-model='term' @keyup="search" preserve-scroll />
                        <i class="fal fa-search"></i>
                    </div>
                </div>                
            </div>
            <div class="row mt-30 pt-10">
                <div v-for="item in meetings.data" :key="item.id" class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blog wow fadeInLeft" data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        <Link :href="route('meetingsDetails', item.slug)" class="blog-img">
                            <img :alt="item.title" src="/assets/img/documents.png" class="img-fluid" /> 
                        </Link>
                        <div class="blog-content">
                            <span>
                                <Link :href="route('meetingsDetails', item.slug)">{{ item.title }}</Link>
                            </span>
                            <h3>
                                <Link :href="route('meetingsDetails', item.slug)" class="">{{ item.description }}</Link>
                            </h3>
                            <div class="blog-date">
                                <p>{{ moment(item.updated_at).locale('es').format('LL') }}</p>
                            </div>
                            <Link :href="route('meetingsDetails', item.slug)" class="read-more">Leer más</Link>
                        </div>
                    </div>
                </div>
                <PaginationNews class="mt-6" :links="meetings.links" />
            </div>
        </div>
    </div>
    <Footer />
</template>