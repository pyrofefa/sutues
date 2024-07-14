<script setup>
import { Link } from '@inertiajs/vue3'
import moment from 'moment/moment'
import 'moment/locale/es';

defineProps(['recents'])

</script>
<template>
  <div class="blog-sidebar">
    <div class="recent-post-wrap">
      <h5 v-if="recents[0].type_id == 1">Noticias Recientes</h5>
      <h5 v-else-if="recents[0].type_id == 2">Convocatorias Recientes</h5>
      <h5 v-else-if="recents[0].type_id == 3">Documentos Recientes</h5>
      <h5 v-else-if="recents[0].type_id == 4">Otras Actas</h5>
      <div v-for="r in recents" :key="r.id" class="single-recent-post">
        <div class="recent-post-thumbs" v-if="r.picture == null && r.type_id == 1">
          <img :alt="r.title" src="/assets/img/headerNews.jpg" />
        </div>
        <div class="recent-post-thumbs" v-else-if="r.picture == null && r.type_id == 2">
          <img :alt="r.title" src="/assets/img/headerConvocations.jpg" />
        </div>
        <div class="recent-post-thumbs" v-else-if="r.picture == null && r.type_id == 3">
          <img :alt="r.title" src="/assets/img/headerDocuments.jpg" />
        </div>
        <div class="recent-post-thumbs" v-else-if="r.picture == null && r.type_id == 4">
          <img :alt="r.title" src="/assets/img/headerDocuments.jpg" />
        </div>
        <div class="recent-post-thumbs" v-else>
          <img :alt="r.title" :src="'/storage/heroarea/'+ r.picture" />
        </div>
        <div class="recent-post-content">
          <p>{{ moment(r.updated_at).locale('es').format('LL') }}</p>
          <Link v-if="r.type_id == 1" :href="route('newsDetails', r.slug)">
            <h6>{{ r.title }}</h6>
          </Link>
          <Link v-else-if="r.type_id == 2" :href="route('convocationsDetails', r.slug)">
            <h6>{{ r.title }}</h6>
          </Link>
          <Link v-else-if="r.type_id == 3" :href="route('documentsDetails', r.slug)">
            <h6>{{ r.title }}</h6>
          </Link>
          <Link v-else-if="r.type_id == 4" :href="route('meetingsDetails', r.slug)">
            <h6>{{ r.title }}</h6>
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>
