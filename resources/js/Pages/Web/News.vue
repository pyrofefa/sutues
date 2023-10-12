<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    import { Link } from '@inertiajs/vue3'
    import moment from 'moment/moment'
    import 'moment/locale/es';
    
    defineProps({ 
        news: Array 
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
                        <h1>Noticias</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-two section-padding pb-60 blog-page">
        <div class="container">
            <!--v-if-->
            <div class="row mt-30">
                <div v-for="item in news" :key="item.id" class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blog wow fadeInLeft" data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                        <a href="/blog/1" class="blog-img">
                            <img alt="Interior Design" class="img-fluid" src="/assets/img/blog/1.jpg">
                        </a>
                        <div class="blog-content">
                            <span>
                                <a href="#">{{ item.title }}</a>
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
                <ul class="pagination">
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li aria-current="page" class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
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