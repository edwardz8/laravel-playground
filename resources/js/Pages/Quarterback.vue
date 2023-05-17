<script setup>
defineProps({
    quarterback: Object,
});
</script>

<template>
    <article class="mx-auto mt-10 flex justify-center max-w-5xl border-b-2">
        <div class="text-left flex flex-col pt-5 pb-10 px-10">
            <p>{{ quarterback.player }}</p>
        </div>
    </article>
    <div class="mt-4 py-2 px-2">Sacks Taken: {{ quarterback.sacks }}</div>
    <div class="mt-4 py-2 px-2">Yards: {{ quarterback.ya }}</div>
    <p class="mt-4 text-lg text-gray-900">Points: {{ quarterback.fpts }}</p>
    <p class="mt-4 text-lg text-gray-900">Completions: {{ quarterback.cmp }}</p>
    <p class="mt-4 text-lg text-gray-900">Touchdowns: {{ quarterback.td }}</p>
</template>
