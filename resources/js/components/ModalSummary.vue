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
                v-if="errorInputsMessage"
                show
                variant="danger"
                v-html="errorInputsMessage"
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
                        ><i>Nº telèfon {{ !call.phoneSelected && call.phone.trim() ? '(Nou telèfon)' : ''}}</i></label
                    >
                    <label>{{ call.phone }}</label>
                    <b-form-checkbox
                        v-if="!call.phoneSelected && call.phone.trim()"
                        v-model="createNewPhone"
                        class="font-weight-bold text-danger"
                    >
                        Guardar el Nº telèfon
                    </b-form-checkbox>
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
                    <label>{{ call.outCatalunya ? "Si" : "No" }}</label>
                </div>
            </div>
            <div class="row" v-if="!call.outCatalunya">
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
            <hr />
            <h5 class="font-weight-bold my-2">
                <u>AGENCIES</u>
            </h5>
            <div v-if="call.agenciesSelected.length" class="row">
                <div class="col-md-12 d-block" v-for="agencia in call.agenciesSelected" :key="agencia.id">
                    <b-form-input
                        v-model="agencia.nom"
                        disabled
                        plaintext
                    ></b-form-input>
                </div>
            </div>
            <div v-else class="row">
                <label class="col-md-12">No s'ha seleccionat cap agencia.</label>
            </div>
            <template #modal-footer>
                <b-button
                    v-b-modal.modal-confirm-discard
                    variant="danger"
                    class="font-weight-bold mr-2 btn-half"
                    ><i class="fa-solid fa-x mr-2"></i>DESCARTAR
                    TRUCADA</b-button
                >
                <b-button
                    v-b-modal.modal-options
                    v-if="!errorInputsMessage"
                    variant="primary"
                    class="font-weight-bold ml-2 btn-half"
                    ><i class="fa-solid fa-floppy-disk mr-2"></i>GUARDAR
                    TRUCADA</b-button
                >
                <b-button
                    v-else
                    variant="primary"
                    class="font-weight-bold ml-2 btn-half"
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
                    class="font-weight-bold mr-2 btn-half"
                    @click="dismissModalConfirm"
                    >CANCEL·LAR</b-button
                >
                <b-button
                    variant="danger"
                    class="font-weight-bold ml-2 btn-half"
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
            <section class="d-flex p-0 mt-2">
                <b-button
                    variant="danger"
                    class="font-weight-bold mr-2 btn-half"
                    v-b-modal.modal-expedients-call
                    style="position: relative;height: 100px; max-width: 50%;padding-left: 75px;font-size: 13px;"
                    ><i
                        class="fa-solid fa-folder-open fa-2xl mr-2"
                        style="position: absolute; top: 45px; left: 30px"
                    ></i
                    >ASSOCIANT UN EXPEDIENT EXISTENT</b-button
                >
                <b-button
                    variant="primary"
                    class="font-weight-bold ml-2 btn-half"
                    @click="saveCall(true)"
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
            id="modal-expedients-call"
            ref="modal-expedients-call"
            centered
            title="Llistat d'expedients relacionat"
            size="m"
            modal-class="zoominout"
            header-class="d-block"
            footer-class="d-block"
        >
            <template #modal-header>
                <div class="d-flex justify-content-between">
                    <h6 class="font-weight-bold my-auto">
                        Llistat d'expedients relacionat
                    </h6>
                    <i id="expedients-call-help-modal" class="fa-solid fa-circle-question my-auto ml-2"></i>
                    <b-tooltip target="expedients-call-help-modal" triggers="hover">
                        Els criteris que es fan fer servir per trobar un expedient relacionat són:
                        <ul class="text-justify">
                            <li>Trucades del mateix telèfon.</li>
                            <li>Trucades de la mateixa localització<br/>(Si es fora catalunya, mateixa provincia o municipi).</li>
                            <li>Expedients amb la mateixa tipificació.</li>
                        </ul>
                        <span class="font-weight-bold">ELS EXPEDIENTS AMB EL ESTAT 'TANCAT' NO ES MOSTRARÁ EN LA LLISTA.</span>
                    </b-tooltip>
                    <button type="button" aria-label="Close" class="close" @click="hideModalExpedientsCall">×</button>
                </div>
            </template>
            <template #modal-footer>
                <b-button
                    variant="primary"
                    class="font-weight-bold w-100"
                    @click="saveCall(false)"
                    :disabled="!(call.expedientSelected && call.expedientSelected.id != -1)"
                    ><i class="fa-solid fa-circle-plus mr-2"></i>
                    CREAR LA CARTA TRUCADA</b-button
                >
            </template>

            <expedients-call ref="expedientsCall" @finishFetchExpedientsCall="finishFetchExpedientsCall" @expedientSelected="expedientSelected" :expedientDefaultSelected="call.expedientSelected" :filterExpedientsCall="filterExpedientsCall" />
            <div class="d-flex justify-content-between mt-2">
                    <h6 class="font-weight-bold my-auto">
                        Última actualització:
                        {{ lastUpdateTimeExpedientsCall }}
                    </h6>
                    <button
                        class="btn btn-sm btn-warning my-auto"
                        title="Refrescar llista d'expedients"
                        @click="refreshListExpedientsCall"
                    >
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </button>
                </div>
        </b-modal>
        <b-modal
            id="modal-loading-save"
            ref="modal-loading-save"
            body-class="myModal"
            no-close-on-backdrop
            size="sm"
            modal-class="zoominout"
            hide-footer
            hide-header
            centered
        >
            <svg-vue v-if="isLoadingSave" icon="spinner" class="mx-auto my-auto" width="50" />
            <div v-else>
                <i v-if="errorSaveMessage" class="fas fa-exclamation-circle fa-2xl text-danger"></i>
                <i v-else class="fas fa-check-circle fa-2xl text-success"></i>
                <label v-if="errorSaveMessage" class="text-danger">{{ errorSaveMessage }}</label>
                <label v-else class="text-success">{{ correctSaveMessage }}</label>
            </div>
        </b-modal>
    </div>
