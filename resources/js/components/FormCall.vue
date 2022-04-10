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
                                <label class="user-select-none" for="input-phone">Nº telèfon</label>
                                <b-form-invalid-feedback
                                    id="input-phone-feedback"
                                >{{ isEmpty(call.phone) ? "Aquest camp és obligatori" : inputPhoneFeedback }}.</b-form-invalid-feedback>
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
                                v-model="call.firstnameCaller"
                                placeholder="Nom del trucant"
                            />
                            <label class="user-select-none" for="input-firstname-caller">Nom del trucant</label>
                        </div>
                    </div>
                    <div class="col-lg-6 my-2">
                        <div class="form-floating user-select-none">
                            <b-form-input
                                type="text"
                                id="input-lastname-caller"
                                v-model="call.lastnameCaller"
                                placeholder="Cognom del trucant"
                            />
                            <label class="user-select-none" for="input-lastname-caller">Cognom del trucant</label>
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
                            <label class="user-select-none" for="input-provenance">Procedència</label>
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
                            <label class="user-select-none" for="input-relation-incident">Relació amb l'incident</label>
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
                            <label class="user-select-none" for="input-description">
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
                            v-model="outCataluyna"
                            name="checkbox-1"
                        >
                            Fora de Cataluña
                        </b-form-checkbox>
                    </div>
                </div>
                <div class="row" v-if="outCataluyna">
                    <div class="col-lg-12 my-2">
                        <div class="form-floating user-select-none">
                            <b-form-input
                                type="text"
                                id="input-province"
                                v-model="call.province"
                                placeholder="Provincia"
                            />
                            <label class="user-select-none" for="input-province">Provincia</label>
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
                                    >Seleccionar provincia</b-form-select-option
                                >
                            </template>
                            </b-form-select>
                            <label class="user-select-none" for="select-provinces">Provincia</label>
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
                                    >Seleccionar comarca</b-form-select-option
                                >
                            </template>
                            </b-form-select>
                            <label class="user-select-none" for="select-regions">Comarca</label>
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
                                    >Seleccionar municipi</b-form-select-option
                                >
                            </template>
                            </b-form-select>
                            <label class="user-select-none" for="select-towns">Municipi</label>
                        </div>
                    </div>
                </div>
                <div class="row" v-if="!outCataluyna">
                    <div class="col-lg-12 my-2">
                        <div class="form-floating user-select-none">
                            <b-form-select
                                type="text"
                                id="select-towns"
                                :options="allTypes"
                                v-model="typeSelected"
                                placeholder="Tipus localització"
                            >
                            <template #first>
                                <b-form-select-option :value="null">Seleccionar tipus localització</b-form-select-option>
                            </template>
                            </b-form-select>
                            <label class="user-select-none" for="select-towns">Tipus localització</label>
                        </div>
                    </div>
                    <!-- OPTION 1 CARRERS -->
                    <div class="col-12" v-show="locationType == 1">
                        <div class="row justify-content-around">
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Tipus de via:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="street"
                                        placeholder="tipus"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Nom:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="nameStreet"
                                        placeholder="nom"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Número:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="numberStreet"
                                        placeholder="número"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                        </div>

                        <div class="row justify-content-around">
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Tipus:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="street"
                                        placeholder="tipus"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Pis:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="flour"
                                        placeholder="pis"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Porta:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="door"
                                        placeholder="porta"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                        </div>
                    </div>
                    <!-- OPTION 2 PUNT SINGULAR -->
                    <div class="col-12" v-show="locationType == 2">
                        <div class="row justify-content-around">
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Nom:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="pointSingular"
                                        placeholder="nom"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                        </div>
                    </div>
                    <!-- OPTION 3 Entitat POBLACIO -->
                    <div
                        v-show="locationType == 3"
                        class="form-floating user-select-none"
                    ></div>
                    <!-- OPTION 4 CERRETERA -->
                    <div class="col-12" v-show="locationType == 4">
                        <div class="row justify-content-around">
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Nom:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="nameHighway"
                                        placeholder="nom"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Sentit:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="directionHighway"
                                        placeholder="sentit"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Km:"
                                    label-for="input-2"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="numberHighway"
                                        placeholder="km"
                                        required
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 mt-3">
                    <div class="form-floating user-select-none">
                        <b-form-textarea
                            id="information"
                            class="h-150"
                            type="text"
                            placeholder="Informació rellevant de la localització"
                            required
                            rows="5"
                        />
                        <label class="user-select-none" for="input-information">
                            Informació rellevant de la localització
                        </label>
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
                                    >Seleccionar tipus incident</b-form-select-option
                                >
                            </template>
                            </b-form-select>
                            <label class="user-select-none" for="select-type-incident">Tipus incident</label>
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
                                    >Seleccionar incident</b-form-select-option
                                >
                            </template>
                            </b-form-select>
                            <label class="user-select-none" for="select-incident">Incident</label>
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
        this.getProvincias();
        this.getRegions();
        this.getTowns();
        this.getLocationsTypes();
        this.getTypeIncidents();
        this.getIncidents();
    },
    data() {
        return {
            call: {
                phone: "",
                firstnameCaller: "",
                lastnameCaller: "",
                provenance: "",
                relationIncident: "",
                description: "",
                province: "",
            },
            inputPhoneFeedback: "",
            provinceSelected: null,
            regionSelected: null,
            townSelected: null,
            typeSelected: null,
            typeIncidentSelected: null,
            incidentSelected: null,
            outCataluyna: false,
            provincias: [],
            regions: [],
            towns: [],
            types: [],
            typesIncidents: [],
            incidents: [],

            street: "",
            relation: "",
            nameStreet: "",
            numberStreet: "",
            locationType: "",
            street: "",
            flour: "",
            door: "",
            pointSingular: "",
            nameHighway: "",
            directionHighway: "",
            numberHighway: "",
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
        allTypes() {
            this.locationType = this.typeSelected;

            return this.types.map((tipo) => {
                return {
                    value: tipo.id,
                    text: tipo.tipus,
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
        getProvincias() {
            let me = this;
            axios
                .get("/api/provinces")
                .then((response) => {
                    me.provincias = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getRegions() {
            let me = this;
            axios
                .get("/api/regions")
                .then((response) => {
                    me.regions = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getTowns() {
            let me = this;
            axios
                .get("/api/towns")
                .then((response) => {
                    me.towns = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getLocationsTypes() {
            let me = this;
            axios
                .get("/api/locations_types")
                .then((response) => {
                    me.types = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getTypeIncidents() {
            let me = this;
            axios
                .get("/api/types_incidents")
                .then((response) => {
                    me.typesIncidents = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getIncidents() {
            let me = this;
            axios
                .get("/api/incidents")
                .then((response) => {
                    me.incidents = response.data;
                })
                .catch((error) => {
                    console.log(error);
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
