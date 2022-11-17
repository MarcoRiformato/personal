<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Main_w_side from '../Components/Custom/main_w_side.vue';
import Navabar from '../Components/Custom/Navabar.vue';
import Other_posts from '../Components/Custom/other_posts.vue';
import Our_team from '../Components/Custom/OurTeam.vue';
import Portfolio from '../Components/Custom/Portfoglio.vue';
import CustomFooter from '../Components/Custom/CustomFooter.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
<Head title="Forum Giovani"/>
<Navabar class="bg-white shadow dark:bg-gray-800" />
<Portfolio/>
<Main_w_side/>
<Our_team/>
<CustomFooter/>
</template>
