<template>
    <div>
        <b-modal
            ref="modal-summary"
            centered
            title="Resum de la trucada"
            size="huge"
            modal-class="zoominout"
            footer-class="d-flex justify-content-stretch"
            scrollable
            @hidden="handleHiddenModal"
        >
            <b-alert
                v-if="errorMessage"
                show
                variant="danger"
                v-html="errorMessage"
            >
            </b-alert>
            <h5 class="font-weight-bold my-2"><u>DADES INICIALS</u></h5>
            <div class="row">
                <div class="col-lg-4 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Codi de trucada</i></label
                    >
                    <label>{{ call.codeCall }}</label>
                </div>
                <div class="col-lg-4 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Data i hora inici de la trucada</i></label
                    >
                    <label>{{ call.callDateTimeIni }}</label>
                </div>
                <div class="col-lg-4 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Duració de la trucada (hh:mm:ss)</i></label
                    >
                    <label>{{ getFormatCrono }}</label>
                </div>
            </div>
            <hr />
            <h5 class="font-weight-bold my-2">
                <u>IDENTIFICACIÓ DE LA TRUCADA</u>
            </h5>
            <div class="row">
                <div class="col-lg-3 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Nº telèfon</i></label
                    >
                    <label>{{ call.phone }}</label>
                </div>
                <div class="col-lg-3 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Municipi</i></label
                    >
                    <label>{{
                        call.townCallSelected ? call.townCallSelected.nom : ""
                    }}</label>
                </div>
                <div class="col-lg-3 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Adreça</i></label
                    >
                    <label>{{ call.address }}</label>
                </div>
                <div class="col-lg-3 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Procedència</i></label
                    >
                    <label>{{ call.provenance }}</label>
                </div>
                <div class="col-lg-3 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Antecedents</i></label
                    >
                    <label>{{ call.antecedents }}</label>
                </div>
            </div>
            <hr />
            <h5 class="font-weight-bold my-2"><u>NOTA COMUNA</u></h5>
            <div class="row">
                <div class="col-lg-12 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Nota comuna</i></label
                    >
                    <label class="text-pre-wrap">{{ call.commonNote }}</label>
                </div>
            </div>
            <hr />
            <h5 class="font-weight-bold my-2">
                <u>LOCALITZACIÓ DE L'EMERGÈNCIA</u>
            </h5>
            <div class="row">
                <div class="col-lg-12 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Fora de catalunya</i></label
                    >
                    <label>{{ call.outOfCatalunya ? "Si" : "No" }}</label>
                </div>
            </div>
            <div class="row" v-if="!call.outOfCatalunya">
                <div class="col-lg-4 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Província</i></label
                    >
                    <label>{{
                        call.provinceSelected ? call.provinceSelected.nom : ""
                    }}</label>
                </div>
                <div class="col-lg-4 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Comarca</i></label
                    >
                    <label>{{
                        call.regionSelected ? call.regionSelected.nom : ""
                    }}</label>
                </div>
                <div class="col-lg-4 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Municipi</i></label
                    >
                    <label>{{
                        call.townSelected ? call.townSelected.nom : ""
                    }}</label>
                </div>
            </div>
            <div class="row" v-else>
                <div class="col-lg-6 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Província</i></label
                    >
                    <label>{{ call.provinceOutOfCatalunya }}</label>
                </div>
                <div class="col-lg-6 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Municipi</i></label
                    >
                    <label>{{ call.townOutOfCatalunya }}</label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Tipus localització</i></label
                    >
                    <label>{{
                        call.typeLocationSelected
                            ? call.typeLocationSelected.tipus
                            : ""
                    }}</label>
                </div>
                <div
                    v-if="
                        call.typeLocationSelected &&
                        call.typeLocationSelected.id == 1
                    "
                    class="col-lg-8 my-2"
                >
                    <label class="font-weight-bold d-block"
                        ><i>Carrers</i></label
                    >
                    <label>
                        {{
                            `${call.typeStreet} ${call.nameStreet} ${call.numberStreet}, Escalera ${call.numberStair}, Pis ${call.numberFloor} Porta ${call.numberDoor}`.trim() ==
                            ", Escalera , Pis  Porta"
                                ? ""
                                : `${call.typeStreet} ${call.nameStreet} ${call.numberStreet}, Escalera ${call.numberStair}, Pis ${call.numberFloor} Porta ${call.numberDoor}`
                        }}
                    </label>
                </div>
                <div
                    v-else-if="
                        call.typeLocationSelected &&
                        call.typeLocationSelected.id == 2
                    "
                    class="col-lg-8 my-2"
                >
                    <label class="font-weight-bold d-block"
                        ><i>Punt singular</i></label
                    >
                    <label>
                        {{ `${call.singularPoint}` }}
                    </label>
                </div>
                <div
                    v-else-if="
                        call.typeLocationSelected &&
                        call.typeLocationSelected.id == 4
                    "
                    class="col-lg-8 my-2"
                >
                    <label class="font-weight-bold d-block"
                        ><i>Carretera</i></label
                    >
                    <label>
                        {{
                            `Carretera ${call.nameHighway}, Direcció ${call.directionHighway}, KM ${call.kmHighway}`.trim() ==
                            "Carretera , Direcció , KM"
                                ? ""
                                : `Carretera ${call.nameHighway}, Direcció ${call.directionHighway}, KM ${call.kmHighway}`
                        }}
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>Informació rellevant de la localització</i></label
                    >
                    <label>{{ call.extraInformationStreet }}</label>
                </div>
            </div>
            <hr />
            <h5 class="font-weight-bold my-2">
                <u>TIPIFICACIÓ DE L'EMERGÈNCIA</u>
            </h5>
            <div class="row">
                <div class="col-lg-6 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>TIPUS INCIDENT</i></label
                    >
                    <label>{{
                        call.typeIncidentSelected
                            ? call.typeIncidentSelected.descripcio
                            : ""
                    }}</label>
                </div>
                <div class="col-lg-6 my-2">
                    <label class="font-weight-bold d-block"
                        ><i>INCIDENT</i></label
                    >
                    <label>{{
                        call.incidentSelected
                            ? call.incidentSelected.descripcio
                            : ""
                    }}</label>
                </div>
            </div>
            <div class="row" v-if="call.incidentSelected">
                <div class="col-lg-6 my-2">
                    <div class="d-block">
                        <label class="font-weight-bold d-block"
                            ><u>DEFINICIÓ INCIDENT:</u></label
                        >
                        <small>{{ call.incidentSelected.definicio }}</small>
                    </div>
                </div>
                <div class="col-lg-6 my-2">
                    <div class="d-block">
                        <label class="font-weight-bold d-block"
                            ><u>INSTRUCCIONS INCIDENT:</u></label
                        >
                        <small>{{ call.incidentSelected.instrucions }}</small>
                    </div>
                </div>
            </div>
            <template #modal-footer>
                <b-button
                    v-b-modal.modal-confirm-discard
                    variant="danger"
                    class="font-weight-bold flex-fill mr-2"
                    ><i class="fa-solid fa-x mr-2"></i>DESCARTAR
                    TRUCADA</b-button
                >
                <b-button
                    v-b-modal.modal-options
                    v-if="true"
                    variant="primary"
                    class="font-weight-bold flex-fill ml-2"
                    ><i class="fa-solid fa-floppy-disk mr-2"></i>GUARDAR
                    TRUCADA</b-button
                >
                <b-button
                    v-else
                    variant="primary"
                    class="font-weight-bold flex-fill ml-2"
                    @click="dismissModalSummary"
                    ><i class="fa-solid fa-angle-left mr-2"></i>TORNAR AL
                    FORMULARI DE LA TRUCADA</b-button
                >
            </template>
        </b-modal>
        <b-modal
            id="modal-confirm-discard"
            ref="modal-confirm-discard"
            centered
            title="Confirmació"
            size="m"
            footer-class="d-flex justify-content-stretch"
            modal-class="zoominout"
        >
            Segur que vols descartar la trucada?<br />
            Tots els camps que has introduït s'eliminaran.
            <template #modal-footer>
                <b-button
                    variant="primary"
                    class="font-weight-bold flex-fill mr-2"
                    @click="dismissModalConfirm"
                    >CANCEL·LAR</b-button
                >
                <b-button
                    variant="danger"
                    class="font-weight-bold flex-fill ml-2"
                    @click="discardCall"
                    >CONFIRMAR</b-button
                >
            </template>
        </b-modal>
        <b-modal
            id="modal-options"
            ref="modal-options"
            centered
            title="Selecciona una opció"
            size="m"
            hide-footer
            modal-class="zoominout"
        >
            <span v-if="call.expedientSelected.id != -1" class="font-weight-bold text-danger">Ja tens un expedient seleccionat! <a role="button" v-b-modal.modal-expedient-details><u>Veure dades del expedient</u></a></span>
            <section class="d-flex p-0 mt-2">
                <b-button
                    variant="primary"
                    class="font-weight-bold flex-fill mr-2"
                    style="position: relative;height: 100px; max-width: 50%;padding-left: 75px;font-size: 13px;"
                    ><i
                        class="fa-solid fa-folder-open fa-2xl mr-2"
                        style="position: absolute; top: 45px; left: 30px"
                    ></i
                    >ASSOCIANT UN EXPEDIENT EXISTENT</b-button
                >
                <b-button
                    variant="danger"
                    class="font-weight-bold flex-fill ml-2"
                    style="position: relative;height: 100px; max-width: 50%;padding-left: 75px;font-size: 13px;"
                    ><i
                        class="fa-solid fa-folder-plus fa-2xl mr-2"
                        style="position: absolute; top: 45px; left: 30px"
                    ></i>CREANT UN
                    EXPEDIENT NOU</b-button
                >
            </section>
        </b-modal>
        <b-modal
            id="modal-expedient-details"
            ref="modal-expedient-details"
            v-if="call.expedientSelected.id != -1"
            centered
            title="Detalls del expedient"
            size="m"
            hide-footer
            modal-class="zoominout"
        >
            <div class="d-flex w-100 my-1 justify-content-between">
                <h5 class="mb-1">{{ call.expedientSelected.codi }}</h5>
            </div>
            <p class="mb-1">
                <small class="d-block"><span class="font-weight-bold">Data i hora creació: </span>{{ formatDate(call.expedientSelected.data_creacio) }}</small>
                <small class="d-block"><span class="font-weight-bold">Estat: </span>{{ call.expedientSelected.estat_expedient.estat }} <i :class="getStateColor(call.expedientSelected.estats_expedients_id)"></i></small>
                <small class="d-block"><span class="font-weight-bold">Fora catalunya: </span>{{ checkIsOutCatalunya(call.expedientSelected.cartes_trucades) ? "Si" : "No" }}</small>
                <small class="d-block"><span class="font-weight-bold">Localització: </span>{{ getLocationIncident(call.expedientSelected.cartes_trucades) }}</small>
                <small class="d-block"><span class="font-weight-bold">Tipificació: </span>{{ getTypesIncidentsUnique(call.expedientSelected.cartes_trucades) }}</small>
            </p>
            <button
                type="button"
                class="btn btn-sm btn-secondary mt-2"
                title="Veure trucades del expedient"
                v-b-modal.modal-call-expedients
                @click="loadModalExpedient(call.expedientSelected)"
            >
                <i class="fa-solid fa-phone"></i>
                <b-badge class="ml-2" variant="light">{{ call.expedientSelected.cartes_trucades.length }}<span class="sr-only">trucades</span></b-badge>
            </button>
        </b-modal>
        <b-modal
            v-show="!isLoading"
            id="modal-call-expedients"
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
                v-show="!isLoading"
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

            <div v-show="isLoading" class="loading-spinner">
                <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
            </div>
        </b-modal>
        <b-modal
            id="modal-info-calls"
            class="modal-info-calls"
            :title="modalTitle"
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
                    v-show="!isLoading2"
                >
                </b-table>
            </div>

            <div v-show="isLoading2" class="loading-spinner">
                <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
            </div>
        </b-modal>
    </div>
