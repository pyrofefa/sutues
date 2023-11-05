<template>
  <transition
      enter-active-class="transition ease-in-out duration-150"
      enter-from-class="opacity-0"
      enter-to-class="opacity-100"
      leave-active-class="transition ease-in-out duration-150"
      leave-from-class="opacity-100"
      leave-to-class="opacity-0">
    <div v-show="$page.props.showingMobileMenu" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
  </transition>
  <transition
      enter-active-class="transition ease-in-out duration-150"
      enter-from-class="opacity-0 transform -translate-x-20"
      enter-to-class="opacity-100"
      leave-active-class="transition ease-in-out duration-150"
      leave-from-class="opacity-100"
      leave-to-class="opacity-0 transform -translate-x-20">
    <aside v-show="$page.props.showingMobileMenu" class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <Link class="ml-6 text-lg font-bold text-gray-800" :href="route('dashboard')">
          <img alt="" src="/assets/img/Header-Sutues.png" width="100" />
      </Link>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
              <template #icon>
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
              </template>
              Dashboard
            </ResponsiveNavLink>
          </li>

          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('secretaries.index')" :active="route().current('secretaries.index') || route().current('secretaries.create') || route().current('secretaries.edit')">
              <template #icon>
                <i class="fa-regular fa-user"></i>
              </template>
              Secretarios Generales
            </ResponsiveNavLink>
          </li>
          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('staff.index')" :active="route().current('staff.index') || route().current('staff.create') || route().current('staff.edit')">
              <template #icon>
                <i class="fa-regular fa-address-card"></i>
              </template>
              Comité Actual
            </ResponsiveNavLink>
          </li>
          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('news.index')" :active="route().current('news.index') || route().current('news.create') || route().current('news.edit')">
              <template #icon>
                <i class="fa-solid fa-newspaper"></i>
              </template>
              Noticias
            </ResponsiveNavLink>
          </li>
          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('convocations.index')" :active="route().current('convocations.index') || route().current('convocations.create') || route().current('convocations.edit')">
              <template #icon>
                <i class="fa-regular fa-bell"></i>
              </template>
              Convocatorias
            </ResponsiveNavLink>
          </li>
          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('documents.index')" :active="route().current('documents.index') || route().current('documents.create') || route().current('documents.edit')">
              <template #icon>
                <i class="fa-solid fa-file"></i>
              </template>
              Documentos
            </ResponsiveNavLink>
          </li>
          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('transparency-obligations.index')" :active="route().current('transparency-obligations.index') || route().current('transparency-obligations.create') || route().current('transparency-obligations.edit')">
              <template #icon>
                <i class="fa-solid fa-scale-balanced"></i>
              </template>
              Obligaciones de transparencia
            </ResponsiveNavLink>
          </li>
          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('suppliers.index')" :active="route().current('suppliers.index') || route().current('suppliers.create') || route().current('suppliers.edit')">
              <template #icon>
                <i class="fa-solid fa-truck-field"></i>
              </template>
              Proveedores
            </ResponsiveNavLink>
          </li>
        </ul>
      </div>
    </aside>
  </transition>
</template>

<script setup>
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/vue3';
</script>
