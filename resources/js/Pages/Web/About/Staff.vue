<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    defineProps({ 
        staff: Array 
    });
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
          <div v-for="item in staff" :key="item.id" class="col-xl-3 col-lg-3 col-md-6">
            <div class="single-team-item">
              <div class="team-img" v-if="item.person.photo == null">
                <img :alt="item.person.first_name" src="/assets/img/secretary.jpeg" />
              </div>
              <div class="team-img" v-else>
                <img :alt="item.person.first_name" src="/assets/img/secretary.jpeg" />
              </div>
              <div class="team-info">
                <h5>{{ item.person.first_name }} {{ item.person.last_name }}</h5>
                <p>{{ item.position.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Footer />
</template>
<style>
.staff {
    background-image: url(../../../../../public/assets/img/protesta_sutues.jpg);
}
</style>

