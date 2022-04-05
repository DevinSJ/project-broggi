<template>
    <div>
        <div class="mb-2">
            <!--Panel filtrado-->
            <b-card class="show-card" body-class="card_body">
                <b-row>
                    <b-col cols="lg-6">
                        <label class="font-weight-bold mr-2">Selecciona el estat que vols veure: </label>
                        <b-form-checkbox
                            v-model="filtre.estat.in_progress"
                            name="check-button"
                            button
                            button-variant="btn-estat"
                            @change="filtrar"
                        >
                            <i
                                class="fa-solid fa-circle in-progress mr-2"
                            ></i
                            >En progrés
                        </b-form-checkbox>
                        <b-form-checkbox
                            v-model="filtre.estat.requested"
                            name="check-button"
                            button
                            button-variant="btn-estat"
                            @change="filtrar"
                        >
                            <i class="fa-solid fa-circle requested mr-2"></i
                            >Sol·licitat
                        </b-form-checkbox>
                        <b-form-checkbox
                            v-model="filtre.estat.accepted"
                            name="check-button"
                            button
                            button-variant="btn-estat"
                            @change="filtrar"
                        >
                            <i class="fa-solid fa-circle accepted mr-2"></i
                            >Acceptat
                        </b-form-checkbox>
                        <b-form-checkbox
                            v-model="filtre.estat.closed"
                            name="check-button"
                            button
                            button-variant="btn-estat"
                            @change="filtrar"
                        >
                            <i class="fa-solid fa-circle closed mr-2"></i
                            >Tancat
                        </b-form-checkbox>
                        <b-form-checkbox
                            v-model="filtre.estat.immobilized"
                            name="check-button"
                            button
                            button-variant="btn-estat"
                            @change="filtrar"
                        >
                            <i
                                class="fa-solid fa-circle immobilized mr-2"
                            ></i
                            >Immobilitzat
                        </b-form-checkbox>
                    </b-col>
                    <b-col cols="lg-6" class="col-filtrar">
                        <b-form @submit.prevent="filtrar" inline class="justify-content-end">
                            <label class="mr-sm-2" for="filtre-codi"
                                >Codi</label
                            >
                            <b-form-input
                                name="filtre-codi"
                                id="filtre-codi"
                                v-model="filtre.codi"
                                class="mb-2 mr-sm-2 mb-sm-0 form-control-sm"
                                placeholder="Exemple: EXP-..."
                            ></b-form-input>
                            <b-button
                                variant="info"
                                class="btn-sm"
                                @click="filtrar"
                                ><i class="fa-solid fa-filter"></i>
                                Filtrar</b-button
                            >
                            <b-button
                                class="btn-sm"
                                variant="secondary ml-2"
                                @click="getExpedients(false)"
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
                :items="expedients.data"
                :fields="fields"
            >
                <template #cell(estats_expedients_id)="data">
                    <div>
                        <i
                            :class="getState(data.item.estats_expedients_id)"
                        ></i>
                    </div>
                </template>

                <template #cell(see_expedient)="data">
                    <div>
                        <button
                            type="button"
                            class="btn btn-sm button-edit"
                            title="Veure dades"
                            v-b-modal.modal-expedients
                            @click="loadModal(data.item)"
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
                :data="expedients"
                @pagination-change-page="fetchExpedients"
            >
            </pagination>
        </b-card>

        <!-- Modal -->
        <b-modal
            v-show="!isLoading2"
            id="modal-expedients"
            class="modal-calls"
            :title="`Trucades de l'expedient (${codeExpedients})`"
            ref="modalExpedients"
            size="huge"
            ok-title="Guardar"
            cancel-title="Cancelar"
            @ok="updateExpedient"
            @hide="hideModalExpedients"
            :hide-footer="isLoading2 || toggleManualModal"
        >
            <b-table
                v-if="trucades.length > 0"
                striped
                hover
                small
                thead-class="thead-dark"
                :items="trucades"
                :fields="callFields"
                v-show="!isLoading2"
            >
                <template #cell(cartes_trucades_has_agencies)="data">
                    <p style="display: none">{{ data.item.id }}</p>
                    <button
                        class="button-edit"
                        v-b-modal.modal-info-calls
                        @click="
                            loadAgencies(
                                data.item.cartes_trucades_has_agencies,
                                data.item
                            )
                        "
                    >
                        <i class="fa-solid fa-eye m-1"></i>
                    </button>
                </template>
                <template #cell(show-nota-comuna)="data">
                    <div>
                        <p style="display: none">{{ data.item.id }}</p>
                        <button
                            class="button-edit"
                            v-b-modal.modal-info-calls
                            @click="
                                loadInfo(
                                    data.item.nom_trucada,
                                    data.item.nota_comuna_descripcio
                                )
                            "
                        >
                            <i class="fa-solid fa-eye m-1"></i>
                        </button>
                    </div>
                </template>
            </b-table>

            <div v-else v-show="!showTrucades">
                No hi ha trucades enllaçades a aquest expedient realitzades per
                aquest usuari.
            </div>

            <div
                v-show="!isLoading2"
                v-if="user.perfils_id != 1 && !toggleManualModal"
                class="div-expedient-estate"
            >
                <p>Estat de l'expedient:</p>
                <b-form-select
                    v-model="expedient.estats_expedients_id"
                    id="estats_expedients_id"
                    name="estats_expedients_id"
                    :options="renderConditions"
                >
                </b-form-select>
            </div>

            <div v-if="this.isLoading2" class="loading-spinner">
                <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
            </div>
        </b-modal>

        <!-- Modal with call information -->
        <b-modal
            id="modal-info-calls"
            class="modal-info-calls"
            :title="modalTitle2"
            size="lg"
            ok-only
            ok-title="Guardar"
            cancel-title="Cancelar"
            hide-footer
            @ok="updateExpedient"
        >
            <div v-if="!this.modal_agencia">
                <p>Nom: {{ this.name_call }}</p>
                <label for="txtNotaComuna">Descripció:</label>
                <textarea
                    name="txtNotaComuna"
                    id="txtNotaComuna"
                    class="w-100 p-2"
                    cols="30"
                    rows="10"
                    v-model="this.description_call"
                    readonly
                ></textarea>
            </div>
            <div v-else>
                <b-table
                    striped
                    hover
                    small
                    bordered
                    thead-class="thead-dark"
                    :items="agencies_contactades"
                    :fields="agenciesFields"
                    v-show="!isLoading3"
                >
                    <template #cell(estats_agencies_id)="data">
                        <p style="display: none">{{ data.item.id }}</p>

                        <b-form-select
                            class="select-agency"
                            v-model="data.item.estats_agencies_id"
                            id="estats_agencies_id"
                            name="estats_agencies_id"
                            :disabled="toggleManualModal"
                            @change="
                                updateEstatAgencies(
                                    data.item.agencia.id,
                                    data.item.estats_agencies_id
                                )
                            "
                            :options="renderEstatsAgencies"
                        >
                        </b-form-select>
                    </template>
                </b-table>
            </div>

            <div v-if="this.isLoading3" class="loading-spinner">
                <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
            </div>
        </b-modal>
    </div>
