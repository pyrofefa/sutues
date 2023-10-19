<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
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
    <div class="portfolio-area section-padding" id="port-masonry">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-list">
                        <a href="/portfolio/5" class="single-portfolio-item">
                            <img alt="Micalu Meseum" src="/assets/img/portfolio/1.jpg">
                            <div class="portfolio-details">
                                <span>Construction</span>
                                <h5>Micalu Meseum</h5>
                            </div>
                        </a>
                        <a href="/portfolio/6" class="single-portfolio-item">
                            <img alt="Hall Room" src="/assets/img/portfolio/2.jpg">
                            <div class="portfolio-details">
                                <span>Interior</span>
                                <h5>Hall Room</h5>
                            </div>
                        </a>
                        <a href="/portfolio/7" class="single-portfolio-item">
                            <img alt="Drawing Room" src="/assets/img/portfolio/3.jpg">
                            <div class="portfolio-details">
                                <span>Interior</span>
                                <h5>Drawing Room</h5>
                            </div>
                        </a>
                        <a href="/portfolio/8" class="single-portfolio-item">
                            <img alt="National Perliament" src="/assets/img/portfolio/4.jpg">
                            <div class="portfolio-details">
                                <span>Construction</span>
                                <h5>National Perliament</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
