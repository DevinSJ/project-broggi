<template>
    <div>
        <b-card v-show="!isLoading" class="p-5 card-container">
                <b-table striped hover bordered thead-class="thead-dark" :items="expedients" :fields="fields" >
                    <template #cell(estats_expedients_id)="data">
                        <div>
                            <i :class="getState(data.item.estats_expedients_id)"></i>
                        </div>
                    </template>

                    <template #cell(see_expedient)="data">
                        <div>
                            <button class="button-edit" v-b-modal.modal-expedients @click="getCalls(data.item.id, data.item.estats_expedients_id)"> <i class="fa-solid fa-eye mr-2"></i> Veure dades {{data.item.id }}</button>
                        </div>
                    </template>
                </b-table>
        </b-card>

        <div class="loading-spinner">
            <img
                v-show="isLoading"
                src="/assets/img/spinner.svg"
                width="100"/>
        </div>

        <!-- Modal -->
        <b-modal id="modal-expedients" class="modal-calls" title="Trucades de l'expedient" size="huge">

            <b-table v-if="trucades.length > 0" striped hover bordered thead-class="thead-dark" :items="trucades" :fields="callFields" v-show="!isLoading2">
                <template #cell(cartes_trucades_has_agencies)="data">
                    <p style="display:none">{{data.item.id}}</p>
                    <button class="button-edit" v-b-modal.modal-info-calls @click="loadAgencies(data.item.cartes_trucades_has_agencies)"> <i class="fa-solid fa-eye m-1"></i></button>
                </template>
                <template #cell(show-nota-comuna)="data">
                    <div>
                        <p style="display: none">{{data.item.id}}</p>
                        <button class="button-edit" v-b-modal.modal-info-calls @click="loadInfo(data.item.nom_trucada, data.item.nota_comuna_descripcio)"> <i class="fa-solid fa-eye m-1"></i></button>
                    </div>
                </template>
            </b-table>

            <div v-else v-show="!showTrucades">No hi ha trucades enllaçades a aquest expedient realitzades per aquest usuari.</div>

            <div v-show="!isLoading2" v-if="this.user.perfils_id != 1" class="div-expedient-estate">
                <p>Estat de l'expedient: </p>
                <b-form-select
                v-model="expedientState"
                :options="renderConditions">
                </b-form-select>
            </div>

            <div class="loading-spinner2">
                <img
                    v-show="isLoading2"
                    src="/assets/img/spinner.svg"
                    width="100"/>
            </div>
        </b-modal>

        <!-- Modal with call information -->
        <b-modal id="modal-info-calls" class="modal-info-calls" :title="modalTitle2" size="lg">

            <div v-if="!this.modal_agencia">
                <p>Nom: {{this.name_call}}</p>
                <label for="txtNotaComuna">Descripció:</label>
                <textarea name="txtNotaComuna" id="txtNotaComuna" class="w-100" cols="30" rows="10" v-model="this.description_call"></textarea>
            </div>
            <div v-else>
                <p v-for="relacioAgencia in this.agencies_contactades" :key="relacioAgencia.agencia.id"> {{ relacioAgencia.agencia.nom }} </p>
            </div>

            <div class="loading-spinner2">
                <img
                    v-show="isLoading3"
                    src="/assets/img/spinner.svg"
                    width="100"/>
            </div>
        </b-modal>
    </div>
</template>