</template>

<script>
import moment from 'moment';

export default {
    props: ["callback", "call", "phoneSelected", "filterExpedientsCall"],
    mounted() {
        this.checkFieldsCall();
        this.$refs["modal-summary"].show();
    },
    data() {
        return {
            errorInputsMessage: "",
            errorSaveMessage: "",
            correctSaveMessage: "",
            lastUpdateTimeExpedientsCall: "",
            createNewPhone: false,
            isLoadingSave: false,
        };
    },
    methods: {
        checkFieldsCall() {
            if (!this.call.phone.trim())
                this.errorInputsMessage += "<li>Nº Telèfon</li>";
            if (!this.call.commonNote.trim())
                this.errorInputsMessage += "<li>Nota comuna</li>";

            if (this.call.outCatalunya)
                if (!this.call.provinceOutOfCatalunya.trim())
                    this.errorInputsMessage +=
                        "<li>Província (Fora de catalunya)</li>";

            if (
                !this.call.outCatalunya &&
                !this.call.provinceSelected &&
                !this.call.regionSelected &&
                !this.call.townSelected
            )
                this.errorInputsMessage +=
                    "<li>La província, comarca o municipi (Dins de catalunya)</li>";

            if (
                this.call.typeLocationSelected &&
                this.call.typeLocationSelected.id == 2
            )
                if (!this.call.singularPoint.trim())
                    this.errorInputsMessage += "<li>El nom del punt singular</li>";

            if (!this.call.typeLocationSelected)
                this.errorInputsMessage += "<li>El tipus de localització</li>";

            if (!this.call.typeIncidentSelected)
                this.errorInputsMessage += "<li>Tipus incident</li>";
            if (!this.call.incidentSelected)
                this.errorInputsMessage += "<li>Incident</li>";

            if (this.errorInputsMessage)
                this.errorInputsMessage = `Els següents camps són obligatoris!<ul class="m-0">${this.errorInputsMessage}</ul>`;
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
        refreshListExpedientsCall() {
            this.$refs.expedientsCall.getExpedients(this.filterExpedientsCall);
        },
        finishFetchExpedientsCall() {
            this.lastUpdateTimeExpedientsCall = moment().locale("es").format("YYYY-MM-DD HH:mm:ss");           //.format("DD/MM/YYYY HH:mm:ss");
        },
        hideModalExpedientsCall() {
            this.$refs['modal-expedients-call'].hide();
        },
        expedientSelected(_expedientSelected) {
            this.call.expedientSelected = _expedientSelected;
        },
        saveCall(createNewExpedient) {
            if (createNewExpedient) {
                this.call.expedientCode = "EXP-" + moment().locale("es").format("DDMMyyyyHHmmssS");
            } else {
                if (!this.call.expedientSelected) return;
            }

            this.call.createNewExpedient = createNewExpedient;
            this.call.saveNewPhoneNumber = this.createNewPhone;
            this.call.user = window.Vue.prototype.$user;

            this.$refs['modal-loading-save'].show();

            this.errorSaveMessage = "";
            this.correctSaveMessage = "";
            this.isLoadingSave = true;

            let me = this;

            axios
                .post('api/cartes_trucades', this.call)
                .then((response) => {
                    if (response.status === 201) {
                        me.correctSaveMessage = "Guardat correctament."
                        setTimeout(() => {
                            me.callback();
                        }, 1500);
                    } else {
                        me.errorSaveMessage = "S'ha produït un error inesperat...";
                    }
                })
                .catch((error) => {
                    console.error(error);
                    me.errorSaveMessage = "S'ha produït un error inesperat...";
                })
                .finally(() => {
                    me.isLoadingSave = false;

                    setTimeout(() => this.$refs['modal-loading-save'].hide(), 3000);
                });
        },
    },
    computed: {
        getFormatCrono() {
            return moment.utc(this.call.cronoSeconds * 1000).format("HH:mm:ss");
        },
    },
};
</script>

<style scoped>
::v-deep .myModal {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
}
::v-deep .modal .modal-huge {
    max-width: 80%;
    width: 80%;
}
#expedients-call-help {
    font-size: 20px;
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
.btn-half {
    flex: 1;
}
</style>
