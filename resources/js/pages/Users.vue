<template>
    <main>
        <div class="principal">
            <div class="botones">
                <b-row class="text-center">
                    <b-col cols="3">
                        <button
                            class="btn btn-success"
                            area-hidden="true"
                            v-b-modal.modal-usuari
                            @click="setTitleModalUsuari('Nou usuari')"
                        >
                            <i class="fas fa-user-circle"></i>
                            Afegir usuari
                        </button>
                    </b-col>
                    <b-col cols="3"> </b-col>
                    <b-col cols="6">
                        <b-form inline>
                            <b-form-input
                                id="inline-form-input-name"
                                class="mb-2 mr-sm-2 mb-sm-0"
                                placeholder="Exemple: Francisco ..."
                            ></b-form-input>

                            <label
                                class="mr-sm-2"
                                for="inline-form-custom-select-pref"
                                >Perfil</label
                            >
                            <b-form-select
                                id="inline-form-custom-select-pref"
                                class="mb-2 mr-sm-2 mb-sm-0"
                                :options="[
                                    { text: 'Perfil', value: null },
                                    'Operador',
                                    'Supervisor',
                                    'Administrador',
                                ]"
                                :value="null"
                            ></b-form-select>

                            <label
                                class="mr-sm-2"
                                for="inline-form-custom-select-pref"
                                >Actiu</label
                            >
                            <b-form-select
                                id="inline-form-custom-select-pref"
                                class="mb-2 mr-sm-2 mb-sm-0"
                                :options="[
                                    { text: 'Tots', value: null },
                                    'Actius',
                                    'Inactius',
                                ]"
                                :value="null"
                            ></b-form-select>

                            <b-button variant="info"
                                ><i class="fa-solid fa-filter"></i>
                                Filtrar</b-button
                            >
                            <b-button
                                variant="secondary ml-2"
                                @click="selectUsuaris"
                            >
                                <i class="fa-solid fa-magnifying-glass"></i>
                                Mostrar tots</b-button
                            >
                        </b-form>
                    </b-col>
                </b-row>
            </div>

            <!--MSG INFO

            <div
                v-if="msgInfo"
                class="alert alert-success alert-dismissible fade show"
                role="alert"
            >
                <i class="fas fa-check"></i>
                {{ msgInfo }}
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                ></button>
            </div>-->

            <!--TABLA-->
            <div class="contenedor-tabla">
                <b-table
                    v-show="!isLoading"
                    striped
                    hover
                    thead-class="thead-dark"
                    sort-icon-left
                    :fields="fields"
                    :items="usuaris"
                    primary-key="id"
                >
                    <template #cell(edit)="data">
                        <div>
                            <b-button
                                variant="warning"
                                v-b-modal.modal-usuari
                                @click="
                                    setUsuari(data.item);
                                    setTitleModalUsuari('Editar usuari');
                                "
                                ><i class="fas fa-edit"></i> Editar
                            </b-button>
                        </div>
                    </template>
                    <template #cell(actiu)="data">
                        <div class="centrar-icono">
                            <i
                                v-if="data.item.actiu"
                                class="fa-solid fa-2x fa-circle-check color-actiu"
                            ></i>
                            <i
                                v-else
                                class="fa-solid fa-2x fa-circle-xmark color-inactiu"
                            ></i>
                        </div>
                    </template>
                </b-table>

                <div class="centrar-carga">
                    <img
                        v-show="isLoading"
                        src="/assets/img/spinner.svg"
                        width="100"
                    />
                </div>
            </div>
        </div>

        <!-- MODAL CREAR USUARIO-->

        <b-modal
            id="modal-usuari"
            size="lg"
            :title="titleModalUsuari"
            @ok="createUpdateUsuari"
            @hidden="resetModal"
        >
            <template #modal-footer="{ ok, cancel }">
                <div class="w-100">
                    <span class="text-danger" v-if="showErrorModal"
                        ><i class="fas fa-exclamation-circle mr-2"></i
                        >{{ errorMessageModal }}</span
                    >
                    <b-button
                        @click="ok()"
                        variant="primary"
                        class="float-right"
                        :disabled="disabled_ok_button_modal"
                    >
                        {{ save_button_title }}
                    </b-button>
                    <b-button
                        @click="cancel()"
                        variant="secondary"
                        class="float-right mr-2"
                    >
                        Tancar
                    </b-button>
                </div>
            </template>

            <template #default>
                <b-form @submit="createUpdateUsuari">
                    <div class="form-floating user-select-none mb-2">
                        <b-form-input
                            id="usuari"
                            type="text"
                            placeholder="Usuari"
                            v-model="usuari.usuari"
                            required
                        />
                        <label class="user-select-none" for="input-usuari">
                            Usuari
                        </label>
                    </div>

                    <div class="form-floating user-select-none mb-2">
                        <b-form-input
                            id="nom"
                            type="text"
                            placeholder="Nom"
                            v-model="usuari.nom"
                            required
                        />
                        <label class="user-select-none" for="input-nom">
                            Nom
                        </label>
                    </div>

                    <div class="form-floating user-select-none mb-2">
                        <b-form-input
                            id="cognoms"
                            type="text"
                            placeholder="Cognoms"
                            v-model="usuari.cognoms"
                            required
                        />
                        <label class="user-select-none" for="input-cognoms">
                            Cognoms
                        </label>
                    </div>

                    <div class="form-floating user-select-none mb-2">
                        <b-form-input
                            id="contrassenya"
                            type="text"
                            placeholder="Contrasenya"
                            v-model="usuari.contrassenya"
                            required
                        />
                        <label class="user-select-none" for="input-nom">
                            Contrasenya
                        </label>
                    </div>

                    <div class="form-floating user-select-none mb-2">
                        <b-form-input
                            id="perfils_id"
                            type="text"
                            placeholder="Perfil"
                            v-model="usuari.perfils_id"
                            required
                        />
                        <label class="user-select-none" for="input-perfils_id">
                            Perfil
                        </label>
                    </div>

                    <b-form-group
                        label="Perfil"
                    >
                        <b-form-radio-group
                            id="radio-group-1"
                            v-model="usuari.perfils_id"
                            :options="options"
                            name="radio-options"
                        ></b-form-radio-group>
                    </b-form-group>
                </b-form>
            </template>
        </b-modal>
    </main>
