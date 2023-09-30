<script setup>
  import { Link } from '@inertiajs/vue3'
</script>
<template>
  <div class="service-section gray-bg section-padding" id="service-3">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-7 col-12 wow fadeInLeft animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInLeft;">
          <div class="single-service-wrap">
            <div class="single-service-inner">
              <div class="service-icon">
                <i class="fa-regular fa-file fa-4x"></i>
              </div>
              <h5>
                <Link href="/documentos">Documentos</Link>
              </h5>
              <p>Conoce los documentos descargables en PDF que tenemos en esta sección.</p>
              <Link href="/documentos" class="details-link">
                <i class="fas fa-arrow-right"></i>
              </Link>
            </div>
            <div class="single-service-inner">
              <div class="service-icon">
                <i class="fa-solid fa-triangle-exclamation fa-4x"></i>
              </div>
              <h5>
                <Link href="/convocatorias">Convocatorias</Link>
              </h5>
              <p>Consulta aquí las convocatorias más recientes del SUTUES.</p>
              <Link href="/convocatorias" class="details-link">
                <i class="fas fa-arrow-right"></i>
              </Link>
            </div>
            <div class="single-service-inner">
              <div class="service-icon">
                <i class="fa-regular fa-newspaper fa-4x"></i>
              </div>
              <h5>
                <Link href="/noticias">Noticias</Link>
              </h5>
              <p>Para estar al tanto de las noticias más recientes del SUTUES, visita esta sección.</p>
              <Link href="/noticias" class="details-link">
                <i class="fas fa-arrow-right"></i>
              </Link>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-5 col-12 wow fadeInUp  animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
          <div class="service-content-wrap">
            <div class="service-bg">
              <img alt="service" src="/assets/img/service-bg.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
#service-3 .single-service-inner h5 a {
    font-size: 23px;
    font-weight: 400;
    color: #171717;
    margin-right: 30px;
    width: 150px;
}
</style>