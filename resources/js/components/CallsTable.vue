<template>
<<<<<<< HEAD
  <div>
      <div class="mb-2">
      <!--Panel filtrado-->
      <b-card class="show-card" body-class="card_body">
        <b-row class="text-center">
          <b-col cols="3"> </b-col>
          <b-col cols="9" class="col-filtrar">
            <b-form inline class="justify-content-end">
              <label class="mr-sm-2" for="filtre-codi">Codi de trucada</label>
              <b-form-input
                name="filtre-codi"
                id="filtre-codi"
                v-model="filtre.call_code"
                class="mb-2 mr-sm-2 mb-sm-0 form-control-sm"
                placeholder="Exemple: CA-..."
              ></b-form-input>
              <label class="mr-sm-2" for="filtre-codi">Codi de l'expedient</label>
              <b-form-input
                name="filtre-codi"
                id="filtre-codi"
                v-model="filtre.exp_code"
                class="mb-2 mr-sm-2 mb-sm-0 form-control-sm"
                placeholder="Exemple: EXP-..."
              ></b-form-input>
              <b-button variant="info" class="btn-sm"
                ><i class="fa-solid fa-filter"></i> Filtrar</b-button
              >
              <b-button class="btn-sm" variant="secondary ml-2" @click="getCalls(false)">
                <i class="fa-solid fa-magnifying-glass"></i>
                Mostrar tots</b-button
              >
            </b-form>
          </b-col>
        </b-row>
      </b-card>
    </div>

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
=======
    <div>
        <div class="mb-2">
            <!--Panel filtrado-->
            <b-card class="show-card" body-class="card_body">
                <b-row class="text-center">
                    <b-col cols="3"> </b-col>
                    <b-col cols="9" class="col-filtrar">
                        <b-form inline class="justify-content-end">
                            <label class="mr-sm-2" for="filtre-codi"
                                >Codi de trucada</label
                            >
                            <b-form-input
                                name="filtre-codi"
                                id="filtre-codi"
                                v-model="filtre.call_code"
                                class="mb-2 mr-sm-2 mb-sm-0 form-control-sm"
                                placeholder="Exemple: CA-..."
                            ></b-form-input>
                            <label class="mr-sm-2" for="filtre-codi"
                                >Codi de l'expedient</label
                            >
                            <b-form-input
                                name="filtre-codi"
                                id="filtre-codi"
                                v-model="filtre.exp_code"
                                class="mb-2 mr-sm-2 mb-sm-0 form-control-sm"
                                placeholder="Exemple: EXP-..."
                            ></b-form-input>
                            <b-button variant="info" class="btn-sm"
                                ><i class="fa-solid fa-filter"></i>
                                Filtrar</b-button
                            >
                            <b-button
                                class="btn-sm"
                                variant="secondary ml-2"
                                @click="getCalls(false)"
                            >
                                <i class="fa-solid fa-magnifying-glass"></i>
                                Mostrar tots</b-button
                            >
                        </b-form>
                    </b-col>
                </b-row>
            </b-card>
        </div>
>>>>>>> feffc9e7a76c1eed78253e8ec8b8bb23c1f3ea4c

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

<<<<<<< HEAD
    <!-- Modal -->
    <b-modal
      id="modal-calls"
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
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.codi_trucada"
                    disabled
                    required
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Duració de trucada:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.temps_trucada"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Data de la trucada:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.data_hora"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Nom:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.nom_trucada"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
            </div>
            <div class="col-12 p-0">
              <div class="form-floating user-select-none">
                <b-form-textarea
                  id="description"
                  v-model="call.nota_comuna_descripcio"
                  class="mt-3 h-100 text-area-disabled"
                  type="text"
                  rows="5"
                  no-auto-shrink
                  no-resize
                  disabled
                />
                <label
                  class="user-select-none font-weight-bold"
                  for="input-relation"
                >
                  Descripció de l'incident
                </label>
              </div>
=======
            <div v-else class="loading-spinner">
                <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
>>>>>>> feffc9e7a76c1eed78253e8ec8b8bb23c1f3ea4c
            </div>
        </b-card>

<<<<<<< HEAD
          <b-tab title="Localització de la trucada">
            <div class="col-12 row mt-3 justify-content-between">
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Provincia:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.provincia.nom"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Comarca:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.municipi.comarca.nom"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Municipi:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.municipi.nom"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Tipus de localització:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.tipo_localitzacio.tipus"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
            </div>
            <div class="col-12 p-0">
              <b-form-group
                  id="input-group-2"
                  label="Adreça de la trucada:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.adreca_trucada"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
            </div>
            <div class="col-12 p-0">
              <b-form-group
                  id="input-group-2"
                  label="Informació rellevant de la localització:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.descripcio_localitzacio"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
            </div>
          </b-tab>
          <b-tab title="Tipificació de l'emergència">
            <div class="col-12 row mt-3 justify-content-between">
              <div class="col-3">
                <b-form-group
                  id="input-group-2"
                  label="Tipus d'incident:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.incident.tipo_incident.descripcio"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
              <div class="col-4">
                <b-form-group
                  id="input-group-2"
                  label="Incident:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.incident.descripcio"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
              <div class="col-5">
                <b-form-group
                  id="input-group-2"
                  label="Agència/es associades:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    v-for="agencia in call.cartes_trucades_has_agencies"
                    :key="agencia.agencia.id"
                    id="input-2"
                    v-model="agencia.agencia.nom"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
            </div>
          </b-tab>
        </b-tabs>
      </div>
    </b-modal>
  </div>
