<template>
    <div>
        <b-card
            v-show="!isLoading"
            border-variant="light"
            header="Expedients"
            class="text-center"
        >
            <div>
                <b-table striped hover :items="expedients"> </b-table>
            </div>
        </b-card>

        <div class="loading-spinner d-flex">
            <img
                v-show="isLoading"
                class="my-auto mx-auto"
                src="/assets/img/spinner.svg"
                width="100"
            />
        </div>
    </div>
</template>

<script scoped>
export default {
    mounted() {
        this.getExpedients();
    },
    data() {
        return {
            isLoading: true,
            expedients: [],
        };
    },
    methods: {
        getExpedients() {
            this.isLoading = true;
            let me = this;
            axios
                .get("/api/expedients")
                .then((response) => {
                    me.expedients = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.isLoading = false));
        },
    },
};
</script>

<style scoped>
.loading-spinner {
    width: 100%;
    text-align: center;
    justify-content: center;
    margin-top: 150 px;
}
</style>