</template>

<script>
import moment from 'moment';

export default {
    mounted() {
        document.title = "Expedients - Broggi";

        this.getExpedients(true);
        this.getEstatsExpedients();
        this.getEstatsAgencies();

        this.user = window.Vue.prototype.$user;
    },
    data() {
        return {
            codeExpedients: "",
            request: null,
            isLoading: true,
            isLoading2: true,
            isLoading3: true,
            modalTitle2: "",
            user: {},
            fields: [
                {
                    key: "estats_expedients_id",
                    label: "Estat",
                    sortable: true,
                    tdClass: "centered-text-class",
                    thClass: "estat-th-column",
                },
                {
                    key: "id",
                    label: "Id",
                    sortable: true,
                    tdClass: "centered-text-class",
                    thClass: "id-th-column",
                },
                {
                    key: "codi",
                    label: "Codi Expedient",
                    sortable: true,
                    tdClass: "centered-text-class",
                    thClass: "codi-exp-th-column",
                },
                {
                    key: "data_creacio",
                    label: "Data creació",
                    sortable: true,
                    tdClass: "centered-text-class",
                    thClass: "created-th-column",
                    formatter: (value) => {
                        return moment(value).locale("es").format("DD/MM/yyyy HH:mm:ss");
                    }
                },
                {
                    key: "data_ultima_modificacio",
                    label: "Ultima modificació",
                    sortable: true,
                    tdClass: "centered-text-class",
                    thClass: "modified-th-column",
                    formatter: (value) => {
                        return moment(value).locale("es").format("DD/MM/yyyy HH:mm:ss");
                    }
                },
                {
                    key: "cartes_trucades",
                    label: "Quantitat trucades",
                    sortable: true,
                    tdClass: "centered-text-class",
                    thClass: "quantity-call-th-column",
                    formatter: (value) => {
                        return value.length;
                    }
                },
                {
                    key: "see_expedient",
                    label: "Més dades",
                    tdClass: "centered-text-class",
                    thClass: "edit-th-column",
                },
            ],
            callFields: [
                {
                    key: "codi_trucada",
                    label: "Codi",
                    sortable: true,
                    tdClass: "centered-text-class",
                    thClass: "codi-th-column",
                },
                {
                    key: "telefon",
                    label: "Número de telèfon",
                    tdClass: "centered-text-class",
                    thClass: "num-telf-th-column",
                },
                {
                    key: "descripcio_localitzacio",
                    label: "Localització",
                    tdClass: "centered-text-class",
                    thClass: "localitzacio-th-column",
                },
                {
                    key: "incident.descripcio",
                    label: "Incident",
                    tdClass: "centered-text-class",
                    thClass: "incident-th-column",
                },
                {
                    key: "cartes_trucades_has_agencies",
                    label: "Agències",
                    tdClass: "centered-text-class",
                    thClass: "agencies-th-column",
                },
                {
                    key: "show-nota-comuna",
                    label: "Nota comuna",
                    tdClass: "centered-text-class",
                    thClass: "nota-comuna-th-column",
                },
            ],
            agenciesFields: [
                {
                    key: "agencia.id",
                    label: "Id",
                    sortable: true,
                    tdClass: "centered-text-class",
                    thClass: "id-th-column",
                },
                {
                    key: "agencia.nom",
                    label: "Nom",
                    tdClass: "centered-text-class",
                    thClass: "localitzacio-th-column",
                },
                {
                    key: "estats_agencies_id",
                    label: "Estat",
                    tdClass: "centered-text-class",
                    thClass: "estats-agencies-th-column",
                },
            ],
            expedients: {},
            trucades: [],
            expedient_conditions: [],
            estats_agencies: [],
            options: [],
            name_call: "",
            description_call: "",
            agencies_contactades: [],
            modal_agencia: true,
            showTrucades: true,
            toggleManualModal: false,
            expedient: {
                id: "",
                data_creacio: "",
                data_ultima_modificacio: "",
                estats_expedients_id: "",
            },
            call: {
                id: "",
                expedients_id: "",
                cartes_trucades_has_agencies: {},
            },
            filtre: {
                codi: "",
                estat: {
                    in_progress: false,
                    accepted: false,
                    requested: false,
                    closed: false,
                    immobilized: false,
                },
            },
        };
    },
    computed: {
        renderConditions() {
            return this.expedient_conditions.map((condition) => {
                return {
                    value: condition.id,
                    text: condition.estat,
                };
            });
        },
        renderEstatsAgencies() {
            return this.estats_agencies.map((condition) => {
                return {
                    value: condition.id,
                    text: condition.estat,
                };
            });
        },
    },
    methods: {
        getState(state) {
            let classname = "";

            switch (state) {
                case 1:
                    classname = "fa-solid fa-circle in-progress";
                    break;
                case 2:
                    classname = "fa-solid fa-circle requested";
                    break;
                case 3:
                    classname = "fa-solid fa-circle accepted";
                    break;
                case 4:
                    classname = "fa-solid fa-circle closed";
                    break;
                case 5:
                    classname = "fa-solid fa-circle immobilized";
                    break;
            }

            return classname;
        },
        getExpedients(firstTime) {
            firstTime == true ? (this.isLoading = true) : false;

            this.filtre.estat.in_progress = false;
            this.filtre.estat.requested = false;
            this.filtre.estat.accepted = false;
            this.filtre.estat.closed = false;
            this.filtre.estat.immobilized = false;
            this.filtre.codi = "";

            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            let me = this;

            axios
                .get("/api/expedients/", {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.expedients = response.data;
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
        hideModalExpedients() {
            this.trucades = [];

            this.expedient = {
                id: "",
                data_creacio: "",
                data_ultima_modificacio: "",
                estats_expedients_id: "",
            };

            this.codeExpedients  = "";

            if (this.request) this.request.cancel();
        },
        loadModal(expedient, toggleManualModal = false) {
            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            this.expedient = expedient;
            this.showTrucades = true;
            this.isLoading2 = true;

            let me = this;

            this.codeExpedients = expedient.codi;

            axios
                .get(
                    "/api/cartestrucades/list/" +
                        this.expedient.id +
                        "?id_rol=" +
                        this.user.perfils_id +
                        "&id_user=" +
                        this.user.id,
                    {
                        cancelToken: axiosSource.token,
                    }
                )
                .then((response) => {
                    if (response.status === 200) {
                        me.trucades = response.data;
                        if (me.trucades.length == 0) {
                            me.showTrucades = false;
                        }
                    }
                })
                .catch(function (error) {
                    if (!axios.isCancel(error)) {
                        me.errorMessagePopoverCall =
                            "No s'ha pogut cargar les dades...";

                        console.error(error);
                    }
                })
                .finally(() => {
                    me.request = null;

                    me.isLoading2 = false;
                });

            if (toggleManualModal) {
                this.$refs.modalExpedients.show();
            }

            this.toggleManualModal = toggleManualModal;
        },
        getEstatsExpedients() {
            let me = this;

            this.isLoading2 = true;

            axios
                .get("/api/estats_expedients/")
                .then((response) => {
                    me.expedient_conditions = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.isLoading2 = false));
        },
        getEstatsAgencies() {
            let me = this;
            this.isLoading3 = true;
            axios
                .get("/api/estats_agencies/")
                .then((response) => {
                    me.estats_agencies = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.isLoading3 = false));
        },
        loadInfo(name, nota_comuna_descripcio) {
            this.name_call = name;
            this.description_call = nota_comuna_descripcio;
            this.isLoading3 = false;
            this.modal_agencia = false;
            this.modalTitle2 = "Nota comuna";
        },
        loadAgencies(agencies, call) {
            this.call = call;
            this.agencies_contactades = agencies;
            this.isLoading3 = false;
            this.modal_agencia = true;
            this.modalTitle2 = "Agències contactades";
        },
        updateExpedient() {
            axios
                .post(
                    "/api/expedients/put/" +
                        this.expedient.id +
                        "?estat_exp=" +
                        this.expedient.estats_expedients_id
                )
                .then((response) => {
                    if (response.status === 201) {
                        this.fetchExpedients();
                    }
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => {
                    this.getExpedients(false);
                });
        },
        resetExpedient() {
            expedient.id = "";
            expedient.data_creacio = "";
            expedient.data_ultima_modificacio = "";
            expedient.estats_expedients_id = "";
        },
        updateEstatAgencies(agencia_id, estat_agencia) {
            axios
                .post(
                    "/api/cartes_trucades_has_agencies/put/" +
                        this.call.id +
                        "/" +
                        agencia_id +
                        "?estat_agencia=" +
                        estat_agencia
                )
                .then(() => {
                    this.updateExpedient();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        fetchExpedients(page = 1) {
            this.isLoading = true;

            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            let me = this;

            axios
                .get(`api/expedients/?page=${page}`, {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.expedients = response.data;
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
        filtrar() {
            this.isLoading = true;

            let consulta = new URLSearchParams({
                filtreCodi: this.filtre.codi,
                filtreEstat1: this.filtre.estat.in_progress,
                filtreEstat2: this.filtre.estat.requested,
                filtreEstat3: this.filtre.estat.accepted,
                filtreEstat4: this.filtre.estat.closed,
                filtreEstat5: this.filtre.estat.immobilized,
            });

            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            let me = this;

            axios
                .get("/api/expedients/?" + consulta, {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.expedients = response.data;
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
    },
};
</script>

<style scoped>
.card-container {
    background-color: white;
    border: 1px;
    box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}

.in-progress {
    color: rgb(5, 100, 8);
    border-radius: 50%;
    height: 15px;
}
.requested {
    color: yellow;
    border-radius: 50%;
    height: 15px;
}
.accepted {
    color: rgb(3, 250, 3);
    border-radius: 50%;
    height: 15px;
}
.closed {
    color: blue;
    border-radius: 50%;
    height: 15px;
}
.immobilized {
    color: rgb(150, 22, 150);
    border-radius: 50%;
    height: 15px;
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
::v-deep .centered-text-class {
    text-align: center;
    vertical-align: middle;
}

::v-deep .estat-th-column {
    text-align: center;
    width: 2%;
    vertical-align: middle;
}

::v-deep .quantity-call-th-column {
    text-align: center;
    width: 6%;
    vertical-align: middle;
}

::v-deep .id-th-column {
    text-align: center;
    vertical-align: middle;
    width: 2%;
}

::v-deep .codi-exp-th-column {
    text-align: center;
    vertical-align: middle;
    width: 10%;
}

::v-deep .created-th-column {
    text-align: center;
    vertical-align: middle;
    width: 20%;
}

::v-deep .modified-th-column {
    text-align: center;
    vertical-align: middle;
    width: 20%;
}

::v-deep .edit-th-column {
    text-align: center;
    vertical-align: middle;
    width: 10%;
}

/* 2nd table */
::v-deep .codi-th-column {
    text-align: center;
    vertical-align: middle;
    width: 5%;
}

::v-deep .agencies-th-column {
    text-align: center;
    vertical-align: middle;
    width: 5%;
}

::v-deep .incident-th-column {
    text-align: center;
    vertical-align: middle;
    width: 20%;
}

::v-deep .localitzacio-th-column {
    text-align: center;
    vertical-align: middle;
    width: 15%;
}

::v-deep .num-telf-th-column {
    text-align: center;
    vertical-align: middle;
    width: 10%;
}

::v-deep .nota-comuna-th-column {
    text-align: center;
    vertical-align: middle;
    width: 5%;
}

::v-deep .estats-agencies-th-column {
    text-align: center;
    vertical-align: middle;
    width: 5%;
}

@media (min-width: 992px) {
    ::v-deep .modal .modal-huge {
        max-width: 90% !important;
        width: 90% !important;
    }
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

::v-deep .btn-group-toggle:hover {
    box-shadow: 0 0 0 0.1rem black;
}

::v-deep .btn-group-toggle .focus {
    box-shadow: 0 0 0 0;
}

::v-deep .btn-group-toggle .active {
    box-shadow: 0 0 0 0.1rem black;
}
</style>
