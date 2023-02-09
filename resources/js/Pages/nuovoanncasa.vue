<template>
<AppLayout>
<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-500">
<h2  class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Nuovo annuncio</h2>
<form @submit.prevent="submit">
<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
    <div>
        <label class="text-gray-700 dark:text-gray-200" for="nome">Nome</label>
        <input id="nome" v-model="form.nome" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        <div v-if="form.errors.nome" class="text-red-600 text-sm">{{ form.errors.nome }}</div>
    </div>

    <div>
        <label class="text-gray-700 dark:text-gray-200" for="city">Città</label>
        <input v-model="form.city" id="city" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        <div v-if="form.errors.city" class="text-red-600 text-sm">{{ form.errors.city }}</div>
    </div>

    
    <div>
        <label class="text-gray-700 dark:text-gray-200" for="costo">Costo totale al mese</label>
        <input v-model="form.costo" id="costo" type="text"  class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        <div v-if="form.errors.costo" class="text-red-600 text-sm">{{ form.errors.costo }}</div>
    </div>
    
    
    <div>
        <label class="text-gray-700 dark:text-gray-200" for="numero_telefono">Numero di telefono</label>
        <input v-model="form.numero_telefono" id="numero_telefono" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
        <div v-if="form.errors.numero_telefono" class="text-red-600 text-sm">{{ form.errors.numero_telefono }}</div>
    </div>
    
    <div col-2>
        <label class="text-gray-700 dark:text-gray-200" for="descrizione">Descrizione</label>
        <textarea v-model="form.descrizione" rows="6" cols="30" id="descrizione" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"></textarea>
        <div v-if="form.errors.descrizione" class="text-red-600 text-sm">{{ form.errors.descrizione }}</div>
    </div>

    <div>
        

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photos">Upload multiple files</label>
        <input name="image_name" @input="form.image = $event.target.files[0]" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" multiple>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG o JPG (MAX. 800x400px).</p>

    </div>

</div>
<p>{{ $page.props.user }}</p>
<div class="flex justify-end mt-6">
    <button type="submit" :disabled="form.processing" :class="{ 'opacity-25':form.processing }" class="px-8 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Salva</button>
</div>
</form>
</section>
</AppLayout>
<FooterVue/>
</template>
<script setup>
import FooterVue from '../Components/Custom/CustomFooter.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia';
import { usePage, computed } from '@inertiajs/inertia-vue3';
import AppLayout from '../Layouts/AppLayout.vue';



const form = useForm({
    nome: '',
    descrizione: '',
    costo: '',
    city: '',
    numero_telefono: '',
    image: null
})

const submit = () =>{
    form.post(route('housingadded'));
}

</script>