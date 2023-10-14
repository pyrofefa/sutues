<template>
    <div v-if="links.length > 3">
        <ul class="pagination" >
            <li aria-current="page" class="page-item" v-for="(link, key) in links" :class="{ 'active': link.active }">
                <div v-if="link.url === null" :key="key" class="page-link" v-html="link.label"  />
                <Link v-else :key="key + 1" class="page-link" :href="link.url" v-html="link.label" preserve-scroll />
            </li>
        </ul>
    </div>
  </template>
  
  <script setup>
  import { Link } from "@inertiajs/vue3";
  
  defineProps({
    links: Array,
  });
  </script>