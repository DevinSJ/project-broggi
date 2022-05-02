<template>
    <div>
        <div class="mb-2">
            <!--Panel filtrado-->
            <b-card class="show-card" body-class="card_body">
                <b-row class="text-center">
                    <b-col cols="3"> </b-col>
                    <b-col cols="9" class="col-filtrar">
                        <b-form inline class="justify-content-end">
                            <label class="mr-sm-2" for="filtre-codi"
                                >Codi de trucada</label
                            >
                            <b-form-input
                                name="filtre-codi"
                                id="filtre-codi"
                                v-model="filtre.call_code"
                                class="mb-2 mr-sm-2 mb-sm-0 form-control-sm"
                                placeholder="Exemple: CA-..."
                            ></b-form-input>
                            <label class="mr-sm-2" for="filtre-codi"
                                >Codi de l'expedient</label
                            >
                            <b-form-input
                                name="filtre-codi"
                                id="filtre-codi"
                                v-model="filtre.exp_code"
                                class="mb-2 mr-sm-2 mb-sm-0 form-control-sm"
                                placeholder="Exemple: EXP-..."
                            ></b-form-input>
                            <b-button
                                variant="info"
                                class="btn-sm"
                                @click="fetchCalls(1, false)"
                                ><i class="fa-solid fa-filter"></i>
                                Filtrar</b-button
                            >
                            <b-button
                                class="btn-sm"
                                variant="secondary ml-2"
                                @click="fetchCalls(1, true)"
                            >
                                <i class="fa-solid fa-magnifying-glass"></i>
                                Mostrar tots</b-button
                            >
                        </b-form>
                    </b-col>
                </b-row>
            </b-card>
        </div>

        <b-card class="p-3 card-container">
            <b-table
                v-if="!isLoading"
                striped
                hover
                small
                thead-class="thead-dark"
                :items="calls.data"
                :fields="fields"
            >
                <template #cell(see_call)="data">
                    <div>
                        <button
                            type="button"
                            class="btn btn-sm button-edit"
                            title="Veure dades"
                            @click="toggleModalCalls(data.item.id)"
                        >
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </template>
            </b-table>

            <div v-else class="loading-spinner">
                <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
            </div>

            <pagination
                v-show="!isLoading"
                class="justify-center-center pagination-sm"
                :data="calls"
                @pagination-change-page="fetchCalls"
            >
            </pagination>
        </b-card>

        <modal-calls-details ref="modal-calls-details" />
    </div>
</template>

<script>
import moment from "moment";

export default {
    mounted() {
        document.title = "Trucades - Broggi";
        this.user = window.Vue.prototype.$user;

        this.fetchCalls();
    },
    data() {
        return {
            isLoading: true,
            user: {},
            fields: [
                {
                    key: "codi_trucada",
                    label: "Codi trucada",
                    sortable: true,
                    tdClass: "align-middle",
                    thClass: "codi-th-column",
                },
                {
                    key: "telefon",
                    label: "Telèfon",
                    tdClass: "align-middle",
                    thClass: "telf-th-column",
                },
                {
                    key: "data_hora",
                    label: "Data",
                    sortable: true,
                    tdClass: "align-middle",
                    thClass: "data-th-column",
                    formatter: (value) => {
                        return moment(value)
                            .locale("es")
                            .format("DD/MM/yyyy HH:mm:ss");
                    },
                },
                {
                    key: "expedient.codi",
                    label: "Codi Expedient",
                    sortable: true,
                    tdClass: "align-middle",
                    thClass: "codi-exp-th-column",
                },
                {
                    key: "see_call",
                    label: "Més dades",
                    tdClass: "align-middle",
                    thClass: "edit-th-column",
                },
            ],
            filtre: {
                call_code: "",
                exp_code: "",
            },
            calls: {},
        };
    },
    methods: {
        fetchCalls(page = 1, clean_filter) {
            if (clean_filter) {
                this.filtre.call_code = "";
                this.filtre.exp_code = "";
            }

            this.isLoading = true;

            let consulta = new URLSearchParams({
                filtreCodiCall: this.filtre.call_code,
                filtreCodiExp: this.filtre.exp_code,
                userTypeId: this.user.perfils_id,
                userId: this.user.id,
            });

            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            let me = this;

            axios
                .get(`api/cartes_trucades?page=${page}&${consulta}`, {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.calls = response.data;
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
        toggleModalCalls(id_call) {
            const call_selected = this.calls.data.find(
                (call) => call.id == id_call
            );

            if (call_selected)
                this.$refs["modal-calls-details"].loadCallInfo(call_selected);
        },
    },
};
</script>

<style scoped>
.card-container {
    background-color: white;
    border: 1px;
    box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}

.button-edit {
    border-radius: 5px;
    border: 0px;
    background-color: #06adc4;
    padding-inline: 10px;
    color: white;
}

.button-edit:hover {
    transform: scale(1.1);
    transition: 500ms;
}

.loading-spinner {
    width: 100%;
    text-align: center;
    justify-content: center;
}

/* CLASSES TABLA */
::v-deep .codi-th-column {
    text-align: center;
    width: 5%;
    vertical-align: middle;
}

::v-deep .telf-th-column {
    text-align: center;
    vertical-align: middle;
    width: 5%;
}

::v-deep .data-th-column {
    text-align: center;
    vertical-align: middle;
    width: 20%;
}

::v-deep .codi-exp-th-column {
    text-align: center;
    vertical-align: middle;
    width: 10%;
}

::v-deep .edit-th-column {
    text-align: center;
    vertical-align: middle;
    width: 10%;
}

.div-expedient-estate {
    width: 150px;
    padding-top: 30px;
}

::v-deep .modal-body {
    padding: 30px !important;
}

::v-deep .select-agency {
    width: 100%;
    text-align: center;
}

/* CSS FILTROS */
.leyenda {
    display: flex;
    align-items: center;
    text-align: center;
    vertical-align: middle;
    justify-content: space-around;
}

.col-filtrar {
    display: flex;
    justify-content: flex-end;
}

.show-card {
    background-color: white;
    border: 1px;
    box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}

::v-deep .card_body {
    padding: 1rem;
    padding-inline: 2.25rem;
}
.btn-estat {
    background: transparent;
    color: black;
    border: 0px;
}

::v-deep .leyenda .focus {
    box-shadow: 0 0 0 0 !important;
}

::v-deep .leyenda .active {
    background: transparent !important;
    color: black !important;
    box-shadow: 0 0 0 0.1rem black !important;
}

::v-deep .text-area-disabled:disabled {
    background: white;
}

::v-deep .text-area-disabled:disabled {
    background: white;
}
</style>
