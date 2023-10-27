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
                        <h1>Contáctanos</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-page section-padding">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-6 col-lg-6 col-12">
                    <div class="contact-page google-map">
                        <iframe allowfullscreen="" height="600" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" style="border: 0px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d938.0045873859566!2d-110.9616755637356!3d29.120912553240323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce8691c675f397%3A0x9cfda459c8e7339!2sUES%20Hermosillo!5e0!3m2!1ses-419!2smx!4v1697744694370!5m2!1ses-419!2smx"></iframe>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nombres*</label>
                                    <input placeholder="Nombres" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label>Correo electrónico*</label>
                                    <input placeholder="Correo electrónico" type="email">
                                </div>
                                <div class="col-12">
                                    <label>Asunto*</label>
                                    <input placeholder="Asunto" type="text">
                                </div>
                                <div class="col-12">
                                    <label>Mensaje*</label>
                                    <textarea cols="30" id="message" name="message" placeholder="" rows="10"></textarea>
                                </div>
                                <div>
                                    <button class="bordered-btn" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
  </template>
<style>
.contact-page .contact-form button[type="submit"] {
    background: #683431 !important;
    border: 1px solid #683431;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
}
</style>
