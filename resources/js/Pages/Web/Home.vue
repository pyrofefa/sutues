<script setup>
  import Header from '@/Components/header/Header.vue';
  import Footer from '@/Components/footer/FooterArea.vue'
  import HeroAreaTwo from '@/Components/heroArea/HeroAreaTwo.vue'
  import BlogTwo from '@/Components/blog/BlogTwo.vue'
  import Service from '@/Components/service/Service.vue'
  import BackToTop from '@/Components/BackToTop.vue'
</script>
<template>
  <Header />
  <HeroAreaTwo />
  <BlogTwo :type="false" />
  <Service /> 
  <Footer />
  <BackToTop />
</template>