</template>

<script>
export default {
    data() {
        return {
            usuaris: [],
            usuari: {
                id: 1,
                usuari: "",
                nom: "",
                cognoms: "",
                contrassenya: "",
                perfils_id: "",
                actiu: true,
            },
            fields: [
                {
                    key: "id",
                    label: "ID",
                    sortable: true,
                    tdClass: "column-id",
                    thClass: "column-id",
                },
                {
                    key: "usuari",
                    label: "Usuari",
                    sortable: true,
                    tdClass: "column-usuari",
                    thClass: "column-usuari",
                },
                {
                    key: "nom",
                    label: "Nom",
                    sortable: true,
                    tdClass: "column-nom",
                    thClass: "column-nom",
                },
                {
                    key: "cognoms",
                    label: "Cognoms",
                    sortable: true,
                    tdClass: "column-cognoms",
                    thClass: "column-cognoms",
                },
                {
                    key: "perfils_id",
                    label: "Perfil",
                    sortable: false,
                    tdClass: "column-perfils_id",
                    thClass: "column-perfils_id",
                },
                {
                    key: "actiu",
                    label: "Actiu",
                    tdClass: "column-actiu",
                    thClass: "column-actiu",
                },
                {
                    key: "edit",
                    label: "Edit",
                    tdClass: "column-edit",
                    thClass: "column-edit",
                },
            ],
            isLoading: true,
            titleModalUsuari: "",
            disabled_ok_button_modal: false,
            errorMessageModal: "",
            showErrorModal: false,
            save_button_title: "Guardar",
            options:[{text:"Operador",value:"1"},{text:"Supervisor",value:"2"},{text:"Administrador",value:"3"}
                        ]
        };
    },
    methods: {
        selectUsuaris() {
            this.isLoading = true;
            let me = this;
            axios
                .get("/api/users/")
                .then((response) => {
                    me.usuaris = response.data;
                })
                .catch((error) => {
                    console.log("error");
                })
                .finally(() => (me.isLoading = false));
        },
        editUsuari(usuari) {
            console.log(usuari.id);
            console.log(usuari.nom);
            console.log(usuari.cognoms);
        },
        /*createUsuari() {
            this.msgError = "";
            this.msgInfo = "";
            this.usuari.usuari = "";
            this.usuari.nom = "";
            this.usuari.cognoms = "";
            this.usuari.contrassenya = "";
            this.usuari.perfils_id = "";
            this.usuari.actiu = true;
            this.usuariModal.show();
        },
        insertUsuari() {
            let me = this;
            me.esborrar = false;
            axios
                .post("/api/users/", me.usuari)
                .then(function (response) {
                    console.log(response);
                    me.selectUsuaris();
                    me.msgError = "";
                    me.msgInfo = "Usuari afegit correctament";
                    me.usuariModal.hide();
                })
                .catch(function (error) {
                    console.log(error.response.status);
                    console.log(error.response.data);
                    me.msgError = error.response.data.error;
                    me.msgInfo = "";
                });
        },
        editUsuari(usuari) {
            this.insert = false;
            this.usuari = usuari;
            this.usuariModal.show();
        },
        updateUsuari() {
            let me = this;
            me.esborrar = false;
            axios
                .put("/api/users/" + me.usuari.id, me.usuari)
                .then(function (response) {
                    console.log(response);
                    me.selectUsuaris();
                    me.msgInfo = "Usuari editat correctament";
                    me.msgError = "";
                    me.usuariModal.hide();
                })
                .catch(function (error) {
                    console.log(error.response.status);
                    console.log(error.response.data);
                    me.msgError = error.response.data.error;
                    me.msgInfo = "";
                });
        },*/

        refresh() {
            this.selectUsuaris();
        },
        setTitleModalUsuari(title) {
            this.titleModalUsuari = title;
        },
        setUsuari(usuari) {
            this.usuari = usuari;
        },
        createUpdateUsuari() {},
        resetModal() {
            this.setUsuari({
                id: -1,
                usuari: "",
                nom: "",
                cognoms: "",
                contrassenya: "",
                perfils_id: "",
                actiu: false,
            });
            this.disabled_ok_button_modal = false;
            this.errorMessageModal = "";
            this.showErrorModal = false;
        },
    },
    created() {
        this.selectUsuaris();
    },
    refresh() {
        this.selectUsuaris();
    },
    mounted() {
        document.title = "Usuaris - ibroggi";
    },
};
</script>

<style scoped>
.botones {
    margin-bottom: 20px;
}
.tabla {
}

.centrar-carga {
    width: 100%;
    text-align: center;
    justify-content: center;
    margin-top: 50px;
}
.principal {
    padding: 15px;
}

::v-deep .column-id {
    text-align: center;
    width: 5%;
    vertical-align: middle;
}
::v-deep .column-usuari {
    width: 25%;
    vertical-align: middle;
}
::v-deep .column-nom {
    width: 25%;
    vertical-align: middle;
}
::v-deep .column-cognoms {
    width: 25%;
    vertical-align: middle;
}
::v-deep .column-perfils_id {
    text-align: center;
    width: 5%;
    vertical-align: middle;
}
::v-deep .column-actiu {
    text-align: center;
    width: 5%;
    vertical-align: middle;
}
::v-deep .column-edit {
    text-align: center;
    width: 10%;
    vertical-align: middle;
}

.centrar-icono {
    text-align: center;
    vertical-align: middle;
}

.color-actiu {
    color: rgb(20, 128, 33);
}
.color-inactiu {
    color: rgb(208, 52, 52);
}
.color {
    background-color: aqua;
}
</style>
