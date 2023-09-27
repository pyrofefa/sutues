<script setup>
import { onBeforeMount, ref } from "vue";
import axios from "axios";
const { type } = defineProps(["type"]);

const services = ref([]);

onBeforeMount(async () => {
  try {
    const { data: fetchedServices } = await axios.get(
      "/data/service-categories.json"
    );
    services.value = fetchedServices.service_categories;
  } catch (error) {
    console.log(error);
  }
});
</script>
<template>
  <div class="service-section white-bg section-padding" id="service-3">
    <div class="container">
      <div class="row">
        <div
          class="col-xl-6 col-lg-7 col-12 wow fadeInLeft animated"
          data-wow-delay="200ms"
        >
          <div class="single-service-wrap">
            <div v-for="s in services" :key="s.id" class="single-service-inner">
              <div class="service-icon">
                <img :alt="s.title" :src="s.icon" />
              </div>
              <h5>
                <router-link :to="{ name: 'portfolioStandard' }">{{
                  s.title
                }}</router-link>
              </h5>
              <p>
                {{ s.excerpt }}
              </p>
              <router-link
                class="details-link"
                :to="{ name: 'portfolioStandard' }"
                ><i class="las la-arrow-right"></i
              ></router-link>
            </div>
          </div>
        </div>
        <div
          class="col-xl-6 col-lg-5 col-12 wow fadeInUp animated"
          data-wow-delay="200ms"
        >
          <div class="service-content-wrap">
            <div class="section-title">
              <h6>WHAT WE PROVIDE</h6>
              <h2>Making Your <b>Dream</b> Space Attractive</h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority suffered alteration in some form, by injected
              humour, or randomised words which don't look even slightly
              believable.
            </p>
            <div class="service-bg">
              <img alt="service" src="/assets/img/service-bg.jpg" />
              <router-link
                v-if="type"
                class="more-service-btn"
                :to="{ name: 'services' }"
                >More Services <i class="las la-arrow-right"></i
              ></router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
