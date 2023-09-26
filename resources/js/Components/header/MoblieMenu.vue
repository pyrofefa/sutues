<script setup>
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
        <i class="las la-bars"></i>
      </div>
      <!-- mobile menu - responsive menu  -->
      <div class="mobile-nav">
        <button type="button" class="close-nav">
          <i class="las la-times-circle"></i>
        </button>
        <nav class="sidebar-nav">
          <ul class="metismenu" id="mobile-menu">
            <li>
              <a class="has-arrow" href="#">Homes</a>
              <ul class="sub-menu">
                <li>
                  <router-link :to="{ name: 'home' }">Home - One</router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'home2' }">Home - Two</router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'home3' }"
                    >Home - Three</router-link
                  >
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="#">Pages</a>
              <ul class="sub-menu">
                <li>
                  <router-link :to="{ name: 'about' }">About</router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'services' }">Services</router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'team' }">Our Team</router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'price' }"
                    >Pricing Plans</router-link
                  >
                </li>
                <li>
                  <router-link :to="{ name: 'faq' }">FaQ Page</router-link>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="#">Portfolio</a>
              <ul class="sub-menu">
                <li>
                  <router-link :to="{ name: 'portfolioStandard' }"
                    >Standard</router-link
                  >
                </li>
                <li>
                  <router-link :to="{ name: 'portfolioGallery' }"
                    >Gallery</router-link
                  >
                </li>
                <li>
                  <router-link :to="{ name: 'portfolioSlider' }"
                    >Slider</router-link
                  >
                </li>
                <li class="nav-item">
                  <a href="#"
                    >List Layouts <i class="las la-arrow-right"></i>
                    <span class="sub-nav-toggler"></span>
                  </a>
                  <ul class="sub-menu-two">
                    <li>
                      <router-link :to="{ name: 'portfolioLayout2' }"
                        >Two Columns</router-link
                      >
                    </li>
                    <li>
                      <router-link :to="{ name: 'portfolioLayout3' }"
                        >Three Columns</router-link
                      >
                    </li>
                    <li>
                      <router-link :to="{ name: 'portfolioLayout4' }"
                        >Four Columns</router-link
                      >
                    </li>
                  </ul>
                </li>

                <li>
                  <router-link
                    :to="{ name: 'portfolioDetails', params: { id: '1' } }"
                    >Portfolio Details</router-link
                  >
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="#">Blog</a>
              <ul class="sub-menu">
                <li>
                  <router-link :to="{ name: 'blogs' }">Blogs</router-link>
                </li>
                <li>
                  <router-link
                    :to="{ name: 'blogDetails', params: { id: '1' } }"
                    >Blog Details</router-link
                  >
                </li>
              </ul>
            </li>
            <li>
              <router-link :to="{ name: 'contact' }">Contact</router-link>
            </li>
          </ul>
        </nav>
        <div class="action-bar">
          <a href="mailto:info@architex.com"
            ><i class="las la-envelope"></i>info@architex.com</a
          >
          <a href="tel:123-456-7890"
            ><i class="fal fa-phone"></i>123-456-7890</a
          >
          <router-link :to="{ name: 'contact' }" class="theme-btn bordered-btn"
            >Contact Us</router-link
          >
        </div>
      </div>
    </div>
    <div :class="route.name === 'home3' ? 'overlay-two' : 'overlay'"></div>
  </div>
</template>
