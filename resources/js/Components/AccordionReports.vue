<template>
    <div class="question accordion-buttons">
     <header>
       <h2 @click="expanded = !expanded" class="question-title">
         {{ title }} - {{ article }}
       </h2>
       <button class="btn" @click="expanded = !expanded">
         <i class="fa-solid fa-arrow-up" v-show="expanded"></i>
         <i class="fa-solid fa-arrow-down" v-show="!expanded"></i>
      </button>
    </header>
    <div :style="contentStyle" class="content accordion-body" >
      <div v-for="i in info.articles">
        <a @click.prevent="showModal(i.file, '/storage/quarterly-reports/'+i.path)" :style="infoStyle" href="#" class="info">
          <p>{{ i.file }}</p>
        </a>
      </div>
    </div>
  </div>
</template>
<script>
  import { ref, computed, inject } from "vue";

  export default {
    name: "Question",
    props: {
      title: String,
      article: String,
      info: Object,
    },
    setup() {
      const expanded = ref(false);
      const contentStyle = computed(() => {
        return { "max-height": expanded.value ? "100%" : 0 };
      });
  
      const infoStyle = computed(() => {
        return { opacity: expanded.value ? 1 : 0 };
      });

      const Swal = inject('$swal')


      function showModal(file, path) {
        Swal.fire({
            title: file,
            html:
            `<object data="${path}" type="application/pdf" width="100%" height="600px"></object>`,
            showCloseButton: true,
            showConfirmButton: false,
            width: '900px',
        })
      }
  
      return { expanded, contentStyle, infoStyle, showModal };
    },
  };
  </script>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->
  <style scoped lang="scss">
  .question {
    padding: 1rem 1.5rem;
    border: 2px solid var(--clr-grey-special);
    margin-bottom: 1rem;
    border-radius: var(--radius);
    box-shadow: var(--light-shadow);
  }
  .question h4 {
    text-transform: none;
    line-height: 1.5;
  }
  .question p {
    color: var(--clr-grey-3);
    margin-bottom: 0;
    margin-top: 0.5rem;
  }
  .question header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .question header h4 {
    margin-bottom: 0;
  }
  .btn {
    background: transparent;
    border-color: transparent;
    width: 2rem;
    height: 2rem;
    background: var(--clr-grey-special);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--clr-red-special);
    cursor: pointer;
    margin-left: 1rem;
    align-self: center;
    min-width: 2rem;
    z-index: 1;
  }
  
  .question-title {
    cursor: pointer;
  }
  
  .content {
    max-height: 0;
    transition: max-height 0.2s ease-out;
  }
  .info {
    z-index: -1;
    opacity: 0;
    transition: opacity 0.2s ease-out;
  }
  .cp-custom-accordion .accordion-buttons::after {
      position: absolute;
      /* content: "\f061"; */
      font-family: "Line Awesome Free";
      top: 35%;
      transform: rotate(-90deg);
      right: 30px;
      font-size: 24px;
      font-weight: 500;
      opacity: 1;
      color: #333;
  }
</style>
  