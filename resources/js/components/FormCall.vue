<template>
    <div class="container-fluid p-0">
        <b-tabs fill lazy>
            <!-- TAB Identificació de la trucada -->
            <b-tab title="Identificació de la trucada" active>
                <div class="row">
                    <div class="col-lg-12 my-2">
                        <div class="autocomplete w-100">
                            <div class="form-floating user-select-none">
                                <b-form-input
                                    type="tel"
                                    id="input-phone"
                                    v-model="call.phone"
                                    :state="!isEmpty(call.phone)"
                                    @input="handleInputPhone"
                                    aria-describedby="input-phone-feedback"
                                    placeholder="Nº telèfon"
                                    required
                                />
                                <label
                                    class="user-select-none"
                                    for="input-phone"
                                    >Nº telèfon</label
                                >
                                <b-form-invalid-feedback
                                    id="input-phone-feedback"
                                    >{{
                                        isEmpty(call.phone)
                                            ? "Aquest camp és obligatori"
                                            : inputPhoneFeedback
                                    }}.</b-form-invalid-feedback
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 my-2">
                        <div class="form-floating user-select-none">
                            <b-form-input
                                type="text"
                                id="input-firstname-caller"
                                v-model="call.firstNameCaller"
                                placeholder="Nom del trucant"
                            />
                            <label
                                class="user-select-none"
                                for="input-firstname-caller"
                                >Nom del trucant</label
                            >
                        </div>
                    </div>
                    <div class="col-lg-6 my-2">
                        <div class="form-floating user-select-none">
                            <b-form-input
                                type="text"
                                id="input-lastname-caller"
                                v-model="call.lastNameCaller"
                                placeholder="Cognom del trucant"
                            />
                            <label
                                class="user-select-none"
                                for="input-lastname-caller"
                                >Cognom del trucant</label
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
                                id="input-relation-incident"
                                v-model="call.relationIncident"
                                placeholder="Relació amb l'incident"
                            />
                            <label
                                class="user-select-none"
                                for="input-relation-incident"
                                >Relació amb l'incident</label
                            >
                        </div>
                    </div>
                </div>
            </b-tab>
            <!-- TAB Descripció de l'incident-->
            <b-tab title="Descripció de l'incident">
                <div class="row">
                    <div class="col-lg-12 my-2">
                        <div class="form-floating user-select-none">
                            <b-form-textarea
                                type="text"
                                class="h-150"
                                id="input-description"
                                v-model="call.description"
                                placeholder="Relació incident"
                                aria-describedby="input-description-feedback"
                                :state="!isEmpty(call.description)"
                                rows="5"
                                required
                            />
                            <label
                                class="user-select-none"
                                for="input-description"
                            >
                                Descripció incident
                            </label>
                            <b-form-invalid-feedback
                                id="input-description-feedback"
                            >
                                Aquest camp és obligatori.
                            </b-form-invalid-feedback>
                        </div>
                    </div>
                </div>
            </b-tab>
            <!-- TAB Localització de la trucada -->
            <b-tab title="Localització de la trucada">
                <div class="row">
                    <div class="col-lg-12 my-2">
                        <b-form-checkbox
                            id="checkbox-1"
                            v-model="outCatalunya"
                            name="checkbox-1"
                        >
                            Fora de Cataluña
                        </b-form-checkbox>
                    </div>
                </div>
                <div class="row" v-if="outCatalunya">
                    <div class="col-lg-12 my-2">
                        <div class="form-floating user-select-none">
                            <b-form-input
                                type="text"
                                id="input-province"
                                v-model="call.province"
                                placeholder="Provincia"
                            />
                            <label class="user-select-none" for="input-province"
                                >Provincia</label
                            >
                        </div>
                    </div>
                </div>
                <div class="row" v-else>
                    <div class="col-lg-4 my-2">
                        <div class="form-floating user-select-none">
                            <b-form-select
                                type="text"
                                id="select-provinces"
                                :options="allProvinces"
                                v-model="provinceSelected"
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
                                type="text"
                                id="select-regions"
                                :options="allRegions"
                                v-model="regionSelected"
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
                                type="text"
                                id="select-towns"
                                :options="allTowns"
                                v-model="townSelected"
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
                                type="text"
                                id="select-towns"
                                :options="allTypesLocations"
                                v-model="typeLocationSelected"
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
                    <div class="col-lg-12 my-2" id="wrapLocationType1" v-if="call.locationType == 1">
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
                    <div class="col-lg-12 my-2" id="wrapLocationType2" v-else-if="call.locationType == 2">
                        <div class="form-floating user-select-none">
                            <b-form-input
                                type="text"
                                id="input-singular-point"
                                v-model="call.singularPoint"
                                aria-describedby="input-singular-point-feedback"
                                :state="!isEmpty(call.singularPoint)"
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
                        v-show="locationType == 3"
                        class="form-floating user-select-none"
                    ></div>-->
                    <!-- OPTION 4 CARRETERA -->
                    <div class="col-lg-12 my-2" id="wrapLocationType3" v-else-if="call.locationType == 4">
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
                                type="text"
                                id="select-type-incident"
                                :options="allTypesIncidents"
                                v-model="typeIncidentSelected"
                                placeholder="Tipus incident"
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
                        </div>
                    </div>
                    <div class="col-lg-6 my-2">
                        <div class="form-floating user-select-none">
                            <b-form-select
                                type="text"
                                id="select-incident"
                                :options="allIncidents"
                                v-model="incidentSelected"
                                placeholder="Incident"
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
                        </div>
                    </div>
                </div>
            </b-tab>
            <!-- TAB Agencies -->
            <b-tab title="Agencies">
                <map-box></map-box>
            </b-tab>
        </b-tabs>
    </div>
