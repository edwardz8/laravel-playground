<script setup>
defineProps(['quarterback']);
</script>

<template>
    <div>
        <div class="flex-1">
            <div class="flex justify-between items-center">
                <div>
                    <span class="text-gray-900">{{ quarterback.player }}</span>
                 <!--    <small class="ml-2 text-sm text-gray-600">{{ new Date(quarterback.created_at).toLocaleString() }}</small> -->
                </div>
            </div>
            <p class="mt-4 text-lg text-gray-900">{{ quarterback.fpts }}</p>
            <p class="mt-4 text-lg text-gray-900">{{ quarterback.cmp }}</p>
            <p class="mt-4 text-lg text-gray-900">{{ quarterback.td }}</p>
        </div>
    </div>
</template>