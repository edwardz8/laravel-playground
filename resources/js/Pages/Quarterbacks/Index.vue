<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    quarterbacks: Object
});
</script>

<template>
        <article v-for="quarterback in quarterbacks" :key="quarterback.id" class="mx-2 my-2 flex">
            <p class="font-bold mr-6">{{ quarterback.player }}</p>
            <Link as="button" type="button" :href="'/quarterbacks/' + quarterback.id">
            <button class="bg-gray-900 hover:bg-gray-500 text-white font-bold px-4 rounded">View</button>
            </Link>
        </article>
</template>