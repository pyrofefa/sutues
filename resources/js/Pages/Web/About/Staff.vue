<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    import { onMounted, ref } from "vue";
    import axios from "axios";

    const team = ref([]);

    onMounted(async () => {
    const { data: fetchedTeam } = await axios.get("/data/team.json");
    team.value = fetchedTeam.team;
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
        <div v-for="t in team" :key="t.id" class="col-xl-3 col-lg-3 col-md-6">
          <div class="single-team-item">
            <div class="team-img">
              <img :alt="t.name" :src="t.img" />
            </div>
            <div class="team-info">
              <h5>{{ t.name }}</h5>
              <p>{{ t.designation }}</p>
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

