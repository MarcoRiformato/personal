<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Main_w_side from '../Components/Custom/main_w_side.vue';
import Navabar from '../Components/Custom/Navabar.vue';
import Other_posts from '../Components/Custom/other_posts.vue';
import Footer from '../Components/Custom/Footer.vue';
import Our_team from '../Components/Custom/OurTeam.vue';
import Portfolio from '../Components/Custom/Portfoglio.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
<Head title="Forum Giovani"/>
<Navabar  x-data="{ isOpen: false }" class="bg-white shadow dark:bg-gray-800" />
<Main_w_side/>
<Portfolio/>
<other_posts/>
<Our_team/>
<Footer/>
</template>
