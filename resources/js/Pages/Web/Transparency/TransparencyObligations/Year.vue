<script setup>
    import Header from '@/Components/header/Header.vue';
    import Footer from '@/Components/footer/FooterArea.vue';
    defineProps({ 
        year: String,
    });
</script>
<template>
    <Header />
    <div class="breadcrumb-area bread-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-title">
                        <h1>Obligaciones de trasparencia</h1>
                        <h1>{{ year }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-section gray-bg section-padding">
        <div  class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 mb-50">
                    <div class="cp-custom-accordion">
                        <div class="accordions" id="accordionExample">
                            <div class="accordion-items">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-buttons active" aria-controls="collapse1" aria-expanded="true" data-bs-target="#collapse1" data-bs-toggle="collapse" type="button">
                                        Articulo 70
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</div></div></div><div data-v-1b54802f="" class="accordion-items"><h2 data-v-1b54802f="" class="accordion-header" id="heading2"><button data-v-1b54802f="" class="accordion-buttons active collapsed" aria-controls="collapse2" aria-expanded="true" data-bs-target="#collapse2" data-bs-toggle="collapse" type="button"><span data-v-1b54802f="">02</span>At what point in my project should I involve an architect?</button></h2><div data-v-1b54802f="" id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample"><div data-v-1b54802f="" class="accordion-body">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</div></div></div><div data-v-1b54802f="" class="accordion-items"><h2 data-v-1b54802f="" class="accordion-header" id="heading3"><button data-v-1b54802f="" class="accordion-buttons active collapsed" aria-controls="collapse3" aria-expanded="true" data-bs-target="#collapse3" data-bs-toggle="collapse" type="button"><span data-v-1b54802f="">03</span>How do I find the right architect for my project?</button></h2><div data-v-1b54802f="" id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample"><div data-v-1b54802f="" class="accordion-body">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</div></div></div><div data-v-1b54802f="" class="accordion-items"><h2 data-v-1b54802f="" class="accordion-header" id="heading4"><button data-v-1b54802f="" class="accordion-buttons active collapsed" aria-controls="collapse4" aria-expanded="true" data-bs-target="#collapse4" data-bs-toggle="collapse" type="button"><span data-v-1b54802f="">04</span>Don't architects add substantial cost to a project?</button></h2><div data-v-1b54802f="" id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample"><div data-v-1b54802f="" class="accordion-body">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</div></div></div><div data-v-1b54802f="" class="accordion-items"><h2 data-v-1b54802f="" class="accordion-header" id="heading5"><button data-v-1b54802f="" class="accordion-buttons active collapsed" aria-controls="collapse5" aria-expanded="true" data-bs-target="#collapse5" data-bs-toggle="collapse" type="button"><span data-v-1b54802f="">05</span>Would I be better off using an Architectural Technician for smaller projects?</button></h2><div data-v-1b54802f="" id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample"><div data-v-1b54802f="" class="accordion-body">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</div></div></div></div></div></div></div></div></div>
    <Footer />
</template>
<style scoped>
.collapse {
    visibility: inherit;
}
</style>