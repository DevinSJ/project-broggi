<template>
    <main>
        <div class="principal">
            <div class="botones">
                <!--PAnel filtrado-->
                <b-card class="show-card">
                    <b-row class="text-center">
                        <b-col cols="1">
                            <b-button
                                class="btn-sm btn-success"
                                area-hidden="true"
                                v-b-modal.modal-usuari
                                @click="
                                    nouUsuari();
                                    setTitleModalUsuari('Nou usuari'),
                                        colorCabezalCrearUsuari();
                                "
                            >
                                <i class="fas fa-user-circle"></i>
                                Afegir usuari
                            </b-button></b-col
                        >
                        <b-col cols="6"> </b-col>
                        <b-col cols="5">
                            <b-form inline>
                                <b-form-input
                                    id="inline-form-input-name"
                                    class="mb-2 mr-sm-2 mb-sm-0 form-control-sm"
                                    placeholder="Exemple: Francisco ..."
                                ></b-form-input>

                                <label
                                    class="mr-sm-2"
                                    for="inline-form-custom-select-pref"
                                    >Perfil</label
                                >
                                <b-form-select
                                    size="sm"
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
                                    size="sm"
                                    id="inline-form-custom-select-pref"
                                    class="mb-2 mr-sm-2 mb-sm-0"
                                    :options="[
                                        { text: 'Tots', value: null },
                                        'Actius',
                                        'Inactius',
                                    ]"
                                    :value="null"
                                ></b-form-select>

                                <b-button variant="info" class="btn-sm"
                                    ><i class="fa-solid fa-filter"></i>
                                    Filtrar</b-button
                                >
                                <b-button
                                    class="btn-sm"
                                    variant="secondary ml-2"
                                    @click="selectUsuaris"
                                >
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    Mostrar tots</b-button
                                >
                            </b-form>
                        </b-col>
                    </b-row>
                </b-card>
            </div>

            <!-- ALERTS-->
            <!-- MSG info-->
            <b-alert v-if="msgInfo" show dismissible variant="success"
                ><i class="fas fa-check"></i> {{ msgInfo }}
            </b-alert>

            <!--TABLA-->
            <b-card class="show-card">
                <div class="contenedor-tabla">
                    <b-table
                        v-show="!isLoading"
                        striped
                        hover
                        class="table-sm"
                        thead-class="thead-dark"
                        sort-icon-left
                        :fields="fields"
                        :items="usuaris.data"
                        primary-key="id"
                    >
                        <template #cell(edit)="data">
                            <div>
                                <b-button
                                    title="Editar usuari"
                                    variant="warning"
                                    v-b-modal.modal-usuari
                                    class="btn-sm"
                                    @click="
                                        setUsuari(data.item);
                                        setTitleModalUsuari('Editar usuari');
                                        colorCabezalEditarUsuari();
                                    "
                                    ><i class="fas fa-edit"></i>
                                </b-button>
                                <b-button
                                    title="Editar contrasenya"
                                    variant="dark"
                                    class="btn-sm"
                                    v-b-modal.modal-usuari
                                    @click="
                                        setUsuari(data.item);
                                        setTitleModalUsuari(
                                            'Editar contrasenya'
                                        );
                                        colorCabezalEditarContrasenya();
                                    "
                                    ><i class="fa-solid fa-key"></i>
                                </b-button>
                            </div>
                        </template>
                        <template #cell(actiu)="data">
                            <div class="centrar-icono">
                                <i
                                    v-if="data.item.actiu"
                                    class="fa-solid fa-circle-check color-actiu"
                                ></i>
                                <i
                                    v-else
                                    class="fa-solid fa-circle-xmark color-inactiu"
                                ></i>
                            </div>
                        </template>

                        <template #cell(perfils_id)="data">
                            <div>{{ data.item.perfil.nom }}</div>
                        </template>
                    </b-table>
                </div>

                <pagination
                    v-show="!isLoading"
                    class="justify-center-center pagination-sm"
                    :data="usuaris"
                    @pagination-change-page="fetchUsuaris"
                >
                </pagination>
                <!--CARGA-->
                <div class="centrar-carga">
                    <img
                        v-show="isLoading"
                        src="/assets/img/spinner.svg"
                        width="100"
                    />
                </div>
            </b-card>
        </div>

        <!-- MODAL USUARIO-->

        <b-modal
            id="modal-usuari"
            size="lg"
            @ok="handleOk"
            @hidden="resetModal"
            :header-class="colorCabezal"
        >
            <template #modal-header>
                <h3><i :class="iconoModal"></i> {{ titleModalUsuari }}</h3>
            </template>

            <template #modal-footer="{ ok, cancel }">
                <div class="w-100">
                    <b-button
                        @click="ok()"
                        :variant="btnClassForm"
                        class="float-right"
                        type="submit"
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
                <b-form
                    @submit="createUpdateUsuari"
                    id="form-user"
                    invalid-feedback="This field is required"
                    aria-autocomplete="false"
                >
                    <!-- MSG ERROR-->
                    <b-alert v-if="msgError" show variant="danger"
                        ><i class="fas fa-exclamation"></i> {{ msgError }}
                    </b-alert>

                    <p>Els camps amb ! son obligatoris</p>

                    <div
                        v-if="opcionModal === 1 || opcionModal === 2"
                        class="form-floating user-select-none mb-2"
                    >
                        <b-form-input
                            id="input-usuari"
                            type="text"
                            placeholder="Usuari"
                            v-model="usuari.usuari"
                            required
                            :state="validationUsuari"
                        />
                        <label class="user-select-none" for="input-usuari">
                            Usuari
                        </label>
                    </div>

                    <b-row>
                        <b-col
                            ><div
                                v-if="opcionModal === 1 || opcionModal === 2"
                                class="form-floating user-select-none mb-2"
                            >
                                <b-form-input
                                    id="nom"
                                    type="text"
                                    placeholder="Nom"
                                    v-model="usuari.nom"
                                    required
                                    :state="validationNom"
                                />
                                <label class="user-select-none" for="input-nom">
                                    Nom
                                </label>
                            </div></b-col
                        >
                        <b-col>
                            <div
                                v-if="opcionModal === 1 || opcionModal === 2"
                                class="form-floating user-select-none mb-2"
                            >
                                <b-form-input
                                    id="cognoms"
                                    type="text"
                                    placeholder="Cognoms"
                                    v-model="usuari.cognoms"
                                    required
                                    :state="validationCognoms"
                                />
                                <label
                                    class="user-select-none"
                                    for="input-cognoms"
                                >
                                    Cognoms
                                </label>
                            </div></b-col
                        >
                    </b-row>

                    <b-row>
                        <b-col
                            ><div
                                v-if="opcionModal === 1 || opcionModal === 3"
                                class="form-floating user-select-none mb-2"
                            >
                                <span
                                    @click="showPassword = !showPassword"
                                    role="button"
                                    class="position-absolute"
                                    style="
                                        top: 50%;
                                        right: 10px;
                                        transform: translateY(-50%);
                                    "
                                >
                                    <i
                                        :class="
                                            'fa-solid ' +
                                            (!showPassword
                                                ? 'fa-eye mr-4 '
                                                : 'fa-eye-slash mr-4 ')
                                        "
                                    ></i>
                                </span>
                                <b-form-input
                                    id="contrassenya"
                                    :type="!showPassword ? 'password' : 'text'"
                                    placeholder="Contrasenya"
                                    v-model="usuari.contrassenya"
                                    required
                                    :state="validationContrassenya"
                                />
                                <label class="user-select-none" for="input-nom">
                                    Contrasenya
                                </label>
                            </div></b-col
                        >
                        <b-col
                            ><div
                                v-if="opcionModal === 1 || opcionModal === 3"
                                class="form-floating user-select-none mb-2"
                            >
                                <span
                                    @click="showPassword = !showPassword"
                                    role="button"
                                    class="position-absolute"
                                    style="
                                        top: 50%;
                                        right: 10px;
                                        transform: translateY(-50%);
                                    "
                                >
                                    <i
                                        :class="
                                            'fa-solid ' +
                                            (!showPassword
                                                ? 'fa-eye mr-4'
                                                : 'fa-eye-slash mr-4')
                                        "
                                    ></i>
                                </span>
                                <b-form-input
                                    id="repetirContrassenya"
                                    :type="!showPassword ? 'password' : 'text'"
                                    placeholder="Repetir contrasenya"
                                    v-model="repetirContrassenya"
                                    required
                                    :state="validationRepetirContrassenya"
                                />
                                <label
                                    class="user-select-none"
                                    for="input-perfils_id"
                                >
                                    Repetir contrasenya
                                </label>
                            </div></b-col
                        >
                    </b-row>
                    <hr />
                    <b-row>
                        <b-col
                            ><b-form-group
                                v-if="opcionModal === 1 || opcionModal === 2"
                                label="Perfil"
                            >
                                <b-form-radio-group
                                    id="radio-group-1"
                                    v-model="usuari.perfils_id"
                                    :options="optionsPerfil"
                                    name="radio-options-perfil"
                                ></b-form-radio-group> </b-form-group
                        ></b-col>
                        <b-col
                            ><b-form-group
                                v-if="opcionModal === 1 || opcionModal === 2"
                                label="Estat"
                            >
                                <b-form-radio-group
                                    id="radio-group-2"
                                    v-model="usuari.actiu"
                                    :options="optionsEstat"
                                    name="radio-options-estat"
                                ></b-form-radio-group> </b-form-group
                        ></b-col>
                    </b-row>

                    <b-button
                        id="btn-submit-form-user"
                        type="submit"
                        variant="primary"
                        class="d-none"
                    ></b-button>
                </b-form>
            </template>
        </b-modal>
    </main>
