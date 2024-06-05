<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    import { inject } from 'vue'
    const Swal = inject('$swal')

    defineProps({
        staff: Array,
        vigilance: Array,
        honor: Array,
        delegation: Array
    });

    function showModal(person) {
      Swal.fire({
          title: person.first_name + person.last_name,
          text: person.summary,
          showCloseButton: true,
          showConfirmButton: false,
      })
    }

</script>
<template>
  <Header />
  <div class="breadcrumb-area bread-bg staff">
      <div class="overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="breadcrumb-title">
                      <h1>Comité Actual</h1>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="team-section section-padding pb-60 wow animated fadeInLeft" data-wow-delay="200ms">
    <div class="container">
      <div class="row">
        <div class="section-title text-center">
          <h3><strong>Comité Ejecutivo Sindical</strong></h3>
        </div>
        <div v-for="item in staff" :key="item.id" class="col-xl-3 col-lg-3 col-md-6">
          <div @click="showModal(item.person)" class="single-team-item wow fadeInLeft"  data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
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
      <div class="row">
        <div class="section-title text-center">
          <h3><strong>Comisión de Vigilancia</strong></h3>
        </div>
        <div v-for="item in vigilance" :key="item.id" class="col-xl-3 col-lg-3 col-md-6">
          <div @click="showModal(item.person)" class="single-team-item wow fadeInLeft"  data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
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
      <div class="row">
        <div class="section-title text-center">
          <h3><strong>Comisión de Honor y Justicia</strong></h3>
        </div>
        <div v-for="item in honor" :key="item.id" class="col-xl-3 col-lg-3 col-md-6">
          <div @click="showModal(item.person)" class="single-team-item wow fadeInLeft"  data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
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
      <div class="row">
        <div class="section-title text-center">
          <h3><strong>Delegaciones Sindicales</strong></h3>
        </div>
        <div v-for="item in delegation" :key="item.id" class="col-xl-3 col-lg-3 col-md-6">
          <div @click="showModal(item.person)" class="single-team-item wow fadeInLeft"  data-wow-delay="0.30000000000000004s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
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
<style>
p {
    font-family: "DM Sans", sans-serif;
    font-size: 16px;
    font-weight: 400;
    line-height: 26px;
    position: relative;
    color: #000;
    white-space: pre-line;
}
</style>

