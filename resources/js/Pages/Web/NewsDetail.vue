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
    attacheds: {
        type: Object,
        default: () => ({}),
    },
    recents: {
        type: Object,
        default: () => ({}),
    },
});

const news = useForm({
    id: props.news.id,
    title: props.news.title,
    type: props.news.type_id,
    content: props.news.content,
    date: props.news.updated_at,
    picture: props.news.picture,
});

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
            <div class="blog-feature-img" v-if="news.content != null">
              <img v-if="news.picture == null" alt="blog feature" src="/assets/img/blog/blog-details-1.jpg" />
              <img v-else :alt="news.title" :src="'/storage/heroarea/'+ news.picture"  />
            </div>
            <br>
            <div v-if="news.content != null" v-html="news.content" />
            <div v-if="attacheds.length == 1 && news.content == null " v-for="attached in attacheds" >
                <object :data="'/storage/news/attacheds/'+news.id+'/'+ attached.file" type="application/pdf" width="100%" height="900px"></object>
            </div>
            <div v-else class="popular-tag-wrap">
                <h5 class="mb-8">Archivos Adjuntos</h5>
                <div v-for="attached in attacheds">
                    <span>
                      <a :href="'/download/' + attached.id + '/'+ news.type" >
                        {{ attached.file }}
                      </a>
                    </span>
                </div>
            </div>
            <br>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-12" v-if="recents.length > 0">
          <BlogSidebar :recents="recents" />
        </div>
      </div>
    </div>
  </div>
  <Footer />
</template>
