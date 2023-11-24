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
                        <h1>Estatutos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <object data="/data/Estatutos-SUTUES.pdf" type="application/pdf" width="100%" height="900px"></object>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="about-bg-wrapper">
                        <img alt="our project design" src="/assets/img/history.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>


