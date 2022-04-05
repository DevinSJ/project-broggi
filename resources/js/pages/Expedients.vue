<template>
    <main>
        <button-call @toggleButton="showCardsCall = !showCardsCall"/>
        <cards-call @loadModalExpedient="loadModalExpedient" v-if="showCardsCall"/>
        <expedients-table ref="expedientsTable" v-show="!showCardsCall"/>
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
    methods: {
        loadModalExpedient(expedient) {
            this.$refs.expedientsTable.loadModal(expedient, true);
        }
    }
};
</script>

<style scoped>
</style>
