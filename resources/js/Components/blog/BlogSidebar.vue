<script setup>
import { onBeforeMount, ref } from "vue";
import axios from "axios";

const recent = ref([]);

onBeforeMount(async () => {
  try {
    const { data: fetched } = await axios.get("/data/blogs.json");
    const len = fetched.blogs.length;
    recent.value = fetched.blogs.slice(len - 3);
  } catch (error) {
    console.log(error);
  }
});
</script>
<template>
  <div class="blog-sidebar">
    <div class="search-bar-wrap d-flex">
      <input placeholder="search" type="search" />
      <i class="fal fa-search"></i>
    </div>
    <div class="recent-post-wrap">
      <h5>Recent Post</h5>
      <div v-for="r in recent.slice()" :key="r.id" class="single-recent-post">
        <div class="recent-post-thumbs">
          <img :alt="r.title" :src="r.img" />
        </div>
        <div class="recent-post-content">
          <p>{{ r.published }}</p>
          <router-link :to="{ name: 'blogDetails', params: { id: r.id } }"
            ><h6>{{ r.title }}</h6></router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>
