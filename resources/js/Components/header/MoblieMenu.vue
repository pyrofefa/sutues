<script setup>
import { Link } from '@inertiajs/vue3'

import { onMounted } from "vue";

onMounted(() => {
  // Metis Menu
  $("#mobile-menu").metisMenu();

  $("#hamburger").on("click", function () {
    $(".mobile-nav").addClass("show");
    $(".overlay").addClass("active");
  });

  $(".close-nav").on("click", function () {
    $(".mobile-nav").removeClass("show");
    $(".overlay").removeClass("active");
  });

  $(".overlay").on("click", function () {
    $(".mobile-nav").removeClass("show");
    $(".overlay").removeClass("active");
  });
});
</script>
<template>
  <div class="mobile-nav-bar d-block col-sm-1 col-6 d-lg-none">
    <div class="mobile-nav-wrap">
      <div id="hamburger">
        <i class="fa-solid fa-bars"></i>
      </div>
      <!-- mobile menu - responsive menu  -->
      <div class="mobile-nav">
        <button type="button" class="close-nav">
          <i class="fa-solid fa-close"></i>
        </button>
        <nav class="sidebar-nav">
          <ul class="metismenu" id="mobile-menu">
            <li>
              <a class="has-arrow" href="#">Conócenos</a>
              <ul class="sub-menu">
                <li>
                    <Link href="/conocenos/historia">Historia</Link>
                </li>
                <li>
                    <Link href="/conocenos/estatutos">Estatutos</Link>
                </li>
                <li>
                    <Link href="/conocenos/objetivos">Objetivos</Link>
                </li>
                <li>
                    <Link href="/conocenos/secretarios">Secretarios Generales</Link>
                </li>
                <li>
                    <Link href="/conocenos/estuctura-organizacional">Estructura Organizacional</Link>
                </li>
                <li>
                    <Link href="/conocenos/comite">Comité Actual</Link>
                </li>
              </ul>
            </li>
            <li>
              <Link href="/documentos">Documentos</Link>
            </li>
            <li>
              <Link href="/convocatorias">Convocatorias</Link>
            </li>
            <li>
              <a class="has-arrow" href="#">Transparencia</a>
              <ul class="sub-menu">
                <li>
                    <Link href="/transparencia/procedimiento-solicitud">Procedimiento de Solicitud</Link>
                </li>
                <li>
                    <Link href="/transparencia/oficina-de-enlace">Oficina de Enlace</Link>
                </li>
                <li>
                    <Link href="/transparencia/comite-de-transparencia">Comité de Transparencia</Link>
                </li>
                <li>
                    <Link href="/transparencia/obligaciones-de-transparencia">Obligaciones de Transparencia</Link>
                </li>
                <li>
                    <Link href="/transparencia/obligaciones-de-transparencia">Informes trimestrales de Secretarías</Link>
                </li>
                <li>
                   <a target="_blank" href="http://consultapublicamx.inai.org.mx:8080/vut-web/?idSujetoObigadoParametro=16045&idEntidadParametro=26&idSectorParametro=20">Plataforma Nacional de Transparencia</a>
                </li>
              </ul>
            </li>
            <li>
              <Link href="/noticias">Noticias</Link>
            </li>
            <li>
                <Link href="/proveedores">Proveedores</Link>
              </li>
            <li>
                <a href="http://finanzas.sutues.org.mx/login.aspx">Sistema Financiero</a>
            </li>
          </ul>
        </nav>
        <div class="action-bar">
          <a href="#">
            <i class="fa-solid fa-location-dot fa-xl"></i>
            Ley Federal del Trabajo, S/N esquina con Perimetral. Universidad Estatal de Sonora.
          </a>
          <a href="tel:+5216622851152"
            ><i class="fal fa-phone"></i>(662) 285 1152</a
          >
          <Link  href="/contactanos" class="theme-btn bordered-btn"
            >Contactanos</Link
          >
        </div>
      </div>
    </div>
    <div :class="route.name === 'home3' ? 'overlay-two' : 'overlay'"></div>
  </div>
</template>
<style>
.mobile-nav {
    position: fixed;
    right: -380px;
    top: 0;
    width: 320px;
    height: 100vh;
    scroll-behavior: smooth;
    overflow-y: scroll;
    transition: right 0.5s ease-in;
    background-color: #683431;
    padding: 20px;
    z-index: 9999;
    box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);
}
.mobile-nav .sidebar-nav .metismenu a {
    position: relative;
    display: block;
    padding: 10px 15px;
    transition: all 0.3s ease-out;
    text-decoration: none;
    color: #fff;
    outline-width: 0;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-bottom: 1px solid #fff;
}
.mobile-nav .sidebar-nav .metismenu a:hover, .mobile-nav .sidebar-nav .metismenu a:focus, .mobile-nav .sidebar-nav .metismenu a:active {
    text-decoration: none;
    color: #f8f9fa;
    background: #683431;
}
.theme-btn, .bordered-btn {
    display: inline-block;
    background: #683431;
    color: #eee;
    font-family: "Poppins", sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20px;
    padding: 16px 40px;
    border: 1px solid #fff;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    transition: 0.3s;
}
</style>
