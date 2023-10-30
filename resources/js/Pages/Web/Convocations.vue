<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    import HeroAreaNews from '@/Components/heroArea/HeroAreaNews.vue'
    import { router, Link } from '@inertiajs/vue3'
    import PaginationNews from '@/Components/PaginationNews.vue'
    import moment from 'moment/moment'
    import 'moment/locale/es';
    import { ref, watch } from 'vue'

    const props = defineProps({
        convocations: {
            type: Object,
            default: () => ({}),
        },
        data: {
            type: Array,
        }
    });

    const term = ref('');
    watch(term, (value) => {
        router.get( route( 'convocations', { term: value } ), {}, { preserveState: true } );
    });
</script>
<template>
    <Header />
    <HeroAreaNews :data="data" />
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
                <div v-for="item in convocations.data" :key="item.id" class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blog wow fadeInLeft" data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        <Link :href="route('convocationsDetails', item.slug)" class="blog-img">
                            <img v-if="item.picture == null" :alt="item.title" class="img-fluid" src="/assets/img/convocations.png">
                            <img v-else :alt="item.title" :src="'/storage/heroarea/'+ item.picture" class="img-fluid" />
                        </Link>
                        <div class="blog-content">
                            <span>
                                <Link :href="route('convocationsDetails', item.slug)">{{ item.title.substring(0,50) }}</Link>
                            </span>
                            <h3>
                                <Link v-if="item.description != null" :href="route('convocationsDetails', item.slug)" class="">{{ item.description.substring(0,100) }}</Link>
                            </h3>
                            <div class="blog-date">
                                <p>{{ moment(item.updated_at).locale('es').format('LL') }}</p>
                            </div>
                            <Link :href="route('convocationsDetails', item.slug)" class="read-more">Leer más</Link>
                        </div>
                    </div>
                </div>
                <PaginationNews class="mt-6" :links="convocations.links" />
            </div>
        </div>
    </div>
    <Footer />
  </template>