</template>

<script>
export default {
    mounted() {
        this.getProvinces();
        this.getRegions();
        this.getTowns();
        this.getLocationsTypes();
        this.getTypesIncidents();
        this.getIncidents();
    },
    beforeDestroy() {
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
                firstNameCaller: "",
                lastNameCaller: "",
                provenance: "",
                relationIncident: "",
                description: "",
                province: "",

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

                locationType: "",
            },
            requestProvinces: null,
            requestRegions: null,
            requestTowns: null,
            requestLocationsTypes: null,
            requestTypesIncidents: null,
            requestIncidents: null,

            inputPhoneFeedback: "",
            provinceSelected: null,
            regionSelected: null,
            townSelected: null,
            typeLocationSelected: null,
            typeIncidentSelected: null,
            incidentSelected: null,
            outCatalunya: false,
            provincias: [],
            regions: [],
            towns: [],
            typesLocations: [],
            typesIncidents: [],
            incidents: [],

            relation: "",
        };
    },
    computed: {
        actualRegion() {
            return this.regions.find(
                (region) => region.id == this.regionSelected
            );
        },
        actualTown() {
            return this.towns.find((town) => town.id == this.townSelected);
        },
        allProvinces() {
            let provinces = this.provincias.map((province) => {
                return {
                    value: province.id,
                    text: province.nom,
                };
            });

            return provinces;
        },
        allRegions() {
            let regions = this.regions;

            if (this.provinceSelected) {
                regions = regions.filter(
                    (region) => region.provincies_id == this.provinceSelected
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
            let towns = this.towns;

            if (this.regionSelected) {
                towns = towns.filter(
                    (town) => town.comarques_id == this.regionSelected
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
            if (!this.typeLocationSelected) this.typeLocationSelected = 3;

            this.call.locationType = this.typeLocationSelected;

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
        allIncidents() {
            return this.incidents.map((incident) => {
                return {
                    value: incident.id,
                    text: incident.descripcio,
                };
            });
        },
    },
    watch: {
        regionSelected() {
            if (this.regionSelected) {
                this.provinceSelected = this.actualRegion.provincies_id;
            } else {
                this.provinceSelected = null;
            }
        },
        townSelected() {
            if (this.townSelected) {
                this.regionSelected = this.actualTown.comarques_id;
                this.provinceSelected = this.actualRegion.provincies_id;
            } else {
                this.regionSelected = null;
                this.provinceSelected = null;
            }
        },
    },
    methods: {
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
                    me.provincias = response.data;
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
        handleInputPhone() {
            if (this.call.phone) {
            }
        },
        isEmpty(value) {
            return value.trim().length === 0;
        },
    },
};
</script>

<!-- STYLES -->
<style scoped>
.h-150 {
    height: 150px !important;
}
.center {
    display: flex;
    justify-content: space-between;
}
.autocomplete {
    /*the container must be positioned relative:*/
    position: relative;
    display: inline-block;
}
.autocomplete-items {
    position: absolute;
    border: 1px solid #d4d4d4;
    border-bottom: none;
    border-top: none;
    z-index: 99;
    /*position the autocomplete items to be the same width as the container:*/
    top: 100%;
    left: 0;
    right: 0;
}
.autocomplete-items div {
    padding: 10px;
    cursor: pointer;
    background-color: #fff;
    border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
    /*when hovering an item:*/
    background-color: #e9e9e9;
}
.autocomplete-active {
    /*when navigating through the items using the arrow keys:*/
    background-color: DodgerBlue !important;
    color: #ffffff;
}
</style>
