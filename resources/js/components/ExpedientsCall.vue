<template>
    <div>
        <div class="d-flex h-100">
            <b-list-group v-if="!isLoading" class="list-expedients">
                <b-list-group-item v-for="expedient in expedients" :key="expedient.id" :active="expedient.id === expedientSelected.id" class="flex-column align-items-start">
                    <div class="d-flex w-100 my-1 justify-content-between">
                        <h5 class="mb-1">{{ expedient.codi }}</h5>
                    </div>
                    <p class="mb-1">
                        <small class="d-block"><span class="font-weight-bold">Data i hora creació: </span>{{ formatDate(expedient.data_ultima_modificacio) }}</small>
                        <small class="d-block"><span class="font-weight-bold">Localització: </span>{{ getLocationIncident(expedient.cartes_trucades) }}</small>
                        <small class="d-block"><span class="font-weight-bold">Tipificació: </span>{{ getTypesIncidentsUnique(expedient.cartes_trucades) }}</small>
                    </p>
                    <button
                        type="button"
                        class="btn btn-sm btn-secondary"
                        title="Veure trucades del expedient"
                        v-b-modal.modal-expedients
                        @click="loadModalExpedient(expedient)"
                    >
                        <i class="fa-solid fa-phone"></i>
                        <b-badge class="ml-2" variant="light">{{ expedient.cartes_trucades.length }}<span class="sr-only">trucades</span></b-badge>
                    </button>
                    <button
                        type="button"
                        class="btn btn-sm btn-primary"
                        :title="(expedient.id === expedientSelected.id ? 'Desseleccionar' : 'Seleccionar')"
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
        <b-modal
            v-show="!isLoading2"
            id="modal-expedients"
            class="modal-calls"
            :title="`Trucades de l'expedient (${codeExpedients})`"
            size="huge"
            hide-footer
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

            <div v-show="this.isLoading2" class="loading-spinner">
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
            hide-footer
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
                </b-table>
            </div>

            <div v-show="this.isLoading3" class="loading-spinner">
                <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
            </div>
        </b-modal>
    </div>
</template>

<script scoped>
import moment from 'moment';

export default {
    mounted() {
        this.getExpedients();
        this.user = window.Vue.prototype.$user;
    },
    beforeDestroy() {
        if (this.request) this.request.cancel();
    },
    data() {
        return {
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
                    key: "estat_agencia.estat",
                    label: "Estat",
                    tdClass: "centered-text-class",
                    thClass: "estats-agencies-th-column",
                },
            ],
            trucades: [],
            isLoading: true,
            isLoading2: true,
            isLoading3: true,
            showTrucades: true,
            modal_agencia: true,
            expedients: [],
            agencies_contactades: [],
            expedientSelected: {
                id: -1
            },
            request: null,
            codeExpedients: "",
            user: {},
            modalTitle2: "",
        };
    },
    methods: {
        loadModalExpedient(expedient) {
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
                    "/api/cartes_trucades/list/" +
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
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.request = null;
                    me.isLoading2 = false;
                });
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
        getExpedients(filter = {}) {
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
        formatDate(value) {
            return moment(value).locale("es").format("DD/MM/yyyy HH:mm:ss")
        },
        getTypesIncidentsUnique(calls) {
            return calls.map(c => c.incident.descripcio).filter((value, index, self) => self.indexOf(value) === index).join(', ');
        },
        getLocationIncident(calls) {
            if (calls.length > 0)
            {
                let town = "MUNICIPI NO INDICAT";
                let region = "PROVINCIA NO INDICAT";
                let description_location = "DESCRIPCIÓ NO INDICAT";

                let call = calls.find(c => c.municipi);

                if (call) town = call.municipi.nom;

                call = calls.find(c => c.provincia);

                if (call) region = call.provincia.nom;

                call = calls.find(c => c.descripcio_localitzacio);

                if (call) description_location = call.descripcio_localitzacio;

                return `${description_location} (${region}, ${town})`;
            }
            else
            {
                return "No hi ha trucades en aquest expedient...";
            }
        }
    },
};
</script>

<style scoped>
small {
    font-size: 90%;
}
.list-expedients {
    width: 100%;
    max-height: 620px;
    overflow-y: scroll;
}

.loading-spinner {
    width: 100%;
    text-align: center;
    justify-content: center;
}

.active {
    background-color: #eaf4f6;
    border-color: #eaf4f6;
    color: black;
}

@media (min-width: 992px) {
    ::v-deep .modal .modal-huge {
        max-width: 90% !important;
        width: 90% !important;
    }
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
</style>
