<template>
    <AppLayout>
      <div class="relative mx-auto max-w-screen-xl px-4 py-8">
        <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
  
          <!-- Housing Images -->
          <div class="gap-4 md:mt-4" v-for="image in housing.images">
            <img alt="Les Paul" :src="`/storage/${image.path}`" class="rounded-xl w-full">
          </div>
  
          <!-- Housing Details -->
          <div class="sticky top-0 md:pl-8">
            <strong
              class="rounded-full border border-blue-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-blue-600">
              {{ housing.stato_annuncio }}
            </strong>
  
            <div class="mt-8 flex flex-col md:flex-row md:justify-between md:items-center">
              <div class="max-w-full md:max-w-[35ch] space-y-2">
                <h1 class="text-xl font-bold sm:text-2xl text-white">
                  {{ housing.nome }}
                </h1>
                <p class="text-sm text-white">{{ housing.city }}</p>
              </div>
              <p class="text-lg font-bold mt-4 md:mt-0 md:ml-4 text-white">{{ housing.costo }}</p>
            </div>
  
            <div class="mt-4 prose max-w-none text-white">
              <p>{{ housing.descrizione }}</p>
            </div>
  
            <p class="mt-4 text-sm text-gray-500">{{ housing }}</p>
          </div>
        </div>
      </div>
    </AppLayout>
  </template>
  
<script setup>
import AppLayout from '../Layouts/AppLayout.vue';

defineProps({
housing: Object
});

</script>