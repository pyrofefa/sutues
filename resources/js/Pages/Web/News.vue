<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    import HeroAreaNews from '@/Components/heroArea/HeroAreaNews.vue'
    import { Link } from '@inertiajs/vue3'
    import PaginationNews from '@/Components/PaginationNews.vue'
    import moment from 'moment/moment'
    import 'moment/locale/es';
    
    defineProps({
        news: {
            type: Object,
            default: () => ({}),
        },
        data: {
            type: Array,
        },
    });

</script>
<template>
    <Header />
    <HeroAreaNews :data="data" />
    <div class="blog-two section-padding pb-60 blog-page">
        <div class="container">
            <!--v-if-->
            <div class="row mt-30">
                <div v-for="item in news.data" :key="item.id" class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blog wow fadeInLeft" data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        <Link :href="route('newsDetails', item.slug)" class="blog-img">
                            <img v-if="item.picture == null" alt="Interior Design" class="img-fluid" src="/assets/img/newsHeader.png">
                            <img v-else :alt="item.title" :src="'/storage/'+ item.picture" class="img-fluid" /> 
                        </Link>
                        <div class="blog-content">
                            <span>
                                <Link :href="route('newsDetails', item.slug)">{{ item.title }}</Link>
                            </span>
                            <h3>
                                <Link :href="route('newsDetails', item.slug)" class="">{{ item.description }}</Link>
                            </h3>
                            <div class="blog-date">
                                <p>{{ moment(item.updated_at).locale('es').format('LL') }}</p>
                            </div>
                            <Link :href="route('newsDetails', item.slug)" class="read-more">Leer más</Link>
                        </div>
                    </div>
                </div>
                <PaginationNews class="mt-6" :links="news.links" />
            </div>
        </div>
    </div>
    <Footer />
  </template>
<style>
.single-blog .blog-content span a {
    text-transform: uppercase;
    font-size: 16px;
    opacity: 13.5;
}
</style>