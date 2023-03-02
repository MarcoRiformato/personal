<template>
<AppLayout>
    <p class="text-white">{{ housing }}</p>
</AppLayout>    
</template>
<script setup>
import AppLayout from '../Layouts/AppLayout.vue';

defineProps({
    housing: Object
});

</script>