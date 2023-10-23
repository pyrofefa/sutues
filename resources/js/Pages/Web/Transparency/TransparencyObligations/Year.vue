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
    
    <Footer />
</template>

    
