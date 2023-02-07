<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AuthMainPage from '@/Components/AuthMainPage.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <div class="py-3">
            <div class=" mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <AuthMainPage />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
