<template>
  <aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
    <div class="py-4 text-gray-500">
      <Link class="ml-6 text-lg font-bold text-gray-800" :href="route('dashboard')">
        <img alt="" src="/assets/img/Header-Sutues.png" width="150" />
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
          <NavLink :href="route('secretaries.index')" :active="route().current('secretaries.index') || route().current('secretaries.create') || route().current('secretaries.edit')">
            <template #icon>
              <i class="fa-regular fa-user"></i>
            </template>
            Secretarios Generales
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('staff.index')" :active="route().current('staff.index') || route().current('staff.create') || route().current('staff.edit')">
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
        <li class="relative px-6 py-3">
          <NavLink :href="route('convocations.index')" :active="route().current('convocations.index') || route().current('convocations.create') || route().current('convocations.edit')">
            <template #icon>
              <i class="fa-regular fa-bell"></i>
            </template>
            Convocatorias
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('documents.index')" :active="route().current('documents.index') || route().current('documents.create') || route().current('documents.edit')">
            <template #icon>
              <i class="fa-solid fa-file"></i>
            </template>
            Documentos
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('transparency-obligations.index')" :active="route().current('transparency-obligations.index') || route().current('transparency-obligations.create') || route().current('transparency-obligations.edit')">
            <template #icon>
              <i class="fa-solid fa-scale-balanced"></i>
            </template>
            Obligaciones de transparencia
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('quarterly-reports.index')" :active="route().current('quarterly-reports.index') || route().current('quarterly-reports.create') || route().current('quarterly-reports.edit')">
            <template #icon>
              <i class="fa-solid fa-scale-balanced"></i>
            </template>
            Informes trimestrales de Secretarías
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('meetings.index')" :active="route().current('meetings.index') || route().current('meetings.create') || route().current('meetings.edit')">
            <template #icon>
              <i class="fa-solid fa-scale-balanced"></i>
            </template>
            Actas de Sesiones
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('suppliers.index')" :active="route().current('suppliers.index') || route().current('suppliers.create') || route().current('suppliers.edit')">
            <template #icon>
              <i class="fa-solid fa-truck-field"></i>
            </template>
            Proveedores
          </NavLink>
        </li>
        <li class="relative px-6 py-3">
          <NavLink :href="route('users.index')" :active="route().current('users.index') || route().current('users.create') || route().current('users.edit')">
            <template #icon>
              <i class="fa-regular fa-user"></i>
            </template>
            Usuarios
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