<script>
export default {
    mounted() {
      document.title = "Expedients - Broggi";
      this.getExpedients();
      this.getEstatsExpedients();
      this.user = window.Vue.prototype.$user;
    },
    data(){
        return{
            isLoading: true,
            isLoading2: true,
            isLoading3: true,
            modalTitle2: "",
            user: {},
            fields: [
                {
                    key: 'estats_expedients_id',
                    label: 'Estat' ,
                    sortable: true,
                    tdClass: 'centered-text-class',
                    thClass: 'estat-th-column'
                },
                {
                    key: 'id',
                    label: 'Id',
                    sortable: true,
                    tdClass: 'centered-text-class',
                    thClass: 'id-th-column'
                },
                {
                    key: 'data_creacio',
                    label: 'Data creació',
                    sortable: true,
                    tdClass: 'centered-text-class',
                    thClass: 'created-th-column'
                },
                {
                    key: 'data_ultima_modificacio',
                    label: 'Ultima modificació',
                    sortable: true,
                    tdClass: 'centered-text-class',
                    thClass: 'modified-th-column'
                },
                {
                    key:'see_expedient',
                    label: '',
                    tdClass: 'centered-text-class',
                    thClass: 'edit-th-column'
                }

            ],
            callFields:[
                {
                    key: 'codi_trucada',
                    label: 'Codi',
                    sortable: true,
                    tdClass: 'centered-text-class',
                    thClass: 'codi-th-column'
                },{
                    key: 'tipus_localitzacions_id',
                    label: 'Localització',
                    tdClass: 'centered-text-class',
                    thClass: 'localitzacio-th-column'
                },{
                    key: 'incident.descripcio',
                    label: 'Incident',
                    tdClass: 'centered-text-class',
                    thClass: 'incident-th-column'
                },{
                    key: 'cartes_trucades_has_agencies',
                    label: 'Agències',
                    tdClass: 'centered-text-class',
                    thClass: 'agencies-th-column'
                },{
                    key: 'show-nota-comuna',
                    label: 'Nota comuna',
                    tdClass: 'centered-text-class',
                    thClass: 'nota-comuna-th-column'
                }
            ],
            expedients: [],
            trucades: [],
            expedient_conditions: [],
            options: [],
            expedientState: '',
            name_call: '',
            description_call: '',
            agencies_contactades: [],
            modal_agencia: true,
            showTrucades: true
        }
    },
    computed: {
        renderConditions() {
            return this.expedient_conditions.map((condition) => {
                return {
                    value: condition.id,
                    text: condition.estat
                }
            })
        }
    },
    methods:{
        getState(state){
            let classname = '';
            switch(state){
                case 1:
                    classname = 'fa-solid fa-circle in-progress';
                    break;
                case 2:
                    classname = 'fa-solid fa-circle requested';
                    break;
                case 3:
                    classname = 'fa-solid fa-circle accepted';
                    break;
                case 4:
                    classname = 'fa-solid fa-circle closed';
                    break;
                case 5:
                    classname = 'fa-solid fa-circle immobilized';
                    break;
            }

            return classname;
        },

        getExpedients(){
            this.isLoading = true;
            let me = this;
            axios
                .get('/api/expedients/')
                .then(response =>{
                    me.expedients = response.data;
                })
                .catch(error => {
                    console.log(error)
                })
                .finally(() => this.isLoading = false)
        },
        getCalls(idExpedient, idEstatExpedient){
            this.expedientState = idEstatExpedient;
            this.showTrucades = true;
            this.isLoading2 = true;
            let me = this;

            axios
                .get('/api/cartestrucades/list/' + idExpedient + '?id_rol=' + this.user.perfils_id + '&id_user=' + this.user.id)
                .then(response =>{
                    me.trucades = response.data;
                    if(me.trucades.length == 0){
                        me.showTrucades = false;
                    }
                })
                .catch(error => {
                    console.log(error)
                })
                .finally(() => this.isLoading2 = false)
        },
        getEstatsExpedients(){
            let me = this;
            this.isLoading2 = true;
            axios
                .get('/api/estats_expedients/')
                .then(response =>{
                    me.expedient_conditions = response.data;
                })
                .catch(error =>{
                    console.log(error)
                })
                .finally(() => this.isLoading2 = false)
        },
        loadInfo(name, nota_comuna_descripcio){
            this.name_call = name;
            this.description_call = nota_comuna_descripcio;
            this.isLoading3 = false;
            this.modal_agencia = false;
            this.modalTitle2 = "Nota comuna";
        },
        loadAgencies(agencies){
            this.agencies_contactades = agencies;
            this.isLoading3 = false;
            this.modal_agencia = true;
            this.modalTitle2 = "Agències contactades";
        }
    }
}
</script>

<style scoped>
.card-container{
    background-color: white;
    border: 1px;
    box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}

.in-progress{
    color: rgb(0, 255, 21);
    border-radius: 50%;
    height: 15px;
}
.requested{
    color: yellow;
    border-radius: 50%;
    height: 15px;
}
.accepted{
    color: rgb(3, 250, 3);
    border-radius: 50%;
    height: 15px;
}
.closed{
    color: blue;
    border-radius: 50%;
    height: 15px;
}
.immobilized{
    color: rgb(150, 22, 150);
    border-radius: 50%;
    height: 15px;
}

.button-edit{
    border-radius: 5px;
    border: 0px;
    background-color: #06adc4;
    padding: 10px;
    color: white;
}

.button-edit:hover{
    transform: scale(1.1);
    transition: 500ms;
}

.loading-spinner{
    width: 100%;
    text-align: center;
    justify-content: center;
    margin-top: 150px;
}

.loading-spinner2{
    width: 100%;
    text-align: center;
    justify-content: center;
}
::v-deep .centered-text-class{
    text-align: center;
    vertical-align: middle;
}

::v-deep .estat-th-column{
    text-align: center;
    width: 2%;
    vertical-align: middle;
}

::v-deep .id-th-column{
    text-align: center;
    vertical-align: middle;
    width: 2%;
}

::v-deep .created-th-column{
    text-align: center;
    vertical-align: middle;
    width: 20%;
}

::v-deep .modified-th-column{
    text-align: center;
    vertical-align: middle;
    width: 20%;
}

::v-deep .edit-th-column{
    text-align: center;
    vertical-align: middle;
    width: 10%;
}

/* 2nd table */
::v-deep .codi-th-column{
    text-align: center;
    vertical-align: middle;
    width: 5%;
}

::v-deep .agencies-th-column{
    text-align: center;
    vertical-align: middle;
    width: 5%;
}

::v-deep .incident-th-column{
    text-align: center;
    vertical-align: middle;
    width: 20%;
}

::v-deep .localitzacio-th-column{
    text-align: center;
    vertical-align: middle;
    width: 15%;
}

::v-deep .nota-comuna-th-column{
    text-align: center;
    vertical-align: middle;
    width: 5%;
}

@media (min-width: 992px) {
   ::v-deep .modal .modal-huge {
      max-width: 90% !important;
      width: 90% !important;;
    }
 }

.div-expedient-estate{
    width: 150px;
    padding-top: 30px;
}

::v-deep .modal-body{
    padding: 30px !important;
}

</style>
