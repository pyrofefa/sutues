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
                        <h1>Oficina de enlace</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-page section-padding wow fadeInLeft" data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-6 col-lg-6 col-12">
                    <div class="contact-page google-map">
                        <iframe allowfullscreen="" height="600" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" style="border: 0px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d938.0045873859566!2d-110.9616755637356!3d29.120912553240323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce8691c675f397%3A0x9cfda459c8e7339!2sUES%20Hermosillo!5e0!3m2!1ses-419!2smx!4v1697744694370!5m2!1ses-419!2smx"></iframe>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="single-team-item">
                        <div class="team-img">
                            <img alt="JOSÉ CÉSAR" src="/assets/img/secretary.jpeg">
                        </div>
                        <div class="team-info">
                            <h5>MORENO GARZÓN JESÚS LEONARDO</h5>
                            <p><strong>Enlace de la Unidad de Transparencia</strong></p><br>
                            <p>
                                <strong>Ubicación</strong><br>  
                                Calle Ley Federal del Trabajo esquina con Israel González, S/N,  Col. Apolo.
                                Unidad Académica Hermosillo edificio R.                             
                                C.P. 83100. 
                            </p>
                            <br>
                            <p>
                                <strong>Horario de atención</strong><br>  
                                Lunes a viernes de 8:00 a 15:00 horas.                           
                            </p>
                            <br>
                            <p>
                                <strong>Correo electrónico</strong><br>  
                                transparencia.sutues@outlokk.com                           
                            </p>
                            <br>
                            <p>
                                <strong>Teléfono</strong><br>  
                                (662) 285 11 52                          
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>
