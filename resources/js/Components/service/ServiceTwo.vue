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
  <div class="service-section gray-bg section-padding pb-60">
    <div class="container">
      <div class="row">
        <div
          v-for="(service, i) in services.slice(4)"
          :key="service.id"
          class="col-xl-4 col-lg-4 col-md-6"
        >
          <div class="single-service">
            <div class="single-service-inner">
              <div class="icon-wrap">
                <img :alt="service.title" :src="service.icon" />
              </div>
              <div class="service-title">
                <h4>{{ service.title }}</h4>
              </div>
            </div>
            <p>
              {{ service.excerpt }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
