<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    import FileUpload from "@/Components/FileUpload.vue";
    import { useForm  } from '@inertiajs/vue3';

    const form = useForm({
        file:""
    });

    const submit = () => {
        form.post(route("transparency-obligations.send"),{
            forceFormData: true,
        });
    };

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
    <div class="about-section section-padding pt-0">
        <div class="container">
            <div class="row align-items-center wow fadeInLeft" data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="about-content-wrap mt-10">
                        <div v-if="$page.props.flash.success" class="alert alert-success" role="alert">
                            {{ $page.props.flash.success }}
                        </div>
                        <div class="section-title">
                            <h3>Datos que debe contener la solicitud:</h3>
                        </div>
                        <div class="single-team-item">
                            <h3>* Nombre del solicitante. </h3>
                            <h4>* Descripción de la información solicitada. </h4>
                            <h4>* Lugar o medio para recibir la información. </h4>
                            <h4>* El acceso a la información es gratuito. Cuando sea necesario o requerido proporcionarla a través de copias simples, certificados o formatos electrónicos el solicitante deberá cubrir el pago correspondiente.</h4>
                        </div>
                        <div class="single-team-item">
                            <form @submit.prevent="submit">
                                <h3 class="mb-5">Sube aqui tu solicitud.</h3>
                                <h4><FileUpload @input="form.file = $event.target.files" /></h4>
                                <button type="submit" class="theme-btn">Enviar</button>
                            </form>
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
<style>
input[type="submit"], button[type="submit"] {
    border: none;
    border-radius: 0;
    display: inline-block;
    background: #683431;
    color: #fff;
    padding: 15px 45px;
    width: auto;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    cursor: pointer;
    font-size: 15px;
}
</style>
