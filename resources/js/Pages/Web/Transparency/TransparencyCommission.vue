<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    defineProps({
        staff: Array
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
                        <h1>Comité de trasparencia</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-section section-padding pb-60 wow animated fadeInLeft" data-wow-delay="200ms">
      <div class="container">
        <div class="row">
          <!--<div class="section-title text-center">
            <h2>Comité Ejecutivo Sindical</h2>
          </div>-->
          <div v-for="item in staff" :key="item.id" class="col-xl-3 col-lg-3 col-md-6">
            <div class="single-team-item wow fadeInLeft" data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
              <div class="team-img" v-if="item.person.photo == null">
                <img :alt="item.person.first_name" src="/assets/img/secretary.jpeg" />
              </div>
              <div class="team-img" v-else>
                <img :alt="item.person.first_name" :src="'/storage/staff/'+ item.person.photo" />
              </div>
              <div class="team-info">
                <h5>{{ item.person.first_name }} {{ item.person.last_name }}</h5>
                <p><strong>{{ item.position.name }}</strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Footer />
</template>