</template>

<script>
export default {
    data() {
        return {
            usuaris: {},
            usuari: {
                id: "",
                usuari: "",
                nom: "",
                cognoms: "",
                contrassenya: "",
                perfils_id: "1",
                actiu: "1",
            },
            showPassword: false,
            repetirContrassenya: "",
            fields: [
                {
                    key: "id",
                    label: "ID",
                    sortable: true,
                    tdClass: "column-id align-middle",
                    thClass: "column-id",
                },
                {
                    key: "usuari",
                    label: "Usuari",
                    sortable: true,
                    tdClass: "column-usuari align-middle",
                    thClass: "column-usuari",
                },
                {
                    key: "nom",
                    label: "Nom",
                    sortable: true,
                    tdClass: "column-nom align-middle",
                    thClass: "column-nom",
                },
                {
                    key: "cognoms",
                    label: "Cognoms",
                    sortable: true,
                    tdClass: "column-cognoms align-middle",
                    thClass: "column-cognoms",
                },
                {
                    key: "perfils_id",
                    label: "Perfil",
                    sortable: true,
                    tdClass: "column-perfils_id align-middle",
                    thClass: "column-perfils_id",
                },
                {
                    key: "actiu",
                    label: "Actiu",
                    tdClass: "column-actiu align-middle",
                    thClass: "column-actiu text-center",
                },
                {
                    key: "edit",
                    label: "Accions",
                    tdClass: "column-edit align-middle",
                    thClass: "column-edit",
                },
            ],
            isLoading: true,
            titleModalUsuari: "",
            disabled_ok_button_modal: false,
            errorMessageModal: "",
            showErrorModal: false,
            save_button_title: "Guardar",
            optionsPerfil: [
                { text: "Operador", value: 1 },
                { text: "Supervisor", value: 2 },
                { text: "Administrador", value: 3 },
            ],
            optionsEstat: [
                { text: "Actiu", value: "1" },
                { text: "Inactiu", value: "0" },
            ],
            colorCabezal: "",
            iconoModal: "",
            opcionModal: "",
            msgError: "",
            msgInfo: "",
            btnClassForm: "",
        };
    },
    methods: {
        nouUsuari() {
            (this.usuari.id = ""),
                (this.usuari.usuari = ""),
                (this.usuari.nom = ""),
                (this.usuari.cognoms = ""),
                (this.usuari.contrassenya = ""),
                (this.usuari.perfils_id = "1"),
                (this.usuari.actiu = "1");
            this.repetirContrassenya = "";
        },
        selectUsuaris() {
            this.isLoading = true;
            let me = this;
            axios
                .get("/api/users/")
                .then((response) => {
                    me.usuaris = response.data;
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (me.isLoading = false));
        },
        refresh() {
            this.selectUsuaris();
        },
        setTitleModalUsuari(title) {
            this.titleModalUsuari = title;
        },
        setUsuari(usuari) {
            this.usuari = { ...usuari };
        },
        createUpdateUsuari(event) {
            event.preventDefault();

            let me = this;

            switch (this.opcionModal) {
                case 1:
                    if (me.repetirContrassenya !== me.usuari.contrassenya) {
                        me.msgError =
                            "Les contrasenyes no coincideixen i no poden estar buides";
                        me.repetirContrassenya = "";
                    } else {
                        console.log(me.usuari.actiu);
                        axios
                            .post("/api/users/", me.usuari)
                            .then(function (response) {
                                console.log(response);
                                me.selectUsuaris();
                                me.msgError = "";
                                me.msgInfo =
                                    "Usuari " +
                                    me.usuari.usuari +
                                    " afegit correctament";
                                console.log(me.msgInfo);

                                me.$bvModal.hide("modal-usuari");
                            })
                            .catch(function (error) {
                                console.log(error.status);
                                console.log(error.response.data);
                                me.msgError = error.response.data.error;
                                me.msgInfo = "";
                                console.log = msgError;
                            });
                    }

                    break;
                case 2:
                    console.table(this.usuari);
                    console.log("modificando usuario");

                    axios
                        .post(`/api/users/put/update/${this.usuari.id}`, this.usuari)
                        .then((response) => {
                            if (response.status === 201) {
                                me.save_button_title = "Editar";

                                me.fetchUsuaris();

                                me.$bvModal.hide("modal-usuari");
                            }
                        })
                        .catch((error) => {
                            console.log(error.status);
                            console.log(error.response.data);
                            me.msgError = error.response.data.error;
                            me.msgInfo = "";
                            console.log = msgError;
                        });

                    break;
                case 3:
                   console.table(this.usuari);
                    console.log("modificando password usuario");

                    axios
                        .post(`/api/users/put/updatePassword/${this.usuari.id}`, this.usuari)
                        .then((response) => {
                            if (response.status === 201) {
                                me.save_button_title = "Editar";

                                me.fetchUsuaris();

                                me.$bvModal.hide("modal-usuari");
                            }
                        })
                        .catch((error) => {
                            console.log(error.status);
                            console.log(error.response.data);
                            me.msgError = error.response.data.error;
                            me.msgInfo = "";
                            console.log = msgError;
                        });

                    break;
            }
        },
        resetModal() {
            this.setUsuari({
                id: -1,
                usuari: "",
                nom: "",
                cognoms: "",
                contrassenya: "",
                perfils_id: "",
                actiu: true,
            });
            this.disabled_ok_button_modal = false;
            this.errorMessageModal = "";
            this.showErrorModal = false;
        },
        colorCabezalCrearUsuari() {
            this.colorCabezal = "header-class-nou-usuari";
            this.iconoModal = "fas fa-user-circle";
            this.save_button_title = "Crear usuari";
            this.opcionModal = 1;
            this.msgError = "";
            this.msgInfo = "";
            this.btnClassForm = "success";

            console.log(this.usuari);
        },
        colorCabezalEditarUsuari() {
            this.colorCabezal = "header-class-editar-usuari";
            this.iconoModal = "fas fa-edit";
            this.save_button_title = "Modificar usuari";
            this.opcionModal = 2;
            this.msgError = "";
            this.msgInfo = "";
            this.btnClassForm = "warning";

            console.log(this.usuari);
        },
        colorCabezalEditarContrasenya() {
            this.colorCabezal = "header-class-editar-contrasenya";
            this.iconoModal = "fa-solid fa-key";
            this.save_button_title = "Cambiar contrasenya usuari";
            this.opcionModal = 3;
            this.usuari.contrassenya = "";
            this.msgError = "";
            this.msgInfo = "";
            this.btnClassForm = "dark";

            console.log(this.usuari);
        },
        handleOk(event) {
            event.preventDefault();
            document.querySelector("#btn-submit-form-user").click();
        },
        fetchUsuaris(page = 1) {
            let _this = this;

            axios
                .get(`api/users?page=${page}`)
                .then((response) => {
                    _this.usuaris = response.data;
                })
                .catch((error) => {
                    console.error(error, error.response.data);
                })
                .finally(() => {
                    _this.isLoading = false;
                });
        },
    },
    created() {
        //this.selectUsuaris();
        this.fetchUsuaris();
    },
    refresh() {
        this.selectUsuaris();
    },
    mounted() {
        document.title = "Usuaris - ibroggi";
    },
    computed: {
        validationUsuari() {
            return this.usuari.usuari !== "";
        },
        validationNom() {
            return this.usuari.nom !== "";
        },
        validationCognoms() {
            return this.usuari.cognoms !== "";
        },
        validationContrassenya() {
            return this.usuari.contrassenya !== "";
        },
        validationRepetirContrassenya() {
            return this.repetirContrassenya !== "";
        },
    },
};
</script>

<style scoped>
.show-card {
    background-color: white;
    border: 1px;
    box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}
.botones {
    margin-bottom: 20px;
}
.centrar-carga {
    width: 100%;
    text-align: center;
    justify-content: center;
}
.principal {
    padding: 15px;
}
::v-deep .column-usuari .column-nom .column-cognoms {
    width: 25%;
    vertical-align: middle;
}
::v-deep .column-perfils_id .column-actiu .column-id {
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

::v-deep .header-class-nou-usuari {
    background: rgb(205, 247, 225);
}
::v-deep .header-class-editar-usuari {
    background: rgb(255, 250, 180);
}
::v-deep .header-class-editar-contrasenya {
    background: rgb(218, 218, 218);
}
</style>
