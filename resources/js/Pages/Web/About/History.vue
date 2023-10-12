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
                        <h1>Historia</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-section section-padding wow animated fadeInLeft" data-wow-delay="200ms">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <h4>
                                El día diecisiete de enero de mil novecientos ochenta y cinco, en la ciudad de San Luis Río Colorado, Sonora, 
                                quedó conformado el Sindicato Único de Trabajadores del Centro de Estudios Superiores del Estado de Sonora (SUTCESUES), 
                                según consta en el Acta de Asamblea Constitutiva.
                            <br><br>
                                En ese tiempo, el SUTCESUES surge con el objetivo de representar y defender los intereses profesionales y laborales de sus integrantes, 
                                así como lograr las firmas de las condiciones generales del trabajo para el propósito de obtener la permanencia en el empleo.
                            <br><br>
                                Para lograr lo anterior, se pide a la Asamblea propongan candidatos para la Secretaría General del Sindicato, 
                                siendo los compañeros Ingeniero Martín Gonzalo Morales Valdez, 
                                el Ingeniero Jorge Antonio Ramírez Sierras y el Contador Público Armando de Jesús López Sánchez, 
                                los elegidos por ésta para ser votados.
                            <br><br>
                                A través de la votación pública y directa de los asistentes, y con un total de 25 votos a favor, 
                                el Ingeniero Martín Gonzalo Morales Valdez es elegido como el primer Secretario General de nuestro Sindicato.
                            <br><br>
                                Con el paso del tiempo, el Centro de Estudios Superiores del Estado de Sonora pasa a llamarse Universidad Estatal de Sonora y con ello es necesario promover el cambio de nombre del Sindicato, 
                                por lo que, de conformidad con el Acta de Asamblea Ordinaria, celebrada el día veintitrés de octubre de dos mil trece, 
                                se determinó el cambio de razón social del Sindicato a Sindicato Único de Trabajadores de la Universidad Estatal de Sonora (SUTUES).
                            <br><br>
                                El radio de acción de nuestro Sindicato abarca todos los lugares del estado donde se encuentre una unidad administrativa de la Universidad Estatal de Sonora, 
                                contando hasta el momento seis Delegaciones conformadas de la siguiente manera: Delegación San Luis Río Colorado, Delegación Hermosillo, Delegación Rectoría, 
                                Delegación Navojoa, Delegación Magdalena y Delegación Benito Juárez.
                            </h4>
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
.history {
    background-image: url(../../../../../public/assets/img/historyHeader.jpeg);
}
</style>


