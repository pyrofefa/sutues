<script setup>
import { onMounted, ref } from "vue";
import BlogSidebar from "@/Components/blog/BlogSidebar.vue";
import Header from '@/Components/header/Header.vue';
import Footer from '@/Components/footer/FooterArea.vue'
import { useForm  } from '@inertiajs/vue3';
import moment from 'moment/moment'
import 'moment/locale/es';

const props = defineProps({
    news: {
        type: Object,
        default: () => ({}),
    },
});

const news = useForm({
    id: props.news.id,
    title: props.news.title,
    content: props.news.content,
    date: props.news.updated_at,
});

const blog = ref({});

onMounted(() => {
  $("[data-background").each(function () {
    $(this).css(
      "background-image",
      "url( " + $(this).attr("data-background") + "  )"
    );
  });
});
</script>
<template>
  <Header />
  <div class="breadcrumb=section section-padding pb-20">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-center">
          <div class="section-title">
            <h2>{{ news.title }}</h2>
          </div>
          <div class="blog-meta-wrap">
            <div class="blog-meta">
              <p><i class="las la-calendar-alt"></i>{{ moment(news.date).locale('es').format('LL') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blog Details Page  -->
  <div class="blog-details-page light-bg-1">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-12">
          <div class="blog-content-wrap">
            <div class="blog-feature-img">
              <img alt="blog feature" src="/assets/img/blog/blog-details-1.jpg" />
            </div>
            <div v-html="news.content" />
          </div>          
        </div>
        <div class="col-xl-4 col-lg-4 col-12">
          <BlogSidebar />
        </div>
      </div>
    </div>
  </div>
  <Footer />
</template>
