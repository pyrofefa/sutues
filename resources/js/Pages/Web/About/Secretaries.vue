<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue'
    defineProps({ 
        secretaries: Array 
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
                            <h1>Secretarios Generales</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-section section-padding pb-60 wow animated fadeInLeft" data-wow-delay="200ms">
                <div class="container">
                    <div class="row">
                        <div v-for="secretary in secretaries" :key="secretary.id" class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-team-item">
                                <div class="team-img" v-if="secretary.person.photo == null">
                                    <img :alt="secretary.person.first_name" src="/assets/img/secretary.jpeg" />
                                </div>
                                <div class="team-img" v-else>
                                    <img :alt="secretary.person.first_name" src="/assets/img/secretary.jpeg" />
                                </div>
                                <div class="team-info">
                                    <h5>{{ secretary.person.first_name }} {{ secretary.person.last_name }}</h5>
                                    <p>{{ secretary.period }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <Footer />
</template>


