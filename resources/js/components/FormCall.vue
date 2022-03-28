<template>
  <div class="row">
    <div class="col">
      <b-tabs content-class="mt-3 " class="m-top-20">
        <!-- TAB Nota comuna -->
        <b-tab title="Nota comuna" active>
          <div class="col-12 center p-0">
            <div class="form-floating user-select-none">
              <b-form-input id="name" type="text" placeholder="Nom" required />
              <label class="user-select-none" for="input-name"> Nom </label>
            </div>

            <div class="form-floating user-select-none">
              <b-form-input
                id="surname"
                type="text"
                placeholder="Cognom"
                required
              />
              <label class="user-select-none" for="input-surname">
                Cognom
              </label>
            </div>

            <div class="form-floating user-select-none">
              <b-form-input
                id="origin"
                type="text"
                placeholder="Nacionalitat"
                required
              />
              <label class="user-select-none" for="input-origin">
                Nacionalitat
              </label>
            </div>

            <div class="form-floating user-select-none">
              <b-form-input
                id="relation"
                type="text"
                placeholder="Relació amb l'incident"
                required
              />
              <label class="user-select-none" for="input-relation">
                Relació amb l'incident
              </label>
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
          <div class="row center">
            <div>
              <label class="user-select-none" for="input-comarca">
                Fecha:
              </label>
              <b-input
                id="type-data"
                type="date"
                class="form-control"
              ></b-input>
            </div>

            <div>
              <label class="user-select-none" for="input-comarca">
                Hora:
              </label>
              <b-input
                id="type-time"
                type="time"
                class="form-control"
              ></b-input>
            </div>
          </div>
          <div class="row center mt-3">
            <div class="form-floating user-select-none">
              <b-form-select
                v-model="provinceSelected"
                :options="allProvinces"
                class="mb-3"
              >
              </b-form-select>
            </div>
            <div>
              <b-form-select
                v-model="regionSelected"
                :options="allRegions"
                class="mb-3"
              >
              </b-form-select>
            </div>
            <div>
              <b-form-select
                v-model="townSelected"
                :options="allTowns"
                class="mb-3"
              >
              </b-form-select>
            </div>
          </div>

          <div class="row center mt-3">
            <div>
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
            <div
              v-show="locationType == 1"
              class="form-floating user-select-none"
            >
              <b-form-input
                id="name"
                type="text"
                placeholder="Nombre"
                required
              />
              <label class="user-select-none" for="input-name"> Nombre </label>
              <b-form-input
                id="number"
                type="number"
                placeholder="Numero"
                required
              />
              <label class="user-select-none" for="input-number">
                Numero
              </label>
              <b-form-input
                id="flour"
                type="text"
                placeholder="Piso"
                required
              />
              <label class="user-select-none" for="input-flour"> Piso </label>
            </div>
            <div
              v-show="locationType == 2"
              class="form-floating user-select-none"
            >
              <b-form-input
                id="address"
                type="text"
                placeholder="Adreça"
                required
              />
              <label class="user-select-none" for="input-address">
                Entitat
              </label>
            </div>

            <div
              v-show="locationType == 3"
              class="form-floating user-select-none"
            >
              <b-form-input
                id="direction"
                type="text"
                placeholder="Adreça"
                required
              />
              <label class="user-select-none" for="input-direction">
                Sentido
              </label>
              <b-input-group class="mt-3">
                <template #append>
                  <b-input-group-text id="input-point"
                    ><strong class="text-danger">Km</strong></b-input-group-text
                  >
                </template>
                <b-form-input></b-form-input>
              </b-input-group>
            </div>
          </div>
          <div class="col-12 p-0 mt-3">
            <div class="form-floating user-select-none">
              <b-form-textarea
                id="information"
                class="mt-3 h-150"
                type="text"
                placeholder="Informació rellevant"
                required
                rows="5"
              />
              <label class="user-select-none" for="input-information">
                Informació rellevant
              </label>
            </div>
          </div>
        </b-tab>
        <!-- TAB Tipificació de l'emergència -->
        <b-tab title="Tipificació de l'emergència">
            <div>
              <label class="user-select-none" for="input-comarca">
                Tipus incident
              </label>
              <b-form-select
                v-model="typeSelected"
                :options="allTypes"
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
  },
  data() {
    return {
      //ComboBox
      selected: null,
      provinceSelected: null,
      regionSelected: null,
      townSelected: null,
      typeSelected: null,
      provincias: [],
      regions: [],
      towns: [],
      types: [],
      locationType: "",
      description: "",
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
