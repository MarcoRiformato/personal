<template>
<Navabar/>
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Our
            Portfolio</h1>

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 lg:grid-cols-2">
            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96" style="background-image:url('https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80')">
                <div class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                    <h2 class="mt-4 text-2xl font-semibold text-gray-800 capitalize dark:text-white">Partenze da Piombino</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Website</p>
                </div>
            </div>

            <div class="flex items-end overflow-hidden bg-cover rounded-lg h-96" style="background-image:url('https://images.unsplash.com/photo-1621609764180-2ca554a9d6f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80')">
                <div class="w-full px-8 py-4 overflow-hidden rounded-b-lg backdrop-blur-sm bg-white/60 dark:bg-gray-800/60">
                    <h2 class="mt-4 text-2xl font-semibold text-gray-800 capitalize dark:text-white">Arrivi a Piombino</h2>
                    <p class="mt-2 text-lg tracking-wider text-blue-500 uppercase dark:text-blue-400 ">Ui kit</p>
                </div>
            </div>

        </div>
    </div>
</section>
<CustomFooter/>
</template>
<script setup>
import CustomFooter from '../Components/Custom/CustomFooter.vue';
import Lavori from '../Components/Custom/lavori.vue';
import Navabar from '../Components/Custom/Navabar.vue';

</script>