=======
        <!-- Modal -->
        <b-modal
            id="modal-calls"
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
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="call.codi_trucada"
                                        disabled
                                        required
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Duració de trucada:"
                                    label-for="input-2"
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="call.temps_trucada"
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Data de la trucada:"
                                    label-for="input-2"
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="call.data_hora"
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Nom:"
                                    label-for="input-2"
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="call.nom_trucada"
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <div class="form-floating user-select-none">
                                <b-form-textarea
                                    id="description"
                                    v-model="call.nota_comuna_descripcio"
                                    class="mt-3 h-100 text-area-disabled"
                                    type="text"
                                    rows="5"
                                    no-auto-shrink
                                    no-resize
                                    disabled
                                />
                                <label
                                    class="user-select-none font-weight-bold"
                                    for="input-relation"
                                >
                                    Descripció de l'incident
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
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="call.provincia.nom"
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Comarca:"
                                    label-for="input-2"
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="call.municipi.comarca.nom"
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Municipi:"
                                    label-for="input-2"
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="call.municipi.nom"
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div>
                                <b-form-group
                                    id="input-group-2"
                                    label="Tipus de localització:"
                                    label-for="input-2"
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="call.tipo_localitzacio.tipus"
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                        </div>
                        <div class="col-12 p-0">
                            <b-form-group
                                id="input-group-2"
                                label="Adreça de la trucada:"
                                label-for="input-2"
                                label-class="font-weight-bold"
                            >
                                <b-form-input
                                    id="input-2"
                                    v-model="call.adreca_trucada"
                                    disabled
                                    plaintext
                                ></b-form-input>
                            </b-form-group>
                        </div>
                        <div class="col-12 p-0">
                            <b-form-group
                                id="input-group-2"
                                label="Informació rellevant de la localització:"
                                label-for="input-2"
                                label-class="font-weight-bold"
                            >
                                <b-form-input
                                    id="input-2"
                                    v-model="call.descripcio_localitzacio"
                                    disabled
                                    plaintext
                                ></b-form-input>
                            </b-form-group>
                        </div>
                    </b-tab>
                    <b-tab title="Tipificació de l'emergència">
                        <div class="col-12 row mt-3 justify-content-between">
                            <div class="col-3">
                                <b-form-group
                                    id="input-group-2"
                                    label="Tipus d'incident:"
                                    label-for="input-2"
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="
                                            call.incident.tipo_incident
                                                .descripcio
                                        "
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div class="col-4">
                                <b-form-group
                                    id="input-group-2"
                                    label="Incident:"
                                    label-for="input-2"
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        id="input-2"
                                        v-model="call.incident.descripcio"
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                            <div class="col-5">
                                <b-form-group
                                    id="input-group-2"
                                    label="Agència/es associades:"
                                    label-for="input-2"
                                    label-class="font-weight-bold"
                                >
                                    <b-form-input
                                        v-for="agencia in call.cartes_trucades_has_agencies"
                                        :key="agencia.agencia.id"
                                        id="input-2"
                                        v-model="agencia.agencia.nom"
                                        disabled
                                        plaintext
                                    ></b-form-input>
                                </b-form-group>
                            </div>
                        </div>
                    </b-tab>
                </b-tabs>
            </div>
        </b-modal>
    </div>
>>>>>>> feffc9e7a76c1eed78253e8ec8b8bb23c1f3ea4c
</template>

<script>
import moment from 'moment';

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
                    formatter: (value) => {
                        return moment(value).locale("es").format("DD/MM/yyyy HH:mm:ss");
                    }
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
                provincia: "",
                municipi: {
                    comarca: {},
                },
                tipo_localitzacio: "",
                incident: {
                    tipo_incident: {},
                },
            },
            filtre: {
                call_code: "",
                exp_code: "",
            },
        };
    },
    methods: {
        getCalls(firstTime) {
            firstTime == true
                ? (this.isLoading = true)
                : (this.isLoading = false);

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
            this.call.data_hora = moment(this.call.data_hora).locale('es').format('DD/MM/yyyy HH:mm:ss');
        },
<<<<<<< HEAD
      ],
      calls: {},
      call: {
        provincia: "",
        municipi: {
          comarca: {},
        },
        tipo_localitzacio: "",
        incident:{
            tipo_incident:{},
        },
      },
      filtre:{
          call_code:'',
          exp_code:''
      }
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
=======
>>>>>>> feffc9e7a76c1eed78253e8ec8b8bb23c1f3ea4c
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
<<<<<<< HEAD
  ::v-deep .modal .modal-huge {
    max-width: 90% !important;
    width: 70% !important;
  }
=======
    ::v-deep .modal .modal-huge {
        max-width: 90% !important;
        width: 70% !important;
    }
>>>>>>> feffc9e7a76c1eed78253e8ec8b8bb23c1f3ea4c
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

::v-deep .text-area-disabled:disabled {
    background: white;
}

::v-deep .text-area-disabled:disabled {
  background: white;
}

</style>
