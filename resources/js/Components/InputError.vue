<template>
    <div v-if="formError" class="input-error">
        {{ formError }}
    </div>
</template>

<script setup>
defineProps({
    formError: String
})
</script>