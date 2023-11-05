<script setup>
    import { Link } from '@inertiajs/vue3'
    defineProps(['data'])
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
        <div class="col-xl-4 col-lg-4 col-md-6 col-12" v-for="d in data">
          <div class="single-blog-wrap">
            <div class="blog-bg">
              <div class="thumbs">
                <img v-if="d.picture == null" :alt="d.title" src="/assets/img/newsHeader.png">
                <img v-else :alt="d.title" :src="'/storage/heroarea/'+ d.picture" />
              </div>
            </div>
            <div class="blog-content">
              <h3><Link :href="route('newsDetails', d.slug)">{{ d.title.substring(0,50) }}</Link></h3>
              <p v-if="d.description != null">{{ d.description.substring(0,100) }}</p>
              <Link :href="route('newsDetails', d.slug)" class="details-link"><i class="fa-brands fa-readme"></i></Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
.single-blog-wrap .details-link {
    width: 50px;
    height: 50px;
    border: 1px solid #eee;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 30px;
    transform: none;
    font-size: 22px;
}
.thumbs img {
  width: 640px;
  height: 327px;
}
</style>
