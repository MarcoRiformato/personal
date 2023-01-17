<template>
    <section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">Benvenuto
        </h1>

        <p class="mt-4 text-center text-gray-500 dark:text-gray-300">
            Scopri i servizi
        </p>


        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            <Link as="div" href="/trovacoinquilino">
                <img class="object-cover w-full rounded-lg h-96 "
                    src="https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80"
                    alt="">
                <h2 class="mt-4 text-2xl font-semibold text-gray-800 capitalize dark:text-white">Trova coinquilino</h2>
                <p class="mt-2 text-lg tracking-wider text-gray-500 dark:text-gray-300 ">Scopri gli annunci di appartamenti condivisi per l'università</p>
            </Link>

            <Link as="div" href="/selezionatratta">
                <img class="object-cover w-full rounded-lg h-96 "
                    src="https://images.unsplash.com/photo-1621609764180-2ca554a9d6f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                    alt="">
                <h2 class="mt-4 text-2xl font-semibold text-gray-800 capitalize dark:text-white">Passaggi</h2>
                <p class="mt-2 text-lg tracking-wider text-gray-500 dark:text-gray-300 ">Organizza un passaggio in macchina per la prossima volta che vai in continente</p>
            </Link>

            <Link as="div" href="/elbalavoro">
                <img class="object-cover w-full rounded-lg h-96 "
                    src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt="">
                <h2 class="mt-4 text-2xl font-semibold text-gray-800 capitalize dark:text-white">Lavoro</h2>
                <p class="mt-2 text-lg tracking-wider text-gray-500 dark:text-gray-300 ">Trova un lavoro stagionale per la prossima stagione estiva</p>
            </Link>
        </div>
    </div>
</section>
</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>