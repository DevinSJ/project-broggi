<template>
    <div>
        <h5 class="mb-1">{{ expedient.codi }}</h5>
        <p class="mb-1">
            <small class="d-block"
                ><span class="font-weight-bold">Data i hora creació: </span
                >{{ formatDate(expedient.data_creacio) }}</small
            >
            <small class="d-block"
                ><span class="font-weight-bold">Estat: </span
                >{{ expedient.estat_expedient.estat }}
                <i :class="getStateColor(expedient.estats_expedients_id)"></i
            ></small>
            <small class="d-block"
                ><span class="font-weight-bold">Fora catalunya: </span
                >{{
                    checkIsOutCatalunya(expedient.cartes_trucades) ? "Si" : "No"
                }}</small
            >
            <small class="d-block"
                ><span class="font-weight-bold">Localització: </span
                >{{ getLocationIncident(expedient.cartes_trucades) }}</small
            >
            <small class="d-block"
                ><span class="font-weight-bold">Tipificació: </span
                >{{ getTypesIncidentsUnique(expedient.cartes_trucades) }}</small
            >
        </p>
        <button
            type="button"
            class="btn btn-sm btn-secondary"
            title="Veure trucades del expedient"
            @click="loadModalExpedient(expedient)"
        >
            <i class="fa-solid fa-phone"></i>
            <b-badge class="ml-2" variant="light"
                >{{ expedient.cartes_trucades.length
                }}<span class="sr-only">trucades</span></b-badge
            >
        </button>
        <button
            type="button"
            v-if="isSelected != null"
            class="btn btn-sm btn-primary"
            :title="isSelected ? 'Desseleccionar' : 'Seleccionar'"
            @click="toggleSelectExpedient(expedient)"
        >
            {{ isSelected ? "Desseleccionar" : "Seleccionar" }}
        </button>
        <b-modal
            ref="modal-call-expedients"
            class="modal-calls"
            :title="`Trucades de l'expedient (${codeExpedients})`"
            size="huge"
            @hidden="trucades = []"
            hide-footer
        >
            <b-table
                v-if="trucades.length > 0"
                striped
                hover
                small
                responsive
                thead-class="thead-dark"
                :items="trucades"
                :fields="callFields"
            >
                <template #cell(show-more-details)="data">
                    <div>
                        <p style="display: none">{{ data.item.id }}</p>
                        <b-button
                            variant="primary"
                            size="sm"
                            @click="toggleModalCalls(data.item.id)"
                        >
                            <i class="fa-solid fa-eye m-1"></i>
                        </b-button>
                    </div>
                </template>
            </b-table>
            <div v-else-if="!isLoading">
                No hi ha trucades enllaçades a aquest expedient realitzades per
                aquest usuari.
            </div>
            <div v-show="isLoading" class="loading-spinner">
                <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
            </div>
        </b-modal>
        <modal-calls-details ref="modal-calls-details"/>
    </div>
</template>

<script>
import moment from 'moment';

export default {
    props: {
        expedient: Object,
        isSelected: {
            type: Boolean,
            required: false,
            default: null,
        },
    },
    mounted() {
        this.user = window.Vue.prototype.$user;
    },
    data() {
        return {
            callFields: [
                {
                    key: "codi_trucada",
                    label: "Codi",
                    sortable: true,
                    tdClass: "align-middle",
                    thClass: "codi-th-column",
                },
                {
                    key: "telefon",
                    label: "Número de telèfon",
                    tdClass: "align-middle",
                    thClass: "num-telf-th-column",
                },
                {
                    key: "descripcio_localitzacio",
                    label: "Localització",
                    tdClass: "align-middle",
                    thClass: "localitzacio-th-column",
                },
                {
                    key: "incident.descripcio",
                    label: "Incident",
                    tdClass: "align-middle",
                    thClass: "incident-th-column",
                },
                {
                    key: "show-more-details",
                    label: "Més dades",
                    tdClass: "align-middle",
                    thClass: "show-more-details-th-column",
                },
            ],
            agenciesFields: [
                {
                    key: "agencia.id",
                    label: "Id",
                    sortable: true,
                    tdClass: "align-middle",
                    thClass: "id-th-column",
                },
                {
                    key: "agencia.nom",
                    label: "Nom",
                    tdClass: "align-middle",
                    thClass: "localitzacio-th-column",
                },
                {
                    key: "estat_agencia.estat",
                    label: "Estat",
                    tdClass: "align-middle",
                    thClass: "estats-agencies-th-column",
                },
            ],
            request: null,
            trucades: [],
            isLoading: true,
            modal_agencia: true,
            codeExpedients: "",
            modalTitle: "",
            agencies_contactades: [],
            user: {},
        };
    },
    methods: {
        formatDate(value) {
            return moment(value).locale("es").format("DD/MM/yyyy HH:mm:ss");
        },
        checkIsOutCatalunya(calls) {
            return calls.find((c) => c.fora_catalunya == "1");
        },
        getTypesIncidentsUnique(calls) {
            return calls
                .map((c) => c.incident.descripcio)
                .filter((value, index, self) => self.indexOf(value) === index)
                .join(", ");
        },
        getLocationIncident(calls) {
            if (calls.length > 0) {
                let town = "MUNICIPI NO INDICAT";
                let province = "PROVINCIA NO INDICAT";
                let description_location = "DESCRIPCIÓ NO INDICAT";

                if (!this.checkIsOutCatalunya(calls)) {
                    let call = calls.find((c) => c.municipi);

                    if (call) town = call.municipi.nom;

                    call = calls.find((c) => c.provincia);

                    if (call) province = call.provincia.nom;

                    call = calls.find((c) => c.descripcio_localitzacio);

                    if (call)
                        description_location = call.descripcio_localitzacio;

                    return `${description_location} (${province}, ${town})`;
                } else {
                    let call = calls.find((c) => c.descripcio_localitzacio);

                    if (call) {
                        if (
                            call.descripcio_localitzacio.split(";").length == 2
                        ) {
                            province =
                                call.descripcio_localitzacio.split(";")[0];
                            town = call.descripcio_localitzacio.split(";")[1];

                            return `${province}, ${town}`;
                        } else if (
                            call.descripcio_localitzacio.split(";").length == 1
                        ) {
                            province =
                                call.descripcio_localitzacio.split(";")[0];

                            return `${province}`;
                        } else {
                            return `${description_location}`;
                        }
                    } else {
                        return `${description_location}`;
                    }
                }
            } else {
                return "No hi ha trucades en aquest expedient...";
            }
        },
        getStateColor(state) {
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
        toggleSelectExpedient(expedient) {
            this.$emit("toggleSelectExpedient", expedient);
        },
        toggleModalCalls(id_call) {
            const call_selected = this.trucades.filter(
                (call) => call.id == id_call
            );

            if (call_selected)
                this.$refs["modal-calls-details"].loadCallInfo(call_selected);
        },
    },
};
</script>

<style scoped>
.in-progress {
    color: rgb(5, 100, 8);
    border-radius: 50%;
    height: 15px;
}

.requested {
    color: #f9d71c;
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

small {
    font-size: 90%;
}

.loading-spinner {
    width: 100%;
    text-align: center;
    justify-content: center;
}

::v-deep .modal .modal-huge {
    max-width: 90% !important;
    width: 90% !important;
}
</style>
