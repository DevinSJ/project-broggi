<template>
    <main style="padding-bottom: 4rem !important;">
        <button-call ref="buttonCall" @toggleButton="toggleButtonCall"/>
        <cards-call ref="cardsCall" v-if="showCardsCall"/>
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
    methods: {
        toggleButtonCall() {
            if (this.showCardsCall) {
                let me = this;

                this.$refs.buttonCall.changeButton(true);

                this.$refs.cardsCall.submitFormCall(() => {
                    me.showCardsCall = false;
                    me.$refs.buttonCall.changeButton(false);
                });
            } else {
                this.showCardsCall = true;
                this.$refs.buttonCall.changeButton(true);
            }
        }
    }
}
</script>

<style scoped>
</style>
