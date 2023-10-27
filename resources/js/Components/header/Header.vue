<script setup>
import { Link } from '@inertiajs/vue3'
import { onMounted } from "vue";
import MoblieMenu from "./MoblieMenu.vue";


onMounted(() => {

});
</script>
<template>
  <div
    id="header-sticky"
    class="header-area"
    :class="route.name === 'home3' ? 'absolute-header' : ''"
  >
    <div class="navigation">
      <div class="container">
        <div class="header-inner-box">
          <Link href="/" class="logo">
            <img alt="" src="/assets/img/Header-Sutues.png" width="200" />
          </Link>
          <div class="main-menu d-none d-lg-block">
            <ul>
              <li>
                <a href="#">Conócenos<i class="las la-angle-down"></i></a>
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
                <a href="#">Transparencia <i class="las la-angle-down"></i></a>
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
                </ul>
              </li>
              <li>
                <Link href="/noticias">Noticias</Link>
              </li>
              <li>
                <Link href="/proveedores">Proveedores</Link>
              </li>
              <li>
                <Link href="/contactanos">Contactanos</Link>
              </li>
              <li>
                <a href="http://finanzas.sutues.org.mx/login.aspx" target="_blank">Sistema Financiero</a>
              </li>
            </ul>
          </div>
          <MoblieMenu />
        </div>
      </div>
    </div>
  </div>
</template>
<style>
  .main-menu ul > li > ul {
    position: absolute;
    top: 100%;
    width: 230px;
    background-color: #fff;
    left: 0;
    z-index: 999;
    /*box-shadow: 0 13px 35px -12px rgba(35, 35, 35, 0.15);*/
    visibility: hidden;
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.5s ease-in-out;
    padding: 10px 0px;
}
.main-menu ul > li > ul li a {
    display: block;
    color: black;
    padding: 12px 25px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.main-menu ul > li > ul li a:hover {
    display: block;
    color: #683431;
    padding: 12px 25px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
}
</style>
