<template>
    <Navabar/>
    <header class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-16 mx-auto">
        <div class="items-center lg:flex">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white lg:text-3xl">Lavori in corso</h1>

                    <p class="mt-4 text-gray-600 dark:text-gray-400">Questa pagina è ancora in costruzione, riprova tra qualche giorno!</p>
                    <Link as="div" href="/" class="text-blue-500 underline-offset-4">Torna alla pagina principale</Link>
                </div>
            </div>
        </div>
    </div>
</header>
<CustomFooter/>
</template>
<script setup>
import CustomFooter from '../Components/Custom/CustomFooter.vue';
import Navabar from '../Components/Custom/Navabar.vue';
import { Link } from '@inertiajs/inertia-vue3';

</script>
