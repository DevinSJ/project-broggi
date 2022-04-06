<template>
    <div class="d-flex h-100">
        <b-list-group v-if="!isLoading" class="list-expedients">
            <b-list-group-item v-for="expedient in expedients" :key="expedient.id" :active="expedient.id === expedientSelected.id" class="flex-column align-items-start">
                <div class="d-flex w-100 my-1 justify-content-between">
                    <h5 class="mb-1">{{ expedient.codi }}</h5>
                </div>
                <p class="mb-1">
                    <small class="d-block"><span class="font-weight-bold">Data i hora creació: </span>{{ formatDate(expedient.data_ultima_modificacio) }}</small>
                    <small class="d-block"><span class="font-weight-bold">Data i hora última modifació: </span>{{ formatDate(expedient.data_creacio) }}</small>
                    <small class="d-block"><span class="font-weight-bold">Quantitat trucades: </span>{{ expedient.cartes_trucades.length }}</small>
                </p>
                <button
                    type="button"
                    class="btn btn-sm btn-secondary"
                    title="Veure dades"
                    @click="loadModalExpedient(expedient)"
                >
                    <i class="fa-solid fa-eye"></i>
                </button>
                <button
                    type="button"
                    class="btn btn-sm btn-primary"
                    title="Veure dades"
                    @click="toggleSelectExpedient(expedient)"
                >
                    {{ expedient.id === expedientSelected.id ? "Desseleccionar" : "Seleccionar" }}
                </button>
            </b-list-group-item>
        </b-list-group>
        <svg-vue
            v-else
            icon="spinner"
            class="mx-auto my-auto p-2"
            width="50"
        />
    </div>
</template>

<script scoped>
import moment from 'moment';

export default {
    mounted() {
        this.getExpedients();
    },
    beforeDestroy() {
        if (this.request) this.request.cancel();
    },
    data() {
        return {
            isLoading: true,
            expedients: [],
            expedientSelected: {
                id: -1
            },
            request: null
        };
    },
    methods: {
        getExpedients() {
            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            this.isLoading = true;

            let me = this;

            axios
                .get("/api/expedients", {
                    cancelToken: axiosSource.token,
                })
                .then((data) => {
                    me.expedients = data.data.data;
                })
                .catch((error) => {
                    if (!axios.isCancel(error)) {
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.request = null;
                    me.isLoading = false;
                });
        },
        toggleSelectExpedient(expedient) {
            if (this.expedientSelected.id === -1) this.expedientSelected = expedient;
            else this.expedientSelected = {id: -1};
        },
        formatDate(value) {
            return moment(value).locale("es").format("DD/MM/yyyy HH:mm:ss")
        },
        loadModalExpedient(expedient) {
            this.$emit('loadModalExpedient', expedient);
        }
    },
};
</script>

<style scoped>
.list-expedients {
    width: 100%;
    max-height: 600px;
    overflow-y: scroll;
}
</style>
