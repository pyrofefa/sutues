<template>
  <aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
    <div class="py-4 text-gray-500">
      <Link class="ml-6 text-lg font-bold text-gray-800" :href="route('dashboard')">
        Windmill
      </Link>

      <ul class="mt-6">
        <li class="relative px-6 py-3">
          <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
            <template #icon>
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                   stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
            </template>
            Dashboard
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('secretaries.index')" :active="route().current('secretaries.index') || route().current('secretaries.create') || route().current('secretaries.edit') ">
            <template #icon>
              <i class="fa-regular fa-user"></i>
            </template>
            Secretarios Generales
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('staff.index')" :active="route().current('staff.index')">
            <template #icon>
              <i class="fa-regular fa-address-card"></i>
            </template>
            Comité Actual
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('news.index')" :active="route().current('news.index') || route().current('news.create') || route().current('news.edit')">
            <template #icon>
              <i class="fa-solid fa-newspaper"></i>
            </template>
            Noticias
          </NavLink>
        </li>
      </ul>
    </div>
  </aside>
</template>

<script>
import NavLink from '@/Components/NavLink.vue'
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

export default {
  components: {
    NavLink,
    Link,
  },

  setup() {
    let showingTwoLevelMenu = ref(false)

    return {
      showingTwoLevelMenu
    }
  },
}
</script>
