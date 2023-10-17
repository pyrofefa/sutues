<script setup>
import { onMounted } from "vue";

defineProps(['data'])

onMounted(() => {
  $(".homepage-slides").owlCarousel({
    items: 1,
    dots: false,
    nav: true,
    loop: true,
    autoplay: false,
    autoplayTimeout: 5000,
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
    <div class="single-slide-item hero-area-bg-3" v-for="news in data">
      <div class="overlay"></div>
      <div class="hero-area-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".2s">
              <div class="section-title">
                <h6 class="text-white">{{ news.title}}</h6>
                <h1>
                  {{ news.description }}
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</template>
