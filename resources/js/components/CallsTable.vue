<template>
  <div>
    <b-card class="p-3 card-container">
      <b-table
        v-if="!isLoading"
        striped
        hover
        small
        thead-class="thead-dark"
        :items="calls"
        :fields="fields"
      >
        <template #cell(see_call)="data">
          <div>
            <button
              type="button"
              class="btn btn-sm button-edit"
              title="Veure dades"
              v-b-modal.modal-calls
              @click="loadCallInfo(data.item.id)"
            >
              <i class="fa-solid fa-eye"></i>
            </button>
          </div>
        </template>
      </b-table>

      <div v-else class="loading-spinner">
        <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
      </div>
    </b-card>

    <!-- Modal -->
    <b-modal
      id="modal-calls"
      class="modal-calls"
      title="Dades de la trucada"
      size="huge"
      ok-only
    >
      <div>
        <b-tabs content-class="mt-3" fill>
          <b-tab title="Nota comuna" active>
            <div class="col-12 row mt-3 justify-content-between">
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Codi trucada:"
                  label-for="input-2"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.codi_trucada"
                    disabled
                    required
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Duració de trucada:"
                  label-for="input-2"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.temps_trucada"
                    disabled
                    required
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Data de la trucada:"
                  label-for="input-2"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.data_hora"
                    disabled
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
                    v-model="call.nom_trucada"
                    disabled
                    required
                  ></b-form-input>
                </b-form-group>
              </div>
            </div>
            <div class="col-12 p-0">
              <div class="form-floating user-select-none">
                <b-form-textarea
                  id="description"
                  v-model="call.nota_comuna_descripcio"
                  class="mt-3 h-150"
                  type="text"
                  required
                  disabled
                  rows="5"
                />
                <label class="user-select-none" for="input-relation">
                  Descripció incident
                </label>
              </div>
            </div>
          </b-tab>

          <b-tab title="Localització de la trucada">
            <div class="col-12 row mt-3 justify-content-between">
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Provincia:"
                  label-for="input-2"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.provincia.nom"
                    disabled
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Comarca:"
                  label-for="input-2"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.municipi.comarca.nom"
                    disabled
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Municipi:"
                  label-for="input-2"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.municipi.nom"
                    disabled
                    required
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Tipus de localització:"
                  label-for="input-2"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.tipo_localitzacio.tipus"
                    disabled
                    required
                  ></b-form-input>
                </b-form-group>
              </div>
            </div>
            <div class="col-12 p-0">
              <div class="form-floating user-select-none">
                <b-form-textarea
                  id="description"
                  v-model="call.descripcio_localitzacio"
                  class="mt-3 h-150"
                  type="text"
                  required
                  disabled
                  rows="5"
                />
                <label class="user-select-none" for="input-relation">
                  Informació rellevant de la localització
                </label>
              </div>
            </div>
          </b-tab>
          <b-tab title="Dades de l'incident"
            ><p>Tab amb les dades generals de la trucada</p></b-tab
          >
        </b-tabs>
      </div>
    </b-modal>
  </div>
</template>

<script>
export default {
  mounted() {
    document.title = "Trucades - Broggi";
    this.getCalls(true);
    this.user = window.Vue.prototype.$user;
  },
  data() {
    return {
      isLoading: true,
      user: {},
      fields: [
        {
          key: "codi_trucada",
          label: "Codi trucada",
          sortable: true,
          tdClass: "centered-text-class",
          thClass: "codi-th-column",
        },
        {
          key: "telefon",
          label: "Telèfon",
          tdClass: "centered-text-class",
          thClass: "telf-th-column",
        },
        {
          key: "data_hora",
          label: "Data",
          sortable: true,
          tdClass: "centered-text-class",
          thClass: "data-th-column",
        },
        {
          key: "expedient.codi",
          label: "Codi Expedient",
          sortable: true,
          tdClass: "centered-text-class",
          thClass: "codi-exp-th-column",
        },
        {
          key: "see_call",
          label: "Més dades",
          tdClass: "centered-text-class",
          thClass: "edit-th-column",
        },
      ],
      calls: {},
      call: {
          provincia: '',
          municipi: {
              comarca: {}
          },
          tipo_localitzacio: ''
      },

    };
  },
  methods: {
    getCalls(firstTime) {
      firstTime == true ? (this.isLoading = true) : (this.isLoading = false);

      let me = this;
      axios
        .get("/api/cartestrucades/")
        .then((response) => {
          me.calls = response.data;
        })
        .catch((error) => {
          console.log(error);
        })
        .finally(() => (this.isLoading = false));
    },
    loadCallInfo(call_id) {
      let currentCall = this.calls.filter((call) => call.id == call_id);
      this.call = currentCall[0];
    },
  },
};
</script>

<style scoped>
.card-container {
  background-color: white;
  border: 1px;
  box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
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

.loading-spinner {
  width: 100%;
  text-align: center;
  justify-content: center;
}

/* CLASSES TABLA */
::v-deep .centered-text-class {
  text-align: center;
  vertical-align: middle;
}

::v-deep .codi-th-column {
  text-align: center;
  width: 5%;
  vertical-align: middle;
}

::v-deep .telf-th-column {
  text-align: center;
  vertical-align: middle;
  width: 5%;
}

::v-deep .data-th-column {
  text-align: center;
  vertical-align: middle;
  width: 20%;
}

::v-deep .codi-exp-th-column {
  text-align: center;
  vertical-align: middle;
  width: 10%;
}

::v-deep .edit-th-column {
  text-align: center;
  vertical-align: middle;
  width: 10%;
}

@media (min-width: 992px) {
  ::v-deep .modal .modal-huge {
    max-width: 90% !important;
    width: 90% !important;
  }
}

.div-expedient-estate {
  width: 150px;
  padding-top: 30px;
}

::v-deep .modal-body {
  padding: 30px !important;
}

::v-deep .select-agency {
  width: 100%;
  text-align: center;
}

/* CSS FILTROS */
.leyenda {
  display: flex;
  align-items: center;
  text-align: center;
  vertical-align: middle;
  justify-content: space-around;
}

.col-filtrar {
  display: flex;
  justify-content: flex-end;
}

.show-card {
  background-color: white;
  border: 1px;
  box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}

::v-deep .card_body {
  padding: 1rem;
  padding-inline: 2.25rem;
}

.btn-estat {
  background: transparent;
  color: black;
  border: 0px;
}

::v-deep .leyenda .focus {
  box-shadow: 0 0 0 0 !important;
}

::v-deep .leyenda .active {
  background: transparent !important;
  color: black !important;
  box-shadow: 0 0 0 0.1rem black !important;
}
</style>
