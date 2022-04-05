<template>
    <main>
        <button-call @toggleButton="showCardsCall = !showCardsCall"/>
        <cards-call v-if="showCardsCall"/>
        <calls-table v-else/>
    </main>
</template>

<script>
export default {
    mounted() {
        document.title = "Trucades - Broggi";
    },
    data() {
        return {
            showCardsCall: false,
        };
    },
}
</script>

<style></style>
