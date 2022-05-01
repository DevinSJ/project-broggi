<template>
    <div class="container-fluid p-0">
        <form ref="formCall" autocomplete="off">
            <b-tabs active-nav-item-class="bg-primary text-white" fill lazy>
                <!-- TAB Identificació de la trucada -->
                <b-tab title="Identificació de la trucada" active>
                    <div class="row">
                        <div class="col-lg-12 my-2">
                            <div class="input-autocomplete w-100">
                                <div class="form-floating user-select-none">
                                    <b-form-input
                                        type="tel"
                                        ref="input-phone"
                                        id="input-phone"
                                        v-model="call.phone"
                                        :state="!isEmptyOrNull(call.phone)"
                                        @focus="isInputPhoneFocus = true"
                                        @blur="isInputPhoneFocus = false"
                                        @input="handlePhoneInput()"
                                        @keydown.enter="
                                            handKeyUpEnterInputPhone
                                        "
                                        @keydown.up="selectPhoneList('up')"
                                        @keydown.down="selectPhoneList('down')"
                                        aria-describedby="input-phone-feedback"
                                        placeholder="Nº telèfon"
                                        required
                                    />
                                    <label
                                        class="user-select-none"
                                        for="input-phone"
                                        >Nº telèfon</label
                                    >
                                    <small
                                        :class="`font-weight-bold  ${
                                            call.phoneSelected
                                                ? 'text-success'
                                                : 'text-danger'
                                        }`"
                                        v-if="!isEmptyOrNull(call.phone)"
                                        >{{
                                            call.phoneSelected
                                                ? "Aquest telèfon està guardat"
                                                : "Aquest telèfon no està guardat"
                                        }}</small
                                    >
                                    <b-form-invalid-feedback
                                        id="input-phone-feedback"
                                    >
                                        Aquest camp és obligatori
                                    </b-form-invalid-feedback>
                                </div>
                                <b-list-group
                                    ref="input-phone-autocomplete-items"
                                    class="input-autocomplete-items"
                                    @mouseover="isSelectingPhone = true"
                                    @mouseleave="isSelectingPhone = false"
                                    v-if="
                                        (!call.phoneSelected &&
                                            !isEmptyOrNull(call.phone) &&
                                            isInputPhoneFocus) ||
                                        isSelectingPhone
                                    "
                                >
                                    <b-list-group-item
                                        disabled
                                        v-if="isLoadingPhones"
                                        ><svg-vue icon="spinner" width="25"
                                    /></b-list-group-item>
                                    <b-list-group-item
                                        disabled
                                        v-else-if="!filterPhones.length"
                                        >No hi ha cap
                                        coincidencia</b-list-group-item
                                    >
                                    <b-list-group-item
                                        v-else
                                        v-for="(phone, index) in filterPhones"
                                        role="button"
                                        @click="call.phoneSelected = phone"
                                        :active="index == 0"
                                        :key="phone.id"
                                        :data-id-phone="phone.id"
                                        >{{ phone.telefon }}</b-list-group-item
                                    >
                                </b-list-group>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-6 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-select
                                    ref="select-towns-call"
                                    id="select-towns-call"
                                    v-model="townCallSelectedId"
                                    :options="allTowns"
                                    placeholder="Municipi"
                                >
                                    <template #first>
                                        <b-form-select-option :value="null"
                                            >Seleccionar
                                            municipi</b-form-select-option
                                        >
                                    </template>
                                </b-form-select>
                                <label
                                    class="user-select-none"
                                    for="select-towns-call"
                                    >Municipi</label
                                >
                            </div>
                        </div>
                        <div class="col-lg-6 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-input
                                    type="text"
                                    id="input-address"
                                    v-model="call.address"
                                    placeholder="Adreça"
                                />
                                <label
                                    class="user-select-none"
                                    for="input-address"
                                    >Adreça</label
                                >
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-6 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-input
                                    type="text"
                                    id="input-provenance"
                                    v-model="call.provenance"
                                    placeholder="Procedència"
                                />
                                <label
                                    class="user-select-none"
                                    for="input-provenance"
                                    >Procedència</label
                                >
                            </div>
                        </div>
                        <div class="col-lg-6 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-input
                                    type="text"
                                    id="input-antecedents"
                                    v-model="call.antecedents"
                                    placeholder="Antecedents del telèfon"
                                />
                                <label
                                    class="user-select-none"
                                    for="input-antecedents"
                                    >Antecedents del telèfon</label
                                >
                            </div>
                        </div>
                    </div>
                </b-tab>
                <!-- TAB Nota comuna-->
                <b-tab title="Nota comuna">
                    <div class="row">
                        <div class="col-lg-12 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-textarea
                                    type="text"
                                    id="input-common-note"
                                    v-model="call.commonNote"
                                    placeholder="Nom i cognoms del trucant, relació de l’alertant amb l’incident, telèfon de contacte i descripció del fet"
                                    aria-describedby="input-common-note-feedback"
                                    :state="!isEmptyOrNull(call.commonNote)"
                                    rows="5"
                                    required
                                />
                                <label
                                    class="user-select-none"
                                    for="input-common-note"
                                >
                                    Nom i cognoms del trucant, relació de
                                    l’alertant amb l’incident, telèfon de
                                    contacte i descripció del fet
                                </label>
                                <b-form-invalid-feedback
                                    id="input-common-note-feedback"
                                >
                                    Aquest camp és obligatori.
                                </b-form-invalid-feedback>
                            </div>
                        </div>
                    </div>
                </b-tab>
                <!-- TAB Localització de l’emergència -->
                <b-tab title="Localització de l’emergència">
                    <div class="row">
                        <div class="col-lg-12 my-2">
                            <b-form-checkbox
                                id="check-out-catalunya"
                                v-model="call.outCatalunya"
                            >
                                Fora de Cataluña
                            </b-form-checkbox>
                        </div>
                    </div>
                    <div class="row" v-if="call.outCatalunya">
                        <div class="col-lg-6 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-input
                                    type="text"
                                    id="input-province-out-catalunya"
                                    v-model="call.provinceOutOfCatalunya"
                                    placeholder="Província"
                                    :state="
                                        !isEmptyOrNull(
                                            call.provinceOutOfCatalunya
                                        )
                                    "
                                    aria-describedby="input-province-out-catalunya-feedback"
                                    required
                                />
                                <label
                                    class="user-select-none"
                                    for="input-province-out-catalunya"
                                    >Província</label
                                >
                                <b-form-invalid-feedback
                                    id="input-province-out-catalunya-feedback"
                                >
                                    Aquest camp és obligatori.
                                </b-form-invalid-feedback>
                            </div>
                        </div>
                        <div class="col-lg-6 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-input
                                    type="text"
                                    id="input-town-out-catalunya"
                                    v-model="call.townOutOfCatalunya"
                                    placeholder="Municipi"
                                />
                                <label
                                    class="user-select-none"
                                    for="input-town-out-catalunya"
                                    >Municipi</label
                                >
                            </div>
                        </div>
                    </div>
                    <div class="row" v-else>
                        <div class="col-lg-4 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-select
                                    id="select-provinces"
                                    ref="select-provinces"
                                    :options="allProvinces"
                                    v-model="provinceSelectedId"
                                    placeholder="Província"
                                >
                                    <template #first>
                                        <b-form-select-option :value="null"
                                            >Seleccionar
                                            provincia</b-form-select-option
                                        >
                                    </template>
                                </b-form-select>
                                <label
                                    class="user-select-none"
                                    for="select-provinces"
                                    >Província</label
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-select
                                    id="select-regions"
                                    ref="select-regions"
                                    :options="allRegionsFiltered"
                                    v-model="regionSelectedId"
                                    placeholder="Comarca"
                                >
                                    <template #first>
                                        <b-form-select-option :value="null"
                                            >Seleccionar
                                            comarca</b-form-select-option
                                        >
                                    </template>
                                </b-form-select>
                                <label
                                    class="user-select-none"
                                    for="select-regions"
                                    >Comarca</label
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-select
                                    id="select-towns"
                                    ref="select-towns"
                                    :options="allTownsFiltered"
                                    v-model="townSelectedId"
                                    placeholder="Municipi"
                                >
                                    <template #first>
                                        <b-form-select-option :value="null"
                                            >Seleccionar
                                            municipi</b-form-select-option
                                        >
                                    </template>
                                </b-form-select>
                                <label
                                    class="user-select-none"
                                    for="select-towns"
                                    >Municipi</label
                                >
                            </div>
                        </div>
                        <div class="col-lg-12 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-select
                                    id="select-towns"
                                    :options="allTypesLocations"
                                    v-model="typeLocationSelectedId"
                                    :state="
                                        !isEmptyOrNull(
                                            call.typeLocationSelected
                                        )
                                    "
                                    aria-describedby="select-towns"
                                    placeholder="Tipus localització"
                                >
                                    <!--<template #first>
                                    <b-form-select-option :value="null">Seleccionar tipus localització</b-form-select-option>
                                </template>-->
                                </b-form-select>
                                <label
                                    class="user-select-none"
                                    for="select-towns"
                                    >Tipus localització</label
                                >
                                <b-form-invalid-feedback
                                    id="select-towns"
                                >
                                    Aquest camp és obligatori.
                                </b-form-invalid-feedback>
                            </div>
                        </div>
                        <!-- OPTION 1 CARRERS -->
                        <div
                            class="col-lg-12 my-2"
                            v-if="typeLocationSelectedId == 1"
                        >
                            <div class="row">
                                <div class="col-lg-4 my-2">
                                    <div class="form-floating user-select-none">
                                        <b-form-input
                                            type="text"
                                            id="input-type-street"
                                            v-model="call.typeStreet"
                                            placeholder="Tipus de via"
                                        />
                                        <label
                                            class="user-select-none"
                                            for="input-type-street"
                                            >Tipus de via</label
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4 my-2">
                                    <div class="form-floating user-select-none">
                                        <b-form-input
                                            type="text"
                                            id="input-name-street"
                                            v-model="call.nameStreet"
                                            placeholder="Nom del carrer"
                                        />
                                        <label
                                            class="user-select-none"
                                            for="input-name-street"
                                            >Nom del carrer</label
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4 my-2">
                                    <div class="form-floating user-select-none">
                                        <b-form-input
                                            type="text"
                                            id="input-number-street"
                                            v-model="call.numberStreet"
                                            placeholder="Número"
                                        />
                                        <label
                                            class="user-select-none"
                                            for="input-number-street"
                                            >Número</label
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 my-2">
                                    <div class="form-floating user-select-none">
                                        <b-form-input
                                            type="text"
                                            id="input-number-stair"
                                            v-model="call.numberStair"
                                            placeholder="Escala"
                                        />
                                        <label
                                            class="user-select-none"
                                            for="input-number-stair"
                                            >Escala</label
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4 my-2">
                                    <div class="form-floating user-select-none">
                                        <b-form-input
                                            type="text"
                                            id="input-number-floor"
                                            v-model="call.numberFloor"
                                            placeholder="Pis"
                                        />
                                        <label
                                            class="user-select-none"
                                            for="input-number-floor"
                                            >Pis</label
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4 my-2">
                                    <div class="form-floating user-select-none">
                                        <b-form-input
                                            type="text"
                                            id="input-number-door"
                                            v-model="call.numberDoor"
                                            placeholder="Porta"
                                        />
                                        <label
                                            class="user-select-none"
                                            for="input-number-door"
                                            >Porta</label
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- OPTION 2 PUNT SINGULAR -->
                        <div
                            class="col-lg-12 my-2"
                            v-else-if="typeLocationSelectedId == 2"
                        >
                            <div class="form-floating user-select-none">
                                <b-form-input
                                    type="text"
                                    id="input-singular-point"
                                    v-model="call.singularPoint"
                                    aria-describedby="input-singular-point-feedback"
                                    :state="!isEmptyOrNull(call.singularPoint)"
                                    placeholder="Nom del punt singular"
                                    required
                                />
                                <label
                                    class="user-select-none"
                                    for="input-singular-point"
                                >
                                    Nom del punt singular
                                </label>
                                <b-form-invalid-feedback
                                    id="input-singular-point-feedback"
                                >
                                    Aquest camp és obligatori.
                                </b-form-invalid-feedback>
                            </div>
                        </div>
                        <!-- OPTION 3 Entitat POBLACIÓ -->
                        <!--<div
                            v-show="typeLocationSelectedId == 3"
                            class="form-floating user-select-none"
                        ></div>-->
                        <!-- OPTION 4 CARRETERA -->
                        <div
                            class="col-lg-12 my-2"
                            v-else-if="typeLocationSelectedId == 4"
                        >
                            <div class="row">
                                <div class="col-lg-4 my-2">
                                    <div class="form-floating user-select-none">
                                        <b-form-input
                                            type="text"
                                            id="input-name-highway"
                                            v-model="call.nameHighway"
                                            placeholder="Nom de la carretera"
                                        />
                                        <label
                                            class="user-select-none"
                                            for="input-name-highway"
                                            >Nom de la carretera</label
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4 my-2">
                                    <div class="form-floating user-select-none">
                                        <b-form-input
                                            type="text"
                                            id="input-direction-highway"
                                            v-model="call.directionHighway"
                                            placeholder="Sentit de la carretera"
                                        />
                                        <label
                                            class="user-select-none"
                                            for="input-direction-highway"
                                            >Sentit de la carretera</label
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4 my-2">
                                    <div class="form-floating user-select-none">
                                        <b-form-input
                                            type="text"
                                            id="input-km-highway"
                                            v-model="call.kmHighway"
                                            placeholder="KM de la carretera"
                                        />
                                        <label
                                            class="user-select-none"
                                            for="input-km-highway"
                                            >KM de la carretera</label
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-textarea
                                    id="input-extra-information-street"
                                    type="text"
                                    v-model="call.extraInformationStreet"
                                    placeholder="Informació rellevant de la localització"
                                    rows="5"
                                />
                                <label
                                    class="user-select-none"
                                    for="input-extra-information-street"
                                >
                                    Informació rellevant de la localització
                                </label>
                            </div>
                        </div>
                    </div>
                </b-tab>
                <!-- TAB Tipificació de l'emergència -->
                <b-tab title="Tipificació de l'emergència">
                    <div class="row">
                        <div class="col-lg-6 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-select
                                    id="select-type-incident"
                                    ref="select-type-incident"
                                    :options="allTypesIncidents"
                                    v-model="typeIncidentSelectedId"
                                    placeholder="Tipus incident"
                                    aria-describedby="select-type-incident-feedback"
                                    :state="
                                        !isEmptyOrNull(
                                            call.typeIncidentSelected
                                        )
                                    "
                                    required
                                >
                                    <template #first>
                                        <b-form-select-option :value="null"
                                            >Seleccionar tipus
                                            incident</b-form-select-option
                                        >
                                    </template>
                                </b-form-select>
                                <label
                                    class="user-select-none"
                                    for="select-type-incident"
                                    >Tipus incident</label
                                >
                                <b-form-invalid-feedback
                                    id="select-type-incident-feedback"
                                >
                                    Aquest camp és obligatori.
                                </b-form-invalid-feedback>
                            </div>
                        </div>
                        <div class="col-lg-6 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-select
                                    id="select-incident"
                                    ref="select-incident"
                                    :options="allIncidentsFiltered"
                                    v-model="incidentSelectedId"
                                    placeholder="Incident"
                                    aria-describedby="select-incident-feedback"
                                    :state="
                                        !isEmptyOrNull(call.incidentSelected)
                                    "
                                    required
                                >
                                    <template #first>
                                        <b-form-select-option :value="null"
                                            >Seleccionar
                                            incident</b-form-select-option
                                        >
                                    </template>
                                </b-form-select>
                                <label
                                    class="user-select-none"
                                    for="select-incident"
                                    >Incident</label
                                >
                                <b-form-invalid-feedback
                                    id="select-incident-feedback"
                                >
                                    Aquest camp és obligatori.
                                </b-form-invalid-feedback>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2" v-if="incidentSelectedId">
                        <div class="col-lg-12 my-2">
                            <div class="d-block my-2">
                                <label class="font-weight-bold d-block"
                                    ><u>INCIDENT SELECCIONAT:</u></label
                                >
                                <small>{{
                                    call.incidentSelected.descripcio
                                }}</small>
                            </div>
                            <div class="d-block my-2">
                                <label class="font-weight-bold d-block"
                                    ><u>DEFINICIÓ INCIDENT:</u></label
                                >
                                <small>{{
                                    call.incidentSelected.definicio
                                }}</small>
                            </div>
                            <div class="d-block my-2">
                                <label class="font-weight-bold d-block"
                                    ><u>INSTRUCCIONS INCIDENT:</u></label
                                >
                                <small>{{
                                    call.incidentSelected.instrucions
                                }}</small>
                            </div>
                        </div>
                    </div>
                </b-tab>
                <!-- TAB Agencies -->
                <b-tab title="Agencies">
                    <map-box :query="queryMapBox" @changeAgenciesSelected="changeAgenciesSelected" :agenciesSelectedDefault="call.agenciesSelected" :isOutCatalunya="call.outCatalunya"></map-box>
                </b-tab>
            </b-tabs>
        </form>
        <modal-summary
            v-if="showSummaryModal"
            @hiddenModal="hiddenModalSummary"
            :callback="callback"
            :call="call"
            :filterExpedientsCall="filter"
        ></modal-summary>
    </div>
</template>

<script>
export default {
    mounted() {
        this.getPhones();
        this.getProvinces();
        this.getRegions();
        this.getTowns();
        this.getLocationsTypes();
        this.getTypesIncidents();
        this.getIncidents();

        window.Vue.prototype.$inCallForm = true;
    },
    created() {
        window.addEventListener("beforeunload", this.beforeWindowUnload);
    },
    beforeDestroy() {
        if (this.requestPhones) this.requestPhones.cancel();
        if (this.requestProvinces) this.requestProvinces.cancel();
        if (this.requestRegions) this.requestRegions.cancel();
        if (this.requestTowns) this.requestTowns.cancel();
        if (this.requestLocationsTypes) this.requestLocationsTypes.cancel();
        if (this.requestTypesIncidents) this.requestTypesIncidents.cancel();
        if (this.requestIncidents) this.requestIncidents.cancel();

        window.Vue.prototype.$inCallForm = false;

        window.removeEventListener("beforeunload", this.beforeWindowUnload);
    },
    data() {
        return {
            call: {
                codeCall: "",
                cronoSeconds: 0,
                callDateTimeIni: "",

                phone: "",
                phoneSelected: null,
                townCallSelected: null,
                address: "",
                provenance: "",
                antecedents: "",

                commonNote: "",

                outCatalunya: false,

                provinceOutOfCatalunya: "",
                townOutOfCatalunya: "",

                typeLocationSelected: null,

                typeStreet: "",
                nameStreet: "",
                numberStreet: "",
                numberStair: "",
                numberFloor: "",
                numberDoor: "",

                singularPoint: "",

                provinceSelected: null,
                regionSelected: null,
                townSelected: null,

                nameHighway: "",
                directionHighway: "",
                kmHighway: "",

                extraInformationStreet: "",

                typeIncidentSelected: null,
                incidentSelected: null,

                expedientSelected: {
                    id: -1
                },

                agenciesSelected: [],
            },
            townCallSelectedId: null,
            provinceSelectedId: null,
            regionSelectedId: null,
            townSelectedId: null,

            filter: null,

            typeLocationSelectedId: null,

            typeIncidentSelectedId: null,
            incidentSelectedId: null,

            showSummaryModal: false,
            callback: null,

            requestProvinces: null,
            requestRegions: null,
            requestTowns: null,
            requestLocationsTypes: null,
            requestTypesIncidents: null,
            requestIncidents: null,
            requestPhones: null,

            provinces: [],
            regions: [],
            towns: [],
            typesLocations: [],

            typesIncidents: [],
            incidents: [],
            incidentSelectedId: null,

            phones: [],
            isLoadingPhones: false,
            isInputPhoneFocus: false,
            isSelectingPhone: false,
        };
    },
    computed: {
        filterPhones() {
            return this.phones.filter((phone) =>
                phone.telefon.startsWith(this.call.phone)
            );
        },
        actualRegion() {
            return this.regions.find(
                (region) => region.id == this.regionSelectedId
            );
        },
        actualTown() {
            return this.towns.find(
                (town) => town.id == this.townSelectedId
            );
        },
        allProvinces() {
            let provinces = this.provinces.map((province) => {
                return {
                    value: province.id,
                    text: province.nom,
                };
            });

            return provinces;
        },
        allRegionsFiltered() {
            let regions = this.regions;

            if (this.provinceSelectedId) {
                regions = regions.filter(
                    (region) =>
                        region.provincies_id == this.provinceSelectedId
                );
            }

            regions = regions.map((region) => {
                return {
                    value: region.id,
                    text: region.nom,
                };
            });

            return regions;
        },
        allTowns() {
            return this.towns.map((town) => {
                return {
                    value: town.id,
                    text: town.nom,
                };
            });
        },
        allTownsFiltered() {
            let towns = this.towns;

            if (this.regionSelectedId) {
                towns = towns.filter(
                    (town) => town.comarques_id == this.regionSelectedId
                );
            }

            towns = towns.map((town) => {
                return {
                    value: town.id,
                    text: town.nom,
                };
            });

            return towns;
        },
        allTypesLocations() {
            return this.typesLocations.map((type) => {
                return {
                    value: type.id,
                    text: type.tipus,
                };
            });
        },
        allTypesIncidents() {
            return this.typesIncidents.map((type) => {
                return {
                    value: type.id,
                    text: type.descripcio,
                };
            });
        },
        allIncidentsFiltered() {
            let incidents = this.incidents;

            if (this.typeIncidentSelectedId) {
                let typeIncident = this.typesIncidents.find(
                    (typeIncident) =>
                        typeIncident.id == this.typeIncidentSelectedId
                );

                if (typeIncident) {
                    incidents = incidents.filter(
                        (incident) =>
                            incident.classes_incidents_id == typeIncident.id
                    );
                }
            }

            return incidents.map((incident) => {
                return {
                    value: incident.id,
                    text: incident.descripcio,
                };
            });
        },
        handleInputsFilterExpedientsCall() {
            return `${this.call.phone}|
                    ${this.call.incidentSelected}|
                    ${this.call.outCatalunya}|
                    ${this.call.provinceOutOfCatalunya}|
                    ${this.call.townOutOfCatalunya}|
                    ${this.call.provinceSelected}|
                    ${this.call.townSelected}`;
        },
        queryMapBox() {
            let query = "";

            let province = "";
            let region = "";
            let town = "";

            if (this.call.provinceSelected) province = this.call.provinceSelected.nom;
            if (this.call.regionSelected) region = this.call.regionSelected.nom;
            if (this.call.townSelected) town = this.call.townSelected.nom;

            if (this.call.typeLocationSelected) {
                switch(this.call.typeLocationSelected.id) {
                    case 1: //CARRERS
                        query = `${this.call.typeStreet} ${this.call.nameStreet} ${this.call.numberStreet}, ${province} ${region} ${town}`;

                        break;
                    case 2: //PUNT SINGULAR
                        query = `${this.call.singularPoint}, ${town}`;

                        break;
                    case 3: //ENTITAT POBLACIÓ
                        query = `${province} ${region} ${town}`;

                        break;
                    case 4: //CARRETERA
                        query = `${this.call.nameHighway}, ${province} ${region} ${town}`;

                        break;
                }
            }

            return query.trim();
        },
    },
    watch: {
        townCallSelectedId() {
            this.call.townCallSelected = this.towns.find(
                (t) => t.id == this.townCallSelectedId
            );
        },
        provinceSelectedId(newValue, oldValue) {
            this.call.provinceSelected = this.provinces.find(
                (t) => t.id == this.provinceSelectedId
            );

            if (
                newValue != oldValue &&
                this.$refs["select-provinces"].$el == document.activeElement
            ) {
                this.regionSelectedId = null;
                this.townSelectedId = null;
            }
        },
        regionSelectedId(newValue, oldValue) {
            this.call.regionSelected = this.regions.find(
                (t) => t.id == this.regionSelectedId
            );

            if (this.regionSelectedId) {
                if (
                    newValue != oldValue &&
                    this.$refs["select-regions"].$el == document.activeElement
                ) {
                    this.townSelectedId = null;
                }

                this.provinceSelectedId = this.actualRegion.provincies_id;
            } else {
                if (
                    newValue != oldValue &&
                    this.$refs["select-regions"].$el == document.activeElement
                ) {
                    this.townSelectedId = null;
                }
            }
        },
        townSelectedId() {
            this.call.townSelected = this.towns.find(
                (t) => t.id == this.townSelectedId
            );

            if (this.townSelectedId) {
                this.regionSelectedId = this.actualTown.comarques_id;
                this.provinceSelectedId = this.actualRegion.provincies_id;
            }
        },
        typeLocationSelectedId() {
            this.call.typeLocationSelected = this.typesLocations.find(
                (t) => t.id == this.typeLocationSelectedId
            );
        },
        typeIncidentSelectedId(newValue, oldValue) {
            this.call.typeIncidentSelected = this.typesIncidents.find(
                (t) => t.id == this.typeIncidentSelectedId
            );

            if (!this.typeIncidentSelectedId) {
                this.incidentSelectedId = null;
            } else {
                if (
                    newValue != oldValue &&
                    this.$refs["select-type-incident"].$el ==
                        document.activeElement
                ) {
                    this.incidentSelectedId = null;
                }
            }
        },
        incidentSelectedId(newValue, oldValue) {
            this.call.incidentSelected = this.incidents.find(
                (t) => t.id == this.incidentSelectedId
            );

            if (this.incidentSelectedId) {
                let incident = this.incidents.find(
                    (incident) => incident.id == this.incidentSelectedId
                );

                if (incident) {
                    this.incidentSelected = incident;
                    this.typeIncidentSelectedId = this.typesIncidents.find(
                        (typeIncident) =>
                            typeIncident.id == incident.classes_incidents_id
                    ).id;
                } else {
                    this.incidentSelected = null;
                }
            } else {
                this.incidentSelected = null;
            }
        },
        "call.outCatalunya"(newValue) {
            if (newValue) {
                this.provinceSelectedId = null;
                this.regionSelectedId = null;
                this.townSelectedId = null;
            } else {
                this.call.provinceOutOfCatalunya = "";
                this.call.townOutOfCatalunya = "";
            }
        },
        handleInputsFilterExpedientsCall() {
            this.filterExpedientsCall();
        },
        "call.phoneSelected"(newValue) {
            if (newValue) {
                this.call.phone = newValue.telefon;
                this.call.address = newValue.adreca;
                this.call.antecedents = newValue.antecedents;
            }
        },
        "call.expedientSelected"(newValue) {
            this.$emit('changeExpedientSelected', newValue);
        }
    },
    methods: {
        confirmStay() {
            return !window.confirm(
                "Do you really want to leave? you have unsaved changes!"
            );
        },
        beforeWindowUnload(e) {
            if (this.confirmStay()) {
                // Cancel the event
                e.preventDefault();
                // Chrome requires returnValue to be set
                e.returnValue = "";
            }
        },
        changeAgenciesSelected(agenciesSelected) {
            this.call.agenciesSelected = agenciesSelected;
        },
        hiddenModalSummary() {
            this.$emit("resumeCrono");
            this.showSummaryModal = false;
        },
        addExpedientSelected(expedientSelected) {
            this.call.expedientSelected = expedientSelected;
        },
        submitFormCall(callback, codeCall, cronoSeconds, callDateTimeIni) {
            this.callback = callback;
            this.call.codeCall = codeCall;
            this.call.cronoSeconds = cronoSeconds;
            this.call.callDateTimeIni = callDateTimeIni;
            this.showSummaryModal = true;
        },
        filterExpedientsCall() {
            this.filter = {
                phone: this.call.phone,
                incident:
                    this.incidentSelectedId == null
                        ? ""
                        : this.incidentSelectedId,
                outCatalunya: this.call.outCatalunya,
                provinceOutOfCatalunya: this.call.provinceOutOfCatalunya,
                townOutOfCatalunya: this.call.townOutOfCatalunya,
                provinceSelected:
                    this.provinceSelectedId == null
                        ? ""
                        : this.provinceSelectedId,
                townSelected:
                    this.townSelectedId == null
                        ? ""
                        : this.townSelectedId,
            };

            this.$emit("filterExpedientsCall", this.filter);
        },
        getPhones() {
            if (this.requestPhones) this.requestPhones.cancel();

            let axiosSource = axios.CancelToken.source();
            this.requestPhones = { cancel: axiosSource.cancel };

            this.isLoadingPhones = true;

            let me = this;
            axios
                .get(`/api/phones`, {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.phones = response.data;
                })
                .catch(function (error) {
                    if (!axios.isCancel(error)) {
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.requestPhones = null;
                    me.isLoadingPhones = false;
                });
        },
        getProvinces() {
            if (this.requestProvinces) this.requestProvinces.cancel();

            let axiosSource = axios.CancelToken.source();
            this.requestProvinces = { cancel: axiosSource.cancel };

            let me = this;
            axios
                .get("/api/provinces", {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.provinces = response.data;
                })
                .catch(function (error) {
                    if (!axios.isCancel(error)) {
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.requestProvinces = null;
                });
        },
        getRegions() {
            if (this.requestRegions) this.requestRegions.cancel();

            let axiosSource = axios.CancelToken.source();
            this.requestRegions = { cancel: axiosSource.cancel };

            let me = this;
            axios
                .get("/api/regions", {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.regions = response.data;
                })
                .catch(function (error) {
                    if (!axios.isCancel(error)) {
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.requestRegions = null;
                });
        },
        getTowns() {
            if (this.requestTowns) this.requestTowns.cancel();

            let axiosSource = axios.CancelToken.source();
            this.requestTowns = { cancel: axiosSource.cancel };

            let me = this;

            axios
                .get("/api/towns", {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.towns = response.data;
                })
                .catch(function (error) {
                    if (!axios.isCancel(error)) {
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.requestTowns = null;
                });
        },
        getLocationsTypes() {
            if (this.requestLocationsTypes) this.requestLocationsTypes.cancel();

            let axiosSource = axios.CancelToken.source();
            this.requestLocationsTypes = { cancel: axiosSource.cancel };

            let me = this;
            axios
                .get("/api/locations_types", {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.typesLocations = response.data;

                    if (!me.typeLocationSelectedId)
                        me.typeLocationSelectedId = 3;
                })
                .catch(function (error) {
                    if (!axios.isCancel(error)) {
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.requestLocationsTypes = null;
                });
        },
        getTypesIncidents() {
            if (this.requestTypesIncidents) this.requestTypesIncidents.cancel();

            let axiosSource = axios.CancelToken.source();
            this.requestTypesIncidents = { cancel: axiosSource.cancel };

            let me = this;
            axios
                .get("/api/types_incidents", {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.typesIncidents = response.data;
                })
                .catch(function (error) {
                    if (!axios.isCancel(error)) {
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.requestTypesIncidents = null;
                });
        },
        getIncidents() {
            if (this.requestIncidents) this.requestIncidents.cancel();

            let axiosSource = axios.CancelToken.source();
            this.requestIncidents = { cancel: axiosSource.cancel };

            let me = this;
            axios
                .get("/api/incidents", {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.incidents = response.data;
                })
                .catch(function (error) {
                    if (!axios.isCancel(error)) {
                        console.error(error);
                    }
                })
                .finally(() => {
                    me.requestIncidents = null;
                });
        },
        handKeyUpEnterInputPhone() {
            let elementActive = this.$refs[
                "input-phone-autocomplete-items"
            ].querySelector(".list-group-item.active");

            if (elementActive) {
                let phone = this.filterPhones.find(
                    (phone) => phone.id == elementActive.dataset.idPhone
                );

                if (phone) {
                    this.call.phoneSelected = phone;

                    this.$refs["input-phone"].blur();
                } else {
                    this.call.phoneSelected = null;
                }
            } else {
                this.call.phoneSelected = null;
                this.$refs["input-phone"].blur();
            }
        },
        selectPhoneList(direction) {
            let elementActive = this.$refs[
                "input-phone-autocomplete-items"
            ].querySelector(".list-group-item.active");

            if (elementActive) {
                switch (direction) {
                    case "up":
                        if (
                            elementActive.previousElementSibling &&
                            elementActive.previousElementSibling.classList.contains(
                                "list-group-item"
                            )
                        ) {
                            elementActive.classList.remove("active");
                            elementActive.previousElementSibling.classList.add(
                                "active"
                            );
                        }
                    case "down":
                        if (
                            elementActive.nextElementSibling &&
                            elementActive.nextElementSibling.classList.contains(
                                "list-group-item"
                            )
                        ) {
                            elementActive.classList.remove("active");
                            elementActive.nextElementSibling.classList.add(
                                "active"
                            );
                        }
                }
            }
        },
        handlePhoneInput() {
            let phoneExact = this.phones.find(
                (phone) =>
                    phone.telefon.toLowerCase() == this.call.phone.toLowerCase()
            );

            if (phoneExact) {
                this.call.phoneSelected = phoneExact;
            } else {
                this.call.phoneSelected = null;
            }
        },
        isEmptyOrNull(value) {
            if (value == null) return true;

            return value.toString().trim().length === 0;
        },
    },
};
</script>

<!-- STYLES -->
<style scoped>
small {
    font-size: 90%;
}
.center {
    display: flex;
    justify-content: space-between;
}
.input-autocomplete {
    position: relative;
}
.input-autocomplete-items {
    position: absolute;
    margin-top: 5px;
    z-index: 9999;
    width: 100%;
    max-width: 300px;
}
.input-autocomplete-items > .list-group-item {
    padding: 5px 10px;
    text-align: center;
}
.list-group-item:hover:not(.active) {
    background-color: #b5eaf0;
}
</style>
