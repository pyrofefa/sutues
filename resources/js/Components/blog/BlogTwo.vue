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
  <div
    class="blog-two section-padding pb-60"
    :class="type ? 'blog-page' : 'blog-section '"
  >
    <div class="container">
      <div v-if="!type" class="row justify-content-center">
        <div class="col-xl-6 text-center">
          <div class="section-title">
            <h6>Blog</h6>
            <h2>Follow The Latest News</h2>
          </div>
        </div>
      </div>
      <div class="row mt-40" v-if="blogs.length > 0">
        <div
          v-for="(blog, i) in type ? blogs : blogs.slice(0, 3)"
          :key="blog.id"
          class="col-xl-4 col-lg-4 col-md-6 col-12"
        >
          <div class="single-blog-wrap">
            <div class="blog-bg">
              <img :alt="blog.category" :src="blog.img" />
            </div>
            <div class="blog-content">
              <h3>
                <router-link
                  :to="{ name: 'blogDetails', params: { id: blog.id } }"
                  >{{ blog.title }}</router-link
                >
              </h3>
              <p>
                {{ blog.excerpt }}
              </p>
              <router-link
                class="details-link"
                :to="{ name: 'blogDetails', params: { id: blog.id } }"
                ><i class="las la-long-arrow-alt-right"></i
              ></router-link>
            </div>
          </div>
        </div>
        <ul v-if="type" class="pagination">
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li aria-current="page" class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#"><i class="las la-angle-right"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
