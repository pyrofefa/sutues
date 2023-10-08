<script setup>
import { onBeforeMount, ref } from "vue";
import axios from "axios";

const { type } = defineProps(["type"]);
const blogs = ref([]);

onBeforeMount(async () => {
  try {
    const { data: fetchedblogs } = await axios.get("/data/blogs.json");
    blogs.value = fetchedblogs.blogs;
  } catch (error) {
    console.log(error);
  }
});
</script>
<template>
  <div class="blog-two section-padding pb-10 blog-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 text-center">
          <div class="section-title">
            <h2>Sigue las últimas noticias</h2>
          </div>
        </div>
      </div>
      <div class="row mt-10">
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
          <div class="single-blog-wrap">
            <div class="blog-bg">
              <img alt="Interior Design" src="/assets/img/blog/1.jpg">
            </div>
            <div class="blog-content">
              <h3><a href="/blog/1" class="">Creative Design: A Structure of Passion</a></h3>
              <p>Maecenas ac sem rutrum, lacinia nisl in, luctus ex. Nam gravida porttitor orci</p>
              <a href="/blog/1" class="details-link"><i class="fa la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
          <div class="single-blog-wrap">
            <div class="blog-bg">
              <img alt="Architecture" src="/assets/img/blog/2.jpg">
            </div>
            <div class="blog-content">
              <h3><a href="/blog/2" class="">Building Blocks: A Showcase of Architect</a></h3>
              <p>Maecenas ac sem rutrum, lacinia nisl in, luctus ex. Nam gravida porttitor orci</p>
              <a href="/blog/2" class="details-link"><i class="las la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-12">
          <div class="single-blog-wrap">
            <div class="blog-bg">
              <img alt="Exterior Design" src="/assets/img/blog/3.jpg">
            </div>
            <div class="blog-content">
              <h3><a href="/blog/3" class="">Xcube: A beautiful Architectural Masterpiece</a></h3>
              <p>Maecenas ac sem rutrum, lacinia nisl in, luctus ex. Nam gravida porttitor orci</p>
              <a href="/blog/3" class="details-link"><i class="las la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div><!--v-if-->
      </div>
    </div>
  </div>
</template>