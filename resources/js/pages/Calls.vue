<template>
    <main style="padding-bottom: 4rem !important;">
        <button-call ref="buttonCall" @toggleButton="toggleButtonCall"/>
        <cards-call ref="cardsCall" v-if="showCardsCall"/>
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
.label-button-call {
    background: #218838;
    border-radius: 15px;
    font-weight: bold;
    padding: 12px;
    padding-inline: 30px;
    position: relative;
    color: white;
    text-align: center;
    transform: translate3d(0, 0, 0);
    transition: transform ease-out 200ms;
}
.input-button-call {
    display: none;
}
.label-button-call {
    transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition-duration: 400ms;
    transform: scale(1);
    cursor: pointer;
}
.label-button-call:hover {
    transform: scale(1.1);
}
.input-button-call:checked + .label-button-call {
    transition-timing-function: linear;
    transition-duration: 200ms;
    background: #ed2c13;
    transform: scale(1);
    color: white;
}
</style>
