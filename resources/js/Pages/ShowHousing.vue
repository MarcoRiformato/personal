<template>
<AppLayout>
<section>
<div class="relative mx-auto max-w-screen-xl px-4 py-8">
<div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
<div class="grid grid-cols-2 gap-4 md:grid-cols-1">
    <img v-if="housing.image" alt="Les Paul" :src="`/storage/${housing.image}`"
    class="aspect-square w-full rounded-xl object-cover"/>
    <img v-else alt="Les Paul" src="/storage/image/default.jpg"
    class="aspect-square w-full rounded-xl object-cover"/>
</div>

<div class="grid grid-cols-2 gap-4 lg:mt-4">
    <img v-if="housing.image" alt="Les Paul" :src="`/storage/${housing.image}`"
    class="aspect-square w-full rounded-xl object-cover"/>
    <img v-else alt="Les Paul" src="/storage/image/default.jpg"
    class="aspect-square w-full rounded-xl object-cover"/>

    <img v-if="housing.image" alt="Les Paul" :src="`/storage/${housing.image}`"
    class="aspect-square w-full rounded-xl object-cover"/>
    <img v-else alt="Les Paul" src="/storage/image/default.jpg"
    class="aspect-square w-full rounded-xl object-cover"/>

    <img v-if="housing.image" alt="Les Paul" :src="`/storage/${housing.image}`"
    class="aspect-square w-full rounded-xl object-cover"/>
    <img v-else alt="Les Paul" src="/storage/image/default.jpg"
    class="aspect-square w-full rounded-xl object-cover"/>

    <img v-if="housing.image" alt="Les Paul" :src="`/storage/${housing.image}`"
    class="aspect-square w-full rounded-xl object-cover"/>
    <img v-else alt="Les Paul" src="/storage/image/default.jpg"
    class="aspect-square w-full rounded-xl object-cover"/>
    </div>

<div class="sticky top-0">
    <strong
    class="rounded-full border border-blue-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-blue-600">
    {{ housing.stato_annuncio }}
    </strong>

    <div class="mt-8 flex justify-between">
    <div class="max-w-[35ch] space-y-2">
        <h1 class="text-xl font-bold sm:text-2xl text-white">
        {{ housing.nome }}
        </h1>

        <p class="text-sm text-white">{{ housing.city }}</p>

        <div class="-ml-0.5 flex">
        </div>
    </div>

    <p class="text-lg font-bold">{{ housing.costo }}</p>
    </div>

    <div class="mt-4">
    <div class="prose max-w-none">
        <p>{{ housing.descrizione }}</p>
    </div>
    </div>
    <p>{{ housing }}</p>
</div>
</div>
</div>
</section>
</AppLayout>    
</template>
<script setup>
import AppLayout from '../Layouts/AppLayout.vue';

defineProps({
housing: Object
});

</script>