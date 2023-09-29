<script setup>
import { computed } from "vue";
import { useRoute } from "vue-router";
const route = useRoute();

const currentPage = computed(() => {
  let currentPath = "";
  switch (route.name) {
    case "team":
      currentPath = "our team";
      break;
    default:
      currentPath = route.name;
      break;
  }

  return currentPath.toUpperCase();
});
</script>
<template>
  <div class="row pb-60">
    <div class="col-xl-6 col-lg-6">
      <div class="section-title">
        <h1>Our Team</h1>
        <h6><router-link to="/">Home /</router-link> {{ currentPage }}</h6>
      </div>
    </div>
  </div>
</template>
