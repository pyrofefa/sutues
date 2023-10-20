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
                        <h1>Procedimiento de solicitud</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <h3>Datos que debe contener la solicitud:</h3>
                        </div>
                        <div class="single-team-item">
                            <h4>* Nombre del solicitante. </h4>
                            <h4>* Descripción de la información solicitada. </h4>
                            <h4>* Lugar o medio para recibir la información. </h4>
                            <h4>* El acceso a la información es gratuito. Cuando sea necesario o requerido proporcionarla a través de copias simples, certificados o formatos electrónicos el solicitante deberá cubrir el pago correspondiente.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <div class="about-bg-wrapper">
                        <img alt="our project design" src="/assets/img/history.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
