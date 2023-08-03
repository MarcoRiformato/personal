<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import CustomFooter from '../Components/Custom/CustomFooter.vue';
import Main_Side from '../Components/Custom/Main_Side.vue';
import OurTeam from '../Components/Custom/OurTeam.vue';
import Portfolio from '../Components/Custom/Portfolio.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Portfolio" />

    <div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</Link>
            </template>
        </div>
    </div>
    <div class="">
        <Portfolio/>
        <Main_Side/>
        <OurTeam/>
        <CustomFooter/>
    </div>
</template>
