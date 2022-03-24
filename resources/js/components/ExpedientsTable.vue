<template>
    <div>
        <div class="expedients-table-container">
            <b-table striped hover bordered thead-class="thead-dark" :items="expedients" :fields="fields" v-show="!isLoading">
                <template #cell(estats_expedients_id)="data">
                    <div>
                        <i :class="getState(data.item.estats_expedients_id)"></i>
                    </div>
                </template>

                <template #cell(see_expedient)="data">
                    <div>
                        <button class="button-edit" v-b-modal.modal-expedients> <i class="fa-solid fa-eye mr-2"></i> Veure dades {{data.item.id }}</button>
                    </div>
                </template>
            </b-table>

            <div class="loading-spinner">
                <img
                    v-show="isLoading"
                    src="/assets/img/spinner.svg"
                    width="100"/>
            </div>
        </div>

        <!-- Modal -->
        <b-modal id="modal-expedients" class="modal-lg" :title="modalTitle" size="xl">
            <b-table striped hover thead-class="thead-dark" :items="trucades" :fields="callFields" v-show="!isLoading">

            </b-table>
        </b-modal>
    </div>
</template>

<script>
export default {
    mounted() {
      document.title = "Expedients - Broggi";
      this.getExpedients();
    },
    data(){
        return{
            isLoading: true,
            modalTitle: '',
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
            expedients: [],
            callFields:[
                {
                    key: 'codi_trucada',
                    label: 'Codi',
                    sortable: true,
                    thClass: 'codi-th-column'
                },{
                    key: 'fora_catalunya',
                    label: 'Fora Catalunya',
                    thClass: 'fora-cat-th-column'
                },{
                    key: 'tipus_localitzacions_id',
                    label: 'Localització',
                    thClass: 'localitzacio-th-column'
                },
                {
                    key: 'incidents_id',
                    label: 'Incident',
                    thClass: 'incident-th-column'
                },
                {
                    key: 'show-call',
                    label: 'Show call',
                    thClass: 'show-call-th-column'
                }
            ],
            trucades: []
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
        }
    }
}
</script>

<style scoped>
.expedients-table-container{
    padding-inline: 10px;
}

.in-progress{
    color: rgb(0, 255, 21);
    box-shadow: 0 0 1px 2px rgb(125, 190, 125);
    border-radius: 50%;
    height: 13px;
}
.requested{
    color: yellow;
    box-shadow: 0 0 1px 2px rgb(186, 190, 125);
    border-radius: 50%;
    height: 13px;
}
.accepted{
    color: rgb(3, 250, 3);
    box-shadow: 0 0 1px 2px rgb(125, 190, 125);
    border-radius: 50%;
    height: 13px;
}
.closed{
    color: blue;
    box-shadow: 0 0 1px 2px rgb(129, 125, 190);
    border-radius: 50%;
    height: 13px;
}
.immobilized{
    color: rgb(150, 22, 150);
    box-shadow: 0 0 1px 2px rgb(167, 110, 179);
    border-radius: 50%;
    height: 13px;
}

.button-edit{
    border-radius: 5px;
    border: 0px;
    background-color: deepskyblue;
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
    width: 20%;
}

::v-deep .fora-cat-th-column{
    text-align: center;
    vertical-align: middle;
    width: 10%;
}

::v-deep .incident-th-column{
    text-align: center;
    vertical-align: middle;
    width: 25%;
}

::v-deep .localitzacio-th-column{
    text-align: center;
    vertical-align: middle;
    width: 25%;
}

::v-deep .show-call-th-column{
    text-align: center;
    vertical-align: middle;
    width: 15%;
}

</style>

