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
                        <a href="/transparencia/obligaciones-de-transparencia/2023" class="single-portfolio-item">
                            <img alt="Micalu Meseum" src="/assets/img/transparencyObligations.png">
                            <div class="portfolio-details">
                                <h5>2023</h5>
                            </div>
                        </a>
                        <a href="/portfolio/6" class="single-portfolio-item">
                            <img alt="Hall Room" src="/assets/img/portfolio/2.jpg">
                            <div class="portfolio-details">
                                <h5>2022</h5>
                            </div>
                        </a>
                        <a href="/portfolio/7" class="single-portfolio-item">
                            <img alt="Drawing Room" src="/assets/img/portfolio/3.jpg">
                            <div class="portfolio-details">
                                <h5>2021</h5>
                            </div>
                        </a>
                        <a href="/portfolio/8" class="single-portfolio-item">
                            <img alt="National Perliament" src="/assets/img/portfolio/4.jpg">
                            <div class="portfolio-details">
                                <h5>2020</h5>
                            </div>
                        </a>
                        <a href="/portfolio/8" class="single-portfolio-item">
                            <img alt="National Perliament" src="/assets/img/portfolio/4.jpg">
                            <div class="portfolio-details">
                                <h5>2019</h5>
                            </div>
                        </a>
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