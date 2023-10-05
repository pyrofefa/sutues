<script setup>
import { onBeforeMount, onMounted, ref } from "vue";
import axios from "axios";
import BlogSidebar from "@/Components/blog/BlogSidebar.vue";
import Header from '@/Components/header/Header.vue';
import Footer from '@/Components/footer/FooterArea.vue'

const blog = ref({});

onBeforeMount(async () => {
  try {
    const { data: fetched } = await axios.get("/data/blogs/id.json");
    blog.value = fetched;
  } catch (error) {
    console.log(error);
  }
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
  <div class="breadcrumb=section section-padding pb-60">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-center">
          <div class="section-title">
            <h6>{{ blog.category }}</h6>
            <h2>{{ blog.title }}r</h2>
          </div>
          <div class="blog-meta-wrap">
            <div class="blog-meta">
              <p><i class="las la-calendar-alt"></i>{{ blog.published }}</p>
            </div>
            <div class="blog-meta">
              <p><i class="las la-user-alt"></i>{{ blog.author }}</p>
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
            <div class="blog-feature-img" v-if="blog.images">
              <img alt="blog feature" :src="blog.images.detail_img_1" />
            </div>
            <p>
              {{ blog.full_description }}
              {{ blog.full_description }}
              {{ blog.full_description }}
              {{ blog.full_description }}
              {{ blog.full_description }}
            </p>
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
