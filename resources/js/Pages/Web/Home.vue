<script setup>
  import Header from '@/Components/header/Header.vue';
  import Footer from '@/Components/footer/FooterArea.vue'
  import HeroAreaHome from '@/Components/heroArea/HeroAreaHome.vue'
  import BlogTwo from '@/Components/blog/BlogTwo.vue'
  import Service from '@/Components/service/Service.vue'
  import BackToTop from '@/Components/BackToTop.vue'

  const props = defineProps({
        news: {
            type: Array,
        },
        data: {
            type: Array,
        }
    });

</script>
<template>
  <Header />
  <HeroAreaHome :data="data" />
  <BlogTwo :data="news" />
  <Service />
  <Footer />
  <BackToTop />
</template>
