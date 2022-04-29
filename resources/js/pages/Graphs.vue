<template>
    <main style="padding-bottom: 4rem !important;">
        <button-call ref="buttonCall" @toggleButton="toggleButtonCall"/>
        <cards-call ref="cardsCall" v-if="showCardsCall"/>
        <b-card v-else class="show-card">
            <b-tabs content-class="mt-3" fill>
                <b-tab title="Estat dels expedients" lazy>
                    <graph
                        opcionGraph="1"
                        @startRequest="isLoading = true"
                        @finishedRequest="isLoading = false"
                    ></graph>
                    <svg-vue
                        v-show="isLoading"
                        icon="spinner"
                        class="spinner"
                        width="100"
                    />
                </b-tab>
                <b-tab title="Estadistiques de trucades" lazy>
                    <graph
                        opcionGraph="2"
                        @startRequest="isLoading = true"
                        @finishedRequest="isLoading = false"
                    ></graph>
                    <svg-vue
                        v-show="isLoading"
                        icon="spinner"
                        class="spinner"
                        width="100"
                    />
                </b-tab>
                <b-tab title="Estadistiques d'usuaris" lazy>
                    <graph
                        opcionGraph="3"
                        @startRequest="isLoading = true"
                        @finishedRequest="isLoading = false"
                    ></graph>
                    <svg-vue
                        v-show="isLoading"
                        icon="spinner"
                        class="spinner"
                        width="100"
                    />
                </b-tab>
            </b-tabs>
        </b-card>
    </main>
</template>
<script>
export default {
    mounted() {
        document.title = "Gràfics - Broggi";
    },
    data() {
        return {
            showCardsCall: false,
            isLoading: true,
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
};
</script>

<style scoped>
.show-card {
    background-color: white;
    border: 1px;
    box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}
.div-table {
    width: 100%;
    background-color: aquamarine;
}
.col-table {
    align-items: center;
    padding: 10px;
}
.table {
    width: 100%;
}
.tab-pane {
    position: relative;
}
.spinner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
