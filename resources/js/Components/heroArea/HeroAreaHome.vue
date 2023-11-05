<script setup>
import { onMounted } from "vue";
import { Link } from '@inertiajs/vue3'

defineProps(['data'])

onMounted(() => {
  $(".homepage-slides").owlCarousel({
    items: 1,
    dots: false,
    nav: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 6000,
    smartSpeed: 2000,
    slideSpeed: 600,
    navText: [
      "<i class='fa-solid fa-arrow-left'></i>",
      "<i class='fa-solid fa-arrow-right'></i>",
    ],
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: false,
      },
      600: {
        items: 1,
        nav: false,
        dots: false,
      },
      768: {
        items: 1,
      },
      1100: {
        items: 1,
      },
    },
  });

  $(".homepage-slides").on("translate.owl.carousel", function () {
    $(".single-slide-item h3")
      .removeClass("animated fadeInUp")
      .css("opacity", "1");
    $(".single-slide-item h1")
      .removeClass("animated fadeInDown")
      .css("opacity", "1");
    $(".single-slide-item p")
      .removeClass("animated fadeInUp")
      .css("opacity", "1");
    $(".single-slide-item .main-btn")
      .removeClass("animated fadeInDown")
      .css("opacity", "1");
  });

  $(".homepage-slides").on("translated.owl.carousel", function () {
    $(".single-slide-item h3")
      .addClass("animated fadeInUp")
      .css("opacity", "1");
    $(".single-slide-item h1")
      .addClass("animated fadeInDown")
      .css("opacity", "1");
    $(".single-slide-item p").addClass("animated fadeInUp").css("opacity", "1");
    $(".single-slide-item .main-btn")
      .addClass("animated fadeInDown")
      .css("opacity", "1");
  });
});
</script>
<template>
  <div class="homepage-slides owl-carousel" id="home-2" >
    <div v-for="d in data">
      <div class="single-slide-item hero-area-bg-3" v-if="d.picture != null"  v-bind:style="{ 'background-image': 'url(/storage/heroarea/' + d.picture + ')' }">  
        <div class="overlay"></div>
        <div class="hero-area-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                <div class="section-title">
                  <h6 class="text-white">{{ d.description}}</h6>
                  <h1>
                    {{ d.title }}
                  </h1>
                  <Link v-if="d.type_id == 1" :href="route('newsDetails', d.slug)" class="theme-btn">Leer más</Link>
                  <Link v-else-if="d.type_id == 2" :href="route('convocationsDetails', d.slug)" class="theme-btn">Leer más</Link>
                  <Link v-else-if="d.type_id == 3" :href="route('documentsDetails', d.slug)" class="theme-btn">Leer más</Link>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
      <div class="single-slide-item hero-area-bg-3" v-else-if="d.picure == null && d.type_id == 1" style="background-image: url('/assets/img/headerNews.jpg');">  
        <div class="overlay"></div>
        <div class="hero-area-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                <div class="section-title">
                  <h6 class="text-white">{{ d.description}}</h6>
                  <h1>
                    {{ d.title }}
                  </h1>
                  <Link :href="route('newsDetails', d.slug)" class="theme-btn">Leer más</Link>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>      
      <div class="single-slide-item hero-area-bg-3" v-else-if="d.picure == null && d.type_id == 2" style="background-image: url('/assets/img/headerConvocations.jpg');">  
        <div class="overlay"></div>
        <div class="hero-area-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                <div class="section-title">
                  <h6 class="text-white">{{ d.description}}</h6>
                  <h1>
                    {{ d.title }}
                  </h1>
                  <Link :href="route('convocationsDetails', d.slug)" class="theme-btn">Leer más</Link>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>
      <div class="single-slide-item hero-area-bg-3" v-else-if="d.picure == null && d.type_id == 3" style="background-image: url('/assets/img/headerDocuments.jpg');">  
        <div class="overlay"></div>
        <div class="hero-area-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
                <div class="section-title">
                  <h6 class="text-white">{{ d.description}}</h6>
                  <h1>
                    {{ d.title }}
                  </h1>
                  <Link :href="route('documentsDetails', d.slug)" class="theme-btn">Leer más</Link>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>   
    </div>
  </div>
</template>
