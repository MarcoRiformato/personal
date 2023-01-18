<template>
<Navabar/>
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Seleziona la tua partenza</h1>
        <Dropdowntratte class="py-5"/>
        <SingleCardtratta/><!-- None of these are dynamic -->
        <SingleCardtratta/>
        <SingleCardtratta/>
    </div>
</section>


</template>
<script setup>

import Dropdowntratte from '../Components/Custom/dropdowntratte.vue';
import Navabar from '../Components/Custom/Navabar.vue';
import SingleCardtratta from '../Components/Custom/SingleCardtratta.vue';

</script>
