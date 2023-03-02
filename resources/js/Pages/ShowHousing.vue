<template>
<AppLayout>
<section>
<div class="relative mx-auto max-w-screen-xl px-4 py-8">
<div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
<div class="grid grid-cols-2 gap-4 md:grid-cols-1">
    <img
    alt="Les Paul"
    src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
    class="aspect-square w-full rounded-xl object-cover"/>
    <div class="grid grid-cols-2 gap-4 lg:mt-4">
    <img
        alt="Les Paul"
        src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
        class="aspect-square w-full rounded-xl object-cover"/>

    <img
        alt="Les Paul"
        src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
        class="aspect-square w-full rounded-xl object-cover"/>

    <img
        alt="Les Paul"
        src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
        class="aspect-square w-full rounded-xl object-cover"/>

    <img
        alt="Les Paul"
        src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
        class="aspect-square w-full rounded-xl object-cover"/>
    </div>
</div>

<div class="sticky top-0">
    <strong
    class="rounded-full border border-blue-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-blue-600">
    Disponibilità
    </strong>

    <div class="mt-8 flex justify-between">
    <div class="max-w-[35ch] space-y-2">
        <h1 class="text-xl font-bold sm:text-2xl text-white">
        Titolo dell' inserzione
        </h1>

        <p class="text-sm text-white">Indirizzo</p>

        <div class="-ml-0.5 flex">
        </div>
    </div>

    <p class="text-lg font-bold">Città?</p>
    </div>

    <div class="mt-4">
    <div class="prose max-w-none">
        <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
        veniam dicta beatae eos ex error culpa delectus rem tenetur,
        architecto quam nesciunt, dolor veritatis nisi minus inventore,
        rerum at recusandae?
        </p>
    </div>
    </div>

    <fieldset class="mt-4">
        <legend class="mb-1 text-sm font-medium">Size</legend>

        <div class="flex flex-wrap gap-1">
        <label for="size_s" class="cursor-pointer">
            <input
            type="radio"
            name="size"
            id="size_s"
            class="peer sr-only"/>

            <span
            class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
            S</span>
        </label>

        <label for="size_m" class="cursor-pointer">
            <input
            type="radio"
            name="size"
            id="size_m"
            class="peer sr-only"/>

            <span
            class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
            M</span>
        </label>

        <label for="size_l" class="cursor-pointer">
            <input
            type="radio"
            name="size"
            id="size_l"
            class="peer sr-only"/>

            <span
            class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
            L</span>
        </label>

        <label for="size_xl" class="cursor-pointer">
            <input
            type="radio"
            name="size"
            id="size_xl"
            class="peer sr-only"/>

            <span
            class="group inline-flex h-8 w-8 items-center justify-center rounded-full border text-xs font-medium peer-checked:bg-black peer-checked:text-white">
            XL</span>
        </label>
        </div>
    </fieldset>
</div>
</div>
</div>
</section>

<p class="text-white">{{ housing }}</p>
</AppLayout>    
</template>
<script setup>
import AppLayout from '../Layouts/AppLayout.vue';

defineProps({
housing: Object
});

</script>