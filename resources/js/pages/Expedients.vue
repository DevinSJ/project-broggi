<template>
    <main>
<<<<<<< HEAD
        <input
            type="checkbox"
            v-model="showCardsCall"
            class="input-button-call"
            @click="toggleCardsCall"
            id="input-button-call"
        />
        <label
            class="label-button-call user-select-none"
            for="input-button-call"
        >
            <i :class="'fas ' + (!showCardsCall ? 'fa-phone mr-1' : 'fa-phone-slash mr-1')"></i>
            {{
                !showCardsCall ? "Iniciar trucada" : "Finalitzar trucada"
            }}
        </label>
        <cards-call v-if="showCardsCall"/>
        <expedients-table />
=======
        <button-call @toggleButton="showCardsCall = !showCardsCall"/>
        <cards-call @loadModalExpedient="loadModalExpedient" v-if="showCardsCall"/>
        <expedients-table ref="expedientsTable" v-show="!showCardsCall"/>
>>>>>>> feffc9e7a76c1eed78253e8ec8b8bb23c1f3ea4c
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
