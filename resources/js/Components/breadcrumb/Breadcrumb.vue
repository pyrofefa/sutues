<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";
const route = useRoute();

const breadcrumbBg = {
  about: "bread-bg",
  services: "service-bg",
  price: "price-bg",
  faq: "faq-bg",
  portfolioStandard: "port-standard",
  portfolioGallery: "port-gallery",
  portfolioSlider: "port-slider",
  portfolioLayout2: "port-list-layout",
  portfolioLayout3: "port-list-layout",
  portfolioLayout4: "port-list-layout",
  blogs: "bread-bg",
  contact: "contact-bread-bg",
};

const currentPageTitle = computed(() => {
  let currentPath = "";
  switch (route.name) {
    case "about":
      currentPath = "about us";
      break;
    case "price":
      currentPath = "pricing plan";
      break;
    case "faq":
      currentPath = "FREQUENTLY ASKED QUESTIONS";
      break;
    case "portfolioStandard":
      currentPath = "Portfolio - Standard";
      break;
    case "portfolioGallery":
      currentPath = "Portfolio - Gallery";
      break;
    case "portfolioSlider":
      currentPath = "Portfolio - Slider";
      break;
    case "portfolioLayout2":
      currentPath = "Portfolio - List Layout - 2 Columns";
      break;
    case "portfolioLayout3":
      currentPath = "Portfolio - List Layout - 3 Columns";
      break;
    case "portfolioLayout4":
      currentPath = "Portfolio - List Layout - 4 Columns";
      break;
    case "contact":
      currentPath = "contact us";
      break;
    default:
      currentPath = route.name;
      break;
  }

  return currentPath.toUpperCase();
});
</script>
<template>
  <div :class="`breadcrumb-area ${breadcrumbBg[route.name]}`">
    <div class="overlay"></div>
    <div class="container">
      <div
        class="row"
        :class="{ 'justify-content-center': route.name === 'faq' }"
      >
        <div
          :class="
            route.name === 'faq'
              ? 'col-lg-12 text-center'
              : route.name.includes('portfolio')
              ? 'col-lg-12'
              : 'col-lg-6'
          "
        >
          <div class="breadcrumb-title">
            <h1>{{ currentPageTitle }}</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
