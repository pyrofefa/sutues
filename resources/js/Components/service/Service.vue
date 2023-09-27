<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";

const services = ref([]);

onMounted(async () => {
  const { data: fetchedServices } = await axios.get("/data/services.json");
  services.value = fetchedServices.services;
});
</script>
<template>
  <div class="service-section gray-bg section-padding pb-90">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8 col-md-8 text-center">
          <div class="section-title">
            <h2>
              Great Experience for <br />
              Architecture Solutions
            </h2>
          </div>
        </div>
      </div>
      <div class="row mt-30">
        <div
          v-for="(service, i) in services.slice(0, 4)"
          :key="service.id"
          class="col-xl-3 col-lg-3 col-md-6"
        >
          <div class="single-service-wrapper">
            <div class="service-icon">
              <img :alt="service.title" :src="service.icon" />
            </div>
            <h5>{{ service.title }}</h5>
            <p>{{ service.excerpt }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
