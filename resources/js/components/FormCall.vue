<template>
  <div class="row">
    <div class="col">
      <b-tabs content-class="mt-3 " class="m-top-20">
        <!-- TAB Nota comuna -->
        <b-tab title="Nota comuna" active>
          <div class="col-12 row mt-3 justify-content-around">
            <div>
              <b-form-group id="input-group-2" label="Nom:" label-for="input-2">
                <b-form-input
                  id="input-2"
                  v-model="name"
                  placeholder="nom"
                  required
                ></b-form-input>
              </b-form-group>
            </div>
            <div>
              <b-form-group
                id="input-group-2"
                label="Cognom:"
                label-for="input-2"
              >
                <b-form-input
                  id="input-2"
                  v-model="carrer"
                  placeholder="surname"
                  required
                ></b-form-input>
              </b-form-group>
            </div>
            <div>
              <b-form-group
                id="input-group-2"
                label="Nacionalitat:"
                label-for="input-2"
              >
                <b-form-input
                  id="input-2"
                  v-model="nationality"
                  placeholder="nacionalitat"
                  required
                ></b-form-input>
              </b-form-group>
            </div>
            <div>
              <b-form-group
                id="input-group-2"
                label="Relació amb l'incident:"
                label-for="input-2"
              >
                <b-form-input
                  id="input-2"
                  v-model="relation"
                  placeholder="Relació amb l'incident:"
                  required
                ></b-form-input>
              </b-form-group>
            </div>
          </div>
          <div class="col-12 p-0">
            <div class="form-floating user-select-none">
              <b-form-textarea
                id="description"
                v-model="description"
                class="mt-3 h-150"
                type="text"
                placeholder="Relació incident"
                required
                :state="validationDescription"
                rows="5"
              />
              <label class="user-select-none" for="input-relation">
                Descripció incident
              </label>
            </div>
          </div>
        </b-tab>
        <!-- TAB Identificació / Localització de la trucada -->
        <b-tab title="Identificació / Localització de la trucada">
          <div class="row">
            <b-form-checkbox
              id="checkbox-1"
              v-model="outCataluyna"
              name="checkbox-1"
            >
              Fora de Catalyuña
            </b-form-checkbox>
          </div>
          <div class="row mt-3" v-show="outCataluyna">
            <b-form-group
              id="input-group-2"
              label="Provincia:"
              label-for="input-2"
            >
              <b-form-input
                id="input-2"
                placeholder="Provincia"
                required
              ></b-form-input>
            </b-form-group>
          </div>
          <div class="row center mt-3" v-show="!outCataluyna">
            <div>
              <label class="user-select-none">Provincia: </label>
              <b-form-select
                v-model="provinceSelected"
                :options="allProvinces"
                class="mb-3"
              >
              </b-form-select>
            </div>
            <div>
              <label class="user-select-none">Comarca: </label>
              <b-form-select
                v-model="regionSelected"
                :options="allRegions"
                class="mb-3"
              >
              </b-form-select>
            </div>
            <div>
              <label class="user-select-none">Municipi: </label>
              <b-form-select
                v-model="townSelected"
                :options="allTowns"
                class="mb-3"
              >
              </b-form-select>
            </div>
          </div>

          <div class="row center mt-3" v-show="!outCataluyna">
            <div>
              <label class="user-select-none">Tipus localització: </label>
              <b-form-select
                v-model="typeSelected"
                :options="allTypes"
                class="mb-3"
              >
                <template #first>
                  <b-form-select-option :value="null"
                    >Tipus localització</b-form-select-option
                  >
                </template>
              </b-form-select>
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
                      v-model="carrer"
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
                class="mt-3 h-150"
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
          <div>
            <label class="user-select-none"> Tipus incident </label>
            <b-form-select
              v-model="typeIncidentSelected"
              :options="allTypesIncidents"
              class="mb-3"
            >
              <template #first>
                <b-form-select-option :value="null"
                  >Select</b-form-select-option
                >
              </template>
            </b-form-select>

            <label class="user-select-none"> Incident </label>
            <b-form-select
              v-model="incidentSelected"
              :options="allIncidents"
              class="mb-3"
            >
              <template #first>
                <b-form-select-option :value="null"
                  >Select</b-form-select-option
                >
              </template>
            </b-form-select>
          </div>
        </b-tab>
        <b-tab title="Agencies" lazy>
          <map-box></map-box>
        </b-tab>
      </b-tabs>
    </div>
  </div>
</template>

<script>

export default {

  mounted() {
    document.title = "Trucada - Broggi";
    this.getProvincias();
    this.getRegions();
    this.getTowns();
    this.getType();
    this.getTypeIncidents();
    this.getIncidents();
    this.getAgencies();
  },
  data() {
    return {
      selected: null,
      provinceSelected: null,
      regionSelected: null,
      townSelected: null,
      typeSelected: null,
      typeIncidentSelected: null,
      incidentSelected: null,
      outCataluyna: false,
      agenciaSelected: null,
      provincias: [],
      regions: [],
      towns: [],
      types: [],
      typesIncidents: [],
      incidents: [],
      agencies: [],
      name: "",
      carrer: "",
      nationality: "",
      relation: "",
      nameStreet: "",
      numberStreet: "",
      locationType: "",
      description: "",
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
    validationDescription() {
      return this.description !== "";
    },
    actualRegion() {
      return this.regions.find((region) => region.id == this.regionSelected);
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

      provinces.unshift({
        value: null,
        text: "select",
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

      regions.unshift({
        value: null,
        text: "select",
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

      towns.unshift({
        value: null,
        text: "select",
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
    allAgencies() {
      return this.agencies.map((agencia) => {
        return {
          value: agencia.id,
          text: agencia.nom,
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
    getType() {
      let me = this;
      axios
        .get("/api/LocationsTypes")
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
          console.log(incidents);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    getAgencies() {
      let me = this;
      axios
        .get("/api/agencies")
        .then((response) => {
          me.agencies = response.data;
          console.log(incidents);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<!-- STYLES -->
<style scoped>
.form-floating > .form-control,
.form-floating > .form-select {
  height: 40px;
}

.m-top-20 {
  margin-top: 20px;
}
.h-150 {
  height: 150px !important;
}
.center {
  display: flex;
  justify-content: space-between;
}
.p-0 {
  padding: 0px;
}
</style>
