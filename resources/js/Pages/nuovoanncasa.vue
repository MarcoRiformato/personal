<template>
<NavabarVue/>
<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
<h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Nuovo annuncio</h2>
<form @submit.prevent="submit">
<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
    <div>
        <label class="text-gray-700 dark:text-gray-200" for="nome">Nome</label>
        <input id="nome" v-model="form.nome" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
    </div>

    <div>
        <label class="text-gray-700 dark:text-gray-200" for="city">Città</label>
        <input v-model="form.city" id="city" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
    </div>

    
    <div>
        <label class="text-gray-700 dark:text-gray-200" for="costo">Costo</label>
        <input v-model="form.costo" id="costo" type="text"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
    </div>
    
    
    <div>
        <label class="text-gray-700 dark:text-gray-200" for="numero_telefono">Numero di telefono</label>
        <input v-model="form.numero_telefono" id="numero_telefono" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
    </div>
    
    <div col-2>
        <label class="text-gray-700 dark:text-gray-200" for="descrizione">Descrizione</label>
        <textarea v-model="form.descrizione" rows="6" cols="30" id="descrizione" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"></textarea>
    </div>

</div>

<div class="flex justify-end mt-6">
    <button type="submit" :disabled="form.processing" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
</div>
</form>
</section>
<FooterVue/>
</template>
<script setup>
import NavabarVue from '../Components/Custom/Navabar.vue';
import FooterVue from '../Components/Custom/Footer.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';

const form = useForm({
    nome: '',
    descrizione: '',
    costo: '',
    city: '',
    numero_telefono: ''
})

function submit(){
    Inertia.post('trovacoinquilino', form)
}

</script>


-->
<!--
'nome',
'descrizione',
'costo',
'city',
'numero_telefono'
-->