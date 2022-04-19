<template>
    <main>
        <button-call @toggleButton="showCardsCall = !showCardsCall"/>
        <cards-call v-if="showCardsCall"/>
        <expedients-table v-else />
    </main>
</template>

<script>
export default {
    mounted() {
        document.title = "Expedients - Broggi";
    },
    data() {
        return {
            showCardsCall: false,
        };
    },
};
</script>

<style scoped>
</style>
