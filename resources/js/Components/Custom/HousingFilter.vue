<template>
  
<form @submit.prevent="submit">
  <select v-model="city" class="px-4 py-3 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
    <option v-for="(option, index) in $page.props.cities" :key="index">{{ option }}</option>
  </select>
</form>
  
  
</template>
<script setup>
defineProps({
    cities: Object
})
</script>