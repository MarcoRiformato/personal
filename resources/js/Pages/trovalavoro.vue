<template>
<Head title="Trova Coinquilino"/>
<Navabar/>
<section class="bg-white dark:bg-gray-900">
<div class="container px-6 py-10 mx-auto">
<div class="flex items-center justify-between">
    <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Annunci </h1>
    <Link as="button" href="/nuovoanncasa" class="px-6 py-2 font-medium tracking-wide text-white transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
    Aggiungi il tuo annuncio
    </Link>
</div>

<hr class="my-8 border-gray-200 dark:border-gray-700">

<div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
    
    <SingleCardAnnunci  v-for="Job in jobs" :Job="Job"/>

</div>
</div>
</section>
<CustomFooter/>
</template>
<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Navabar from '../Components/Custom/Navabar.vue';

defineProps({
    jobs:Array [
        'titolo',
        'paga',
        'descrizione',
        'localita'
    ]
})

</script>