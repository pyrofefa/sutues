<script setup>
import {  onMounted } from "vue";
import Header from '@/Components/header/Header.vue';
import Footer from '@/Components/footer/FooterArea.vue'
import Suppliers from '@/Components/Suppliers.vue';

const props = defineProps({
    suppliers: {
        type: Object,
        default: () => ({}),
    }
});

onMounted(() => {
    $(".portfolio-slider").owlCarousel({
      items: 1,
      margin: 30,
      dots: true,
      nav: false,
      loop: true,
      autoplay: true,
      responsiveClass: true,
      responsive: {
        575: {
          items: 1,
          nav: false,
          dots: false,
        },

        767: {
          items: 2,
          nav: false,
          dots: false,
        },

        990: {
          items: 2,
          loop: true,
        },
        1200: {
          items: 2,
          dots: true,
          loop: true,
        },
      },
    });
  
});
</script>
<template>
    <Header />
    <div class="breadcrumb-area bread-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-title">
                        <h1>Proveedores</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-section section-padding">
     <div class="container">
       <div class="row">
        <div class="portfolio-slider owl-carousel">
           <div class="single-portfolio-wrapper" v-for="project in suppliers">
             <div class="portfolio-img">
                <img :alt="project.name" :src="'/storage/supplier/'+ project.logo" width="800" height="600" />
             </div>
             <div class="portfolio-title">
               <h3>{{ project.name }}</h3>
             </div>
           </div>
         </div> 
       </div>
     </div>
    </div>   
    <Footer />
</template>
<style>
.portfolio-img img {
  width: 800px;
  height: 666px;
}
</style>
