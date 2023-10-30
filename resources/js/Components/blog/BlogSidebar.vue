<script setup>
import { Link } from '@inertiajs/vue3'

defineProps(['recents'])

</script>
<template>
  <div class="blog-sidebar">
    <div class="recent-post-wrap">
      <h5 v-if="recents[0].type_id == 1">Noticias Recientes</h5>
      <h5 v-else-if="recents[0].type_id == 2">Convocatorias Recientes</h5>
      <div v-for="r in recents" :key="r.id" class="single-recent-post">
        <div class="recent-post-thumbs">
          <img :alt="r.title" :src="'/storage/heroarea/'+ r.picture" />
        </div>
        <div class="recent-post-content">
          <p>{{ r.published }}</p>
          <Link :href="route('newsDetails', r.slug)">
            <h6>{{ r.title }}</h6>
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>
