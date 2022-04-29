<template>
    <div class="container-fluid p-0">
        <form ref="formCall">
            <b-tabs fill lazy>
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
                                        @keydown.enter="handKeyUpEnterInputPhone"
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
                                    <small :class="`font-weight-bold  ${phoneSelected ? 'text-success' : 'text-danger'}`" v-if="!isEmptyOrNull(call.phone)">{{ phoneSelected ? 'Aquest telèfon està guardat.' : 'Aquest telèfon no està guardat.' }}</small>
                                    <b-form-invalid-feedback id="input-phone-feedback">
                                        Aquest camp és obligatori
                                    </b-form-invalid-feedback>
                                </div>
                                <b-list-group   ref="input-phone-autocomplete-items"
                                                class="input-autocomplete-items"
                                                @mouseover="isSelectingPhone = true"
                                                @mouseleave="isSelectingPhone = false"
                                                v-if="!phoneSelected && !isEmptyOrNull(call.phone) && isInputPhoneFocus || isSelectingPhone">
                                    <b-list-group-item disabled v-if="isLoadingPhones"><svg-vue icon="spinner" width="25"/></b-list-group-item>
                                    <b-list-group-item disabled v-else-if="!filterPhones.length">No hi ha cap coincidencia</b-list-group-item>
                                    <b-list-group-item v-else v-for="(phone, index) in filterPhones" role="button" @click="phoneSelected = phone" :active="index == 0" :key="phone.id" :data-id-phone="phone.id">{{ phone.telefon }}</b-list-group-item>
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
                                    v-model="call.townCallSelected"
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
                                <label class="user-select-none" for="select-towns-call"
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
                                    class="h-150"
                                    id="input-common-note"
                                    v-model="call.commonNote"
                                    placeholder="Nom i cognoms del trucant, relació e l’alertant amb l’incident, telèfon de contacte i descripció del fet"
                                    aria-describedby="input-common-note-feedback"
                                    :state="!isEmptyOrNull(call.commonNote)"
                                    rows="5"
                                    required
                                />
                                <label
                                    class="user-select-none"
                                    for="input-common-note"
                                >
                                    Nom i cognoms del trucant, relació e l’alertant amb l’incident, telèfon de contacte i descripció del fet
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
                                    placeholder="Provincia"
                                    :state="!isEmptyOrNull(call.provinceOutOfCatalunya)"
                                    aria-describedby="input-province-out-catalunya-feedback"
                                    required
                                />
                                <label class="user-select-none" for="input-province-out-catalunya"
                                    >Provincia</label
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
                                <label class="user-select-none" for="input-town-out-catalunya"
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
                                    v-model="call.provinceSelected"
                                    placeholder="Provincia"
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
                                    >Provincia</label
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-select
                                    id="select-regions"
                                    ref="select-regions"
                                    :options="allRegionsFiltered"
                                    v-model="call.regionSelected"
                                    placeholder="Comarca"
                                >
                                    <template #first>
                                        <b-form-select-option :value="null"
                                            >Seleccionar
                                            comarca</b-form-select-option
                                        >
                                    </template>
                                </b-form-select>
                                <label class="user-select-none" for="select-regions"
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
                                    v-model="call.townSelected"
                                    placeholder="Municipi"
                                >
                                    <template #first>
                                        <b-form-select-option :value="null"
                                            >Seleccionar
                                            municipi</b-form-select-option
                                        >
                                    </template>
                                </b-form-select>
                                <label class="user-select-none" for="select-towns"
                                    >Municipi</label
                                >
                            </div>
                        </div>
                        <div class="col-lg-12 my-2">
                            <div class="form-floating user-select-none">
                                <b-form-select
                                    id="select-towns"
                                    :options="allTypesLocations"
                                    v-model="call.typeLocationSelected"
                                    placeholder="Tipus localització"
                                >
                                    <!--<template #first>
                                    <b-form-select-option :value="null">Seleccionar tipus localització</b-form-select-option>
                                </template>-->
                                </b-form-select>
                                <label class="user-select-none" for="select-towns"
                                    >Tipus localització</label
                                >
                            </div>
                        </div>
                        <!-- OPTION 1 CARRERS -->
                        <div class="col-lg-12 my-2" v-if="call.typeLocationSelected == 1">
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
                        <div class="col-lg-12 my-2" v-else-if="call.typeLocationSelected == 2">
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
                                    for="input-singular-point">
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
                            v-show="typeLocationSelected == 3"
                            class="form-floating user-select-none"
                        ></div>-->
                        <!-- OPTION 4 CARRETERA -->
                        <div class="col-lg-12 my-2" v-else-if="call.typeLocationSelected == 4">
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
                                    class="h-150"
                                    placeholder="Informació rellevant de la localització"
                                    rows="5"
                                />
                                <label class="user-select-none" for="input-extra-information-street">
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
                                    v-model="call.typeIncidentSelected"
                                    placeholder="Tipus incident"
                                    aria-describedby="select-type-incident-feedback"
                                    :state="!isEmptyOrNull(call.typeIncidentSelected)"
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
                                    v-model="call.incidentSelected"
                                    placeholder="Incident"
                                    aria-describedby="select-incident-feedback"
                                    :state="!isEmptyOrNull(call.incidentSelected)"
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
                    <div class="row mt-2" v-if="incidentSelected">
                        <div class="col-lg-12 my-2">
                            <div class="d-block my-2">
                                <label class="font-weight-bold d-block"><u>INCIDENT SELECCIONAT:</u></label>
                                <small>{{ incidentSelected.descripcio }}</small>
                            </div>
                            <div class="d-block my-2">
                                <label class="font-weight-bold d-block"><u>DEFINICIÓ INCIDENT:</u></label>
                                <small>{{ incidentSelected.definicio }}</small>
                            </div>
                            <div class="d-block my-2">
                                <label class="font-weight-bold d-block"><u>INSTRUCCIONS INCIDENT:</u></label>
                                <small>{{ incidentSelected.instrucions }}</small>
                            </div>
                        </div>
                    </div>
                </b-tab>
                <!-- TAB Agencies -->
                <!--
                <b-tab title="Agencies">
                    <map-box :query="queryMapBox"></map-box>
                </b-tab>-->
            </b-tabs>
        </form>
        <modal-summary v-if="showSummaryModal" @hiddenModal="showSummaryModal = false" :callback="callback" :call="call"></modal-summary>
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
    },
    beforeDestroy() {
        if (this.requestPhones) this.requestPhones.cancel();
        if (this.requestProvinces) this.requestProvinces.cancel();
        if (this.requestRegions) this.requestRegions.cancel();
        if (this.requestTowns) this.requestTowns.cancel();
        if (this.requestLocationsTypes) this.requestLocationsTypes.cancel();
        if (this.requestTypesIncidents) this.requestTypesIncidents.cancel();
        if (this.requestIncidents) this.requestIncidents.cancel();
    },
    data() {
        return {
            call: {
                phone: "",
                townCallSelected: null,
                address: "",
                provenance: "",
                antecedents: "",

                commonNote: "",

                outCatalunya: false,

                provinceOutOfCatalunya: "",
                townOutOfCatalunya: "",

                typeStreet: "",
                nameStreet: "",
                numberStreet: "",
                numberStair: "",
                numberFloor: "",
                numberDoor: "",

                singularPoint: "",

                nameHighway: "",
                directionHighway: "",
                kmHighway: "",

                typeLocationSelected: null,

                typeIncidentSelected: null,
                incidentSelected: null,

                provinceSelected: null,
                regionSelected: null,
                townSelected: null,
            },
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
            incidentSelected: null,

            phones: [],
            phoneSelected: null,
            isLoadingPhones: false,
            isInputPhoneFocus: false,
            isSelectingPhone: false,
        };
    },
    computed: {
        filterPhones() {
            return this.phones.filter(phone => phone.telefon.startsWith(this.call.phone));
        },
        actualRegion() {
            return this.regions.find(
                (region) => region.id == this.call.regionSelected
            );
        },
        actualTown() {
            return this.towns.find((town) => town.id == this.call.townSelected);
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

            if (this.call.provinceSelected) {
                regions = regions.filter(
                    (region) => region.provincies_id == this.call.provinceSelected
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

            if (this.call.regionSelected) {
                towns = towns.filter(
                    (town) => town.comarques_id == this.call.regionSelected
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
            if (!this.call.typeLocationSelected) this.call.typeLocationSelected = 3;

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

            if (this.call.typeIncidentSelected) {
                let typeIncident = this.typesIncidents.find(typeIncident => typeIncident.id == this.call.typeIncidentSelected);

                if (typeIncident) {
                    incidents = incidents.filter(
                        (incident) => incident.classes_incidents_id == typeIncident.id
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
            return "Plaça espanya Barcelona 08014";
        }
    },
    watch: {
        'call.outCatalunya'(newValue) {
            if (newValue) {
                this.call.provinceSelected = null;
                this.call.regionSelected = null;
                this.call.townSelected = null;
            } else {
                this.call.provinceOutOfCatalunya = "";
                this.call.townOutOfCatalunya = "";
            }
        },
        'call.provinceSelected'(newValue, oldValue) {
            if (newValue != oldValue && this.$refs["select-provinces"].$el == document.activeElement) {
                this.call.regionSelected = null;
                this.call.townSelected = null;
            }
        },
        'call.regionSelected'(newValue, oldValue) {
            if (this.call.regionSelected) {
                this.call.provinceSelected = this.actualRegion.provincies_id;
            } else {
                if (newValue != oldValue && this.$refs["select-regions"].$el == document.activeElement) {
                    this.call.townSelected = null;
                }
            }
        },
        'call.townSelected'() {
            if (this.call.townSelected) {
                this.call.regionSelected = this.actualTown.comarques_id;
                this.call.provinceSelected = this.actualRegion.provincies_id;
            }
        },
        'call.typeIncidentSelected'(newValue, oldValue) {
            if (!this.call.typeIncidentSelected) {
                this.call.incidentSelected = null;
                this.incidentSelected = null;
            } else {
                if (newValue != oldValue && this.$refs["select-type-incident"].$el == document.activeElement) {
                    this.call.incidentSelected = null;
                    this.incidentSelected = null;
                }
            }
        },
        'call.incidentSelected'() {
            if (this.call.incidentSelected) {
                let incident = this.incidents.find(incident => incident.id == this.call.incidentSelected);

                if (incident) {
                    this.incidentSelected = incident;
                    this.call.typeIncidentSelected = this.typesIncidents.find(typeIncident => typeIncident.id == incident.classes_incidents_id).id;
                } else {
                    this.incidentSelected = null;
                }
            } else {
                if (this.$refs["select-incident"].$el == document.activeElement) this.call.typeIncidentSelected = null;

                this.incidentSelected = null;
            }
        },
        handleInputsFilterExpedientsCall() {
            this.filterExpedientsCall();
        },
        phoneSelected(newValue) {
            if (newValue) {
                this.call.phone = newValue.telefon;
                this.call.address = newValue.adreca;
                this.call.antecedents = newValue.antecedents;
            }
        }
    },
    methods: {
        submitFormCall(callback) {
            this.callback = callback;

            this.showSummaryModal = true;
        },
        filterExpedientsCall() {
            this.$emit('filterExpedientsCall', {
                phone: this.call.phone,
                incident: this.call.incidentSelected == null ? "" : this.call.incidentSelected,
                outCatalunya: this.call.outCatalunya,
                provinceOutOfCatalunya: this.call.provinceOutOfCatalunya,
                townOutOfCatalunya: this.call.townOutOfCatalunya,
                provinceSelected: this.call.provinceSelected == null ? "" : this.call.provinceSelected,
                townSelected: this.call.townSelected == null ? "" : this.call.townSelected,
            });
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
            let elementActive = this.$refs['input-phone-autocomplete-items'].querySelector(".list-group-item.active");

            if (elementActive) {
                let phoneSelected = this.filterPhones.find(phone => phone.id == elementActive.dataset.idPhone);

                if (phoneSelected) {
                    this.phoneSelected = phoneSelected;

                    this.$refs['input-phone'].blur();
                }
                else
                {
                    this.phoneSelected = null;
                }
            }
            else {
                this.phoneSelected = null;
                this.$refs['input-phone'].blur();
            }
        },
        selectPhoneList(direction) {
            let elementActive = this.$refs['input-phone-autocomplete-items'].querySelector(".list-group-item.active");

            if (elementActive) {
                switch(direction) {
                    case 'up':
                        if (elementActive.previousElementSibling && elementActive.previousElementSibling.classList.contains('list-group-item')) {
                            elementActive.classList.remove('active');
                            elementActive.previousElementSibling.classList.add('active');
                        }
                    case 'down':
                        if (elementActive.nextElementSibling && elementActive.nextElementSibling.classList.contains('list-group-item')) {
                            elementActive.classList.remove('active');
                            elementActive.nextElementSibling.classList.add('active');
                        }
                }
            }
        },
        handlePhoneInput() {
            let phoneExact = this.phones.find(phone => phone.telefon.toLowerCase() == this.call.phone.toLowerCase());

            if (phoneExact) {
                this.phoneSelected = phoneExact;
            } else {
                this.phoneSelected = null;
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
.h-150 {
    height: 150px !important;
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
