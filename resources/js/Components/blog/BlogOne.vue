<script setup>
import { onBeforeMount, ref } from "vue";
import axios from "axios";

const blogs = ref([]);

onBeforeMount(async () => {
  try {
    const { data: fetchedblogs } = await axios.get("/data/blogs.json");
    blogs.value = fetchedblogs.blogs;
  } catch (error) {
    console.log(error);
  }
});
const index = (i) => {
  let k = i + 1;
  k = k * 2 + 1;
  return k;
};
</script>
<template>
  <div class="blog-area section-padding pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Latest Article</h2>
          </div>
        </div>
      </div>
      <div class="row" v-if="blogs.length > 0">
        <div
          v-for="(blog, i) in blogs.slice(0, 3)"
          :key="blog.id"
          class="col-lg-4 col-md-6 col-sm-6"
        >
          <div
            class="single-blog wow fadeInLeft"
            :data-wow-delay="`${index(i) * 0.1}s`"
          >
            <router-link
              class="blog-img"
              :to="{ name: 'blogDetails', params: { id: blog.id } }"
              ><img :alt="blog.category" class="img-fluid" :src="blog.img"
            /></router-link>
            <div class="blog-content">
              <span
                ><a href="#">{{ blog.category }}</a></span
              >
              <h3>
                <router-link
                  :to="{ name: 'blogDetails', params: { id: blog.id } }"
                  >{{ blog.thumb_heading }}</router-link
                >
              </h3>
              <div class="blog-date">
                <p>{{ blog.published }}</p>
              </div>
              <router-link
                class="read-more"
                :to="{ name: 'blogDetails', params: { id: blog.id } }"
                >Read More</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