</template>

<script>
import moment from "moment";

export default {
    props: ["callback", "call"],
    mounted() {
        this.user = window.Vue.prototype.$user;
        this.checkFieldsCall();
        this.$refs["modal-summary"].show();
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
            isLoading: false,
            isLoading2: false,
            errorMessage: "",
            showTrucades: true,
            modal_agencia: true,
            request: null,
            codeExpedients: "",
            expedients: [],
            modalTitle: "",
            agencies_contactades: [],
            user: {},
        };
    },
    methods: {
        checkFieldsCall() {
            if (!this.call.phone.trim())
                this.errorMessage += "<li>Nº Telèfon</li>";
            if (!this.call.commonNote.trim())
                this.errorMessage += "<li>Nota comuna</li>";

            if (this.call.outCatalunya)
                if (!this.call.provinceOutOfCatalunya.trim())
                    this.errorMessage +=
                        "<li>Província (Fora de catalunya)</li>";

            if (
                !this.call.outCatalunya &&
                !this.call.provinceSelected &&
                !this.call.regionSelected &&
                !this.call.townSelected
            )
                this.errorMessage +=
                    "<li>La província, comarca o municipi (Dins de catalunya)</li>";

            if (
                this.call.typeLocationSelected &&
                this.call.typeLocationSelected.id == 2
            )
                if (!this.call.singularPoint.trim())
                    this.errorMessage += "<li>El nom del punt singular</li>";

            if (!this.call.typeLocationSelected)
                this.errorMessage += "<li>El tipus de localització</li>";

            if (!this.call.typeIncidentSelected)
                this.errorMessage += "<li>Tipus incident</li>";
            if (!this.call.incidentSelected)
                this.errorMessage += "<li>Incident</li>";

            if (this.errorMessage)
                this.errorMessage = `Els següents camps són obligatoris!<ul class="m-0">${this.errorMessage}</ul>`;
        },
        handleHiddenModal() {
            this.$emit("hiddenModal");
        },
        dismissModalSummary() {
            this.$refs["modal-summary"].hide();
        },
        dismissModalConfirm() {
            this.$refs["modal-confirm-discard"].hide();
        },
        discardCall() {
            this.callback();
        },
        formatDate(value) {
            return moment(value).locale("es").format("DD/MM/yyyy HH:mm:ss")
        },
        checkIsOutCatalunya(calls) {
            return calls.find(c => c.fora_catalunya == "1");
        },
        getTypesIncidentsUnique(calls) {
            return calls.map(c => c.incident.descripcio).filter((value, index, self) => self.indexOf(value) === index).join(', ');
        },
        getLocationIncident(calls) {
            if (calls.length > 0)
            {
                let town = "MUNICIPI NO INDICAT";
                let province = "PROVINCIA NO INDICAT";
                let description_location = "DESCRIPCIÓ NO INDICAT";

                if (!this.checkIsOutCatalunya(calls)) {
                    let call = calls.find(c => c.municipi);

                    if (call) town = call.municipi.nom;

                    call = calls.find(c => c.provincia);

                    if (call) province = call.provincia.nom;

                    call = calls.find(c => c.descripcio_localitzacio);

                    if (call) description_location = call.descripcio_localitzacio;

                    return `${description_location} (${province}, ${town})`;
                } else {
                    let call = calls.find(c => c.descripcio_localitzacio);

                    if (call) {
                        if (call.descripcio_localitzacio.split(";").length == 2) {
                            province = call.descripcio_localitzacio.split(";")[0];
                            town =  call.descripcio_localitzacio.split(";")[1];

                            return `${province}, ${town}`;
                        } else if (call.descripcio_localitzacio.split(";").length == 1) {
                            province = call.descripcio_localitzacio.split(";")[0];

                            return `${province}`;
                        } else {
                            return `${description_location}`;
                        }
                    } else {
                        return `${description_location}`;
                    }
                }
            }
            else
            {
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
        loadModalExpedient(expedient) {
            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            this.expedient = expedient;
            this.showTrucades = true;
            this.isLoading = true;

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
                    me.isLoading = false;
                });
        },
        loadInfo(name, nota_comuna_descripcio) {
            this.name_call = name;
            this.description_call = nota_comuna_descripcio;
            this.isLoading2 = false;
            this.modal_agencia = false;
            this.modalTitle = "Nota comuna";
        },
        loadAgencies(agencies, call) {
            this.call = call;
            this.agencies_contactades = agencies;
            this.isLoading2 = false;
            this.modal_agencia = true;
            this.modalTitle = "Agències contactades";
        },
        saveCall() {},
    },
    computed: {
        getFormatCrono() {
            return moment.utc(this.call.cronoSeconds * 1000).format("HH:mm:ss");
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
.loading-spinner {
    width: 100%;
    text-align: center;
    justify-content: center;
}
::v-deep .modal .modal-huge {
    max-width: 80%;
    width: 80%;
}
section {
    padding: 1rem 1rem;
}
footer {
    border-top: 1px solid #dee2e6;
    padding: 1rem 1rem;
}
.text-pre-wrap {
    white-space: pre-wrap;
}
</style>
