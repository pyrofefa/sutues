<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue';
    import { Link } from '@inertiajs/vue3';
    import PaginationNews from '@/Components/PaginationNews.vue';
    import moment from 'moment/moment';
    import 'moment/locale/es';

    defineProps({
        documents: {
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
                        <h1>Documentos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-two section-padding pb-60 blog-page">
        <div class="container">
            <div v-for="item in documents.data" :key="item.id" class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-blog wow fadeInLeft" data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <Link :href="route('newsDetails', item.slug)" class="blog-img">
                        <img alt="Interior Design" class="img-fluid" src="/assets/img/documents.png">
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
            <PaginationNews class="mt-6" :links="documents.links" />
        </div>        
    </div>
    <Footer />
  </template>
