<template>
      <!-- Modal -->
    <b-modal ref="modal-calls" title="Dades de la trucada" size="huge" hide-footer>
      <div>
        <b-tabs content-class="mt-3" fill>
          <b-tab title="Identificació de la trucada" active>
            <div class="col-12 row mt-3 justify-content-between">
                <div>
                <b-form-group
                  id="input-group-2"
                  label="Codi de la trucada:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.codi_trucada"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Nº telèfon:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="call.telefon"
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
                    v-model="call_duration"
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
            </div>
            <div class="col-12 row mt-3 justify-content-between">
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
                    label="Adreça:"
                    label-for="input-2"
                    label-class="font-weight-bold"
                    >
                    <b-form-input
                        id="input-2"
                        v-model="call.dada_personal.adreca"
                        disabled
                        plaintext
                    ></b-form-input>
                    </b-form-group>
                </div>
                <div>
                    <b-form-group
                    id="input-group-2"
                    label="Procedència:"
                    label-for="input-2"
                    label-class="font-weight-bold"
                    >
                    <b-form-input
                        id="input-2"
                        v-model="call.procedencia_trucada"
                        disabled
                        plaintext
                    ></b-form-input>
                    </b-form-group>
                </div>
                <div>
                    <b-form-group
                    id="input-group-2"
                    label="Antecedents del telèfon:"
                    label-for="input-2"
                    label-class="font-weight-bold"
                    >
                    <b-form-input
                        id="input-2"
                        v-model="call.dada_personal.antecedents"
                        disabled
                        plaintext
                    ></b-form-input>
                    </b-form-group>
                </div>
            </div>
          </b-tab>
          <b-tab title="Nota comuna">
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

          <b-tab title="Localització de l'emergència">
            <div class="col-12 row mt-3 justify-content-start">
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Fora de Catalunya:"
                  label-for="input-2"
                  label-class="font-weight-bold"
                >
                  <b-form-input
                    id="input-2"
                    v-model="fora_cat"
                    disabled
                    plaintext
                  ></b-form-input>
                </b-form-group>
              </div>
            </div>
            <div class="col-12 row mt-3 justify-content-between">
              <div>
                <b-form-group
                  id="input-group-2"
                  label="Província:"
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
            </div>
            <div class="col-12 p-0 mt-3">
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
            <div class="col-12 p-0 mt-3">
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
            </div>
          </b-tab>
          <b-tab title="Agencies">
              <div class="col-12 p-0">
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
          </b-tab>
        </b-tabs>
      </div>
    </b-modal>
</template>

<script>
import moment from 'moment';

export default {
    data() {
        return {
            call: {
                provincia: "",
                municipi: {
                comarca: {},
                },
                tipo_localitzacio: "",
                incident: {
                tipo_incident: {},
                },
                dada_personal:{
                }
            },
            call_duration: "",
            fora_cat: ""
        };
    },
    methods: {
        loadCallInfo(call_selected) {
            this.call = {... call_selected[0]}
            this.call.data_hora = moment(this.call.data_hora)
                                    .locale("es")
                                    .format("DD/MM/yyyy HH:mm:ss");
            this.call_duration = moment.utc(this.call.temps_trucada).format('HH:mm:ss');
            this.fora_cat = this.call.fora_catalunya == 1 ? "Si" : "No";

            this.$refs['modal-calls'].show();
        },
    }
}
</script>

<style scoped>
@media (min-width: 992px) {
    ::v-deep .modal .modal-huge {
        max-width: 90% !important;
        width: 70% !important;
    }
}
</style>
