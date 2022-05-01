<template>
    <div>
        <div class="d-flex h-100">
            <b-list-group v-if="!isLoading" class="list-expedients">
                <div v-if="expedients.length">
                    <b-list-group-item v-for="expedient in expedients" :key="expedient.id" :active="expedient.id === expedientSelected.id" class="flex-column align-items-start">
                        <details-expedients-item :expedient="expedient" @toggleSelectExpedient="toggleSelectExpedient" :isSelected="expedient.id === expedientSelected.id"/>
                    </b-list-group-item>
                </div>
                <div v-else>
                    <b-list-group-item class="text-center font-weight-bold">
                        No s'ha trobat cap coincidencia.
                    </b-list-group-item>
                </div>
            </b-list-group>
            <svg-vue
                v-else
                icon="spinner"
                class="mx-auto my-auto p-2"
                width="50"
            />
        </div>
    </div>
</template>

<script scoped>

export default {
    mounted() {
        this.getExpedients(null);
    },
    beforeDestroy() {
        if (this.request) this.request.cancel();
    },
    data() {
        return {
            isLoading: false,
            expedientSelected: {
                id: -1
            },
            expedients: [],
            request: null,
        };
    },
    methods: {
        getExpedients(filter) {
            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            this.isLoading = true;

            let me = this;

            axios
                .get("/api/expedients_call?" + new URLSearchParams(filter), {
                    cancelToken: axiosSource.token,
                })
                .then((data) => {
                    me.expedients = data.data;

                    me.$emit("finishFetchExpedientsCall");

                    me.isLoading = false;
                })
                .catch((error) => {
                    if (!axios.isCancel(error)) {
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.request = null;
                });
        },
        toggleSelectExpedient(expedient) {
            if (this.expedientSelected.id === -1) this.expedientSelected = expedient;
            else
            {
                if (this.expedientSelected != expedient) this.expedientSelected = expedient;
                else this.expedientSelected = {id: -1};
            }
        },
    },
    watch: {
        expedientSelected() {
            this.$emit('expedientSelected', this.expedientSelected);
        }
    }
};
</script>

<style scoped>
.list-expedients {
    width: 100%;
    max-height: 620px;
    overflow-y: scroll;
}
.active {
    background-color: #eaf4f6;
    border-color: #eaf4f6;
    color: black;
}
</style>
