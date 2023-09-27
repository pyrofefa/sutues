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
                  <Link  href="/">Home - One</Link>
                </li>
                <li>
                  <Link  href="/">Home - Two</Link>
                </li>
                <li>
                  <Link  href="/"
                    >Home - Three</Link
                  >
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="#">Pages</a>
              <ul class="sub-menu">
                <li>
                  <Link  href="/">About</Link>
                </li>
                <li>
                  <Link  href="/">Services</Link>
                </li>
                <li>
                  <Link  href="/">Our Team</Link>
                </li>
                <li>
                  <Link  href="/"
                    >Pricing Plans</Link
                  >
                </li>
                <li>
                  <Link  href="/">FaQ Page</Link>
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="#">Portfolio</a>
              <ul class="sub-menu">
                <li>
                  <Link href="/"
                    >Standard</Link
                  >
                </li>
                <li>
                  <Link  href="/"
                    >Gallery</Link
                  >
                </li>
                <li>
                  <Link  href="/"
                    >Slider</Link
                  >
                </li>
                <li class="nav-item">
                  <a href="#"
                    >List Layouts <i class="las la-arrow-right"></i>
                    <span class="sub-nav-toggler"></span>
                  </a>
                  <ul class="sub-menu-two">
                    <li>
                      <Link  href="/"
                        >Two Columns</Link
                      >
                    </li>
                    <li>
                      <Link  href="/"
                        >Three Columns</Link
                      >
                    </li>
                    <li>
                      <Link  href="/"
                        >Four Columns</Link
                      >
                    </li>
                  </ul>
                </li>

                <li>
                  <Link
                  href="/"
                    >Portfolio Details</Link
                  >
                </li>
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="#">Blog</a>
              <ul class="sub-menu">
                <li>
                  <Link  href="/">Blogs</Link>
                </li>
                <li>
                  <Link
                  href="/"
                    >Blog Details</Link
                  >
                </li>
              </ul>
            </li>
            <li>
              <Link  href="/">Contact</Link>
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
          <Link  href="/" class="theme-btn bordered-btn"
            >Contact Us</Link
          >
        </div>
      </div>
    </div>
    <div :class="route.name === 'home3' ? 'overlay-two' : 'overlay'"></div>
  </div>
</template>
