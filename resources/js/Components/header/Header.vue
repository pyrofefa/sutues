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
          <Link href="/" class="logo">Architex</Link>
          <div class="main-menu d-none d-lg-block">
            <ul>
              <li>
                <a href="#">Conocenos <i class="las la-angle-down"></i></a>
                <ul class="sub-menu">
                  <li>
                    <Link href="/">Historia</Link>
                  </li>
                  <li>
                    <Link href="/">Misión</Link>
                  </li>
                  <li>
                    <Link href="/">Visión</Link>
                  </li>
                  <li>
                    <Link href="/">Objetivos</Link>
                  </li>
                  <li>
                    <Link href="/">Secretarios generales</Link>
                  </li>
                  <li>
                    <Link href="/">Estructura organizacion</Link>
                  </li>
                  <li>
                    <Link href="/">Comité actual</Link>
                  </li>
                </ul>
              </li>
              <li>
                <Link href="/conocenos">Documentos</Link>
              </li>
              <li>
                <Link href="/conocenos">Convocatorias</Link>
              </li>
              <li>
                <a href="#">Transparencia <i class="las la-angle-down"></i></a>
                <ul class="sub-menu">
                  <li>
                    <Link href="/">Procedimiento de solicitud</Link>
                  </li>
                  <li>
                    <Link href="/">Oficina de Enlace</Link>
                  </li>
                  <li>
                    <Link href="/">Comité de Transparencia</Link>
                  </li>
                  <li>
                    <Link href="/">Obligaciones de Transparencia</Link>
                  </li>
                </ul>
              </li>
              <li>
                <Link href="/conocenos">Noticias</Link>
              </li>
              <li>
                <Link href="/conocenos">Contactanos</Link>
              </li>
            </ul>
          </div>

          <MoblieMenu />
        </div>
      </div>
    </div>
  </div>
</template>
