<template>
    <div>
        <b-modal
            ref="profileModal"
            size="m"
            :header-class="bgHeader"
            :hide-footer="isLoading"
            @hidden="closeModal"
        >
            <template #modal-header>
                <h3>
                    <i class="fa-solid fa-key mr-2"></i> Canviar contrasenya
                </h3>
            </template>

            <b-form
                v-if="!isLoading"
                ref="form"
                @submit.prevent="handleSubmit"
                aria-autocomplete="false"
            >
                <div class="form-floating user-select-none mb-4">
                    <span
                        @click="showCurrent = !showCurrent"
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
                                (!showCurrent
                                    ? 'fa-eye mr-4 '
                                    : 'fa-eye-slash mr-4 ')
                            "
                        ></i>
                    </span>
                    <b-form-input
                        id="input-actual"
                        :type="!showCurrent ? 'password' : 'text'"
                        placeholder="Contrasenya"
                        v-model="pass.current"
                        required
                        :state="validationCurrent"
                    />
                    <label class="user-select-none" for="input-actual">
                        Contrasenya actual
                    </label>
                </div>

                <div class="form-floating user-select-none mb-4">
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
                        id="input-contrasenya"
                        :type="!showPassword ? 'password' : 'text'"
                        placeholder="Contrasenya"
                        v-model="pass.contrassenya"
                        required
                        :state="validationContrassenya"
                    />
                    <label class="user-select-none" for="input-contrasenya">
                        Nova contrasenya
                    </label>
                </div>

                <div class="form-floating user-select-none mb-2">
                    <span
                        @click="showRepeat = !showRepeat"
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
                                (!showRepeat
                                    ? 'fa-eye mr-4 '
                                    : 'fa-eye-slash mr-4 ')
                            "
                        ></i>
                    </span>
                    <b-form-input
                        id="input-repeat"
                        :type="!showRepeat ? 'password' : 'text'"
                        placeholder="Contrasenya"
                        v-model="pass.repeat"
                        required
                        :state="validationRepeat"
                    />
                    <label class="user-select-none" for="input-repeat">
                        Repetir contrasenya
                    </label>
                </div>
            </b-form>
            <div v-else class="loading-spinner d-flex justify-content-center">
                <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
            </div>

            <template v-if="!isLoading" #modal-footer>
                <button
                    type="button"
                    class="btn btn-secondary"
                    title="Tancar"
                    @click="closeModal"
                >
                    Tancar
                </button>
                <button
                    type="button"
                    class="btn btn-primary"
                    title="Guardar"
                    @click="handleOk"
                >
                    Guardar
                </button>
            </template>
        </b-modal>
        <b-modal
            id="modalCorrect"
            ref="modalCorrect"
            body-class="myModal"
            size="sm"
            @show="timer"
            hide-footer
            hide-header
            centered
        >
            <i class="fas fa-check-circle fa-2xl ok"></i>
            <span>Contrasenya modificada correctament.</span>
        </b-modal>
    </div>
</template>

<script>
export default {
    props: ["user"],
    mounted() {
        this.$refs["profileModal"].show();
        this.bgHeader = "bgHeaderClass";
    },
    computed: {
        validationContrassenya() {
            return this.pass.contrassenya !== "";
        },
        validationCurrent() {
            return this.pass.current !== "";
        },
        validationRepeat() {
            return (
                this.pass.repeat !== "" &&
                this.pass.repeat == this.pass.contrassenya
            );
        },
    },
    data() {
        return {
            usuario: this.user,
            pass: {
                current: "",
                contrassenya: "",
                repeat: "",
            },
            validatorRepeat: "",
            validatorCurrent: "",
            bgHeader: "",
            currentState: null,
            passState: null,
            repeatState: null,
            isLoading: false,
            showCurrent: false,
            showPassword: false,
            showRepeat: false,
            eyeStyle: "top: 53%; right: 30px; transform: translateY(-50%)",
            eyeStyle2: "top: 83%; right: 30px; transform: translateY(-50%)",
        };
    },
    methods: {
        closeModal() {
            this.$emit("hideModalProfile");
            this.$refs["profileModal"].hide();
        },
        sendData() {
            this.checkPassword();
        },
        checkPassword() {
            this.isLoading = true;

            let me = this;

            axios
                .post(
                    "api/users/changePassword/" +
                        me.usuario.id +
                        "?current=" +
                        me.pass.current +
                        "&contrassenya=" +
                        me.pass.contrassenya +
                        "&repeat=" +
                        me.pass.repeat
                )
                .then((response) => {
                    if (response.status === 200) {
                        me.$refs["modalCorrect"].show();
                    }
                })
                .catch((error) => {
                    console.error(error);

                    me.currentState = false;

                    me.validatorCurrent = "La contrasenya actual és incorrecte.";
                })
                .finally(() => {
                    me.isLoading = false;
                });
        },
        timer() {
            setTimeout(() => {
                this.$refs["modalCorrect"].hide();
                this.closeModal();
            }, 2000);
        },
        handleSubmit() {
            // Exit when the form isn't valid
            if (!this.checkFormValidity()) {
                return;
            }
            // Hide the modal manually
            this.$nextTick(() => {
                this.sendData();
            });
        },
        checkFormValidity() {
            this.currentState = this.pass.current.length > 0 ? true : false;
            this.passState = this.pass.contrassenya.length > 0 ? true : false;
            this.repeatState =
                this.pass.repeat.length > 0 &&
                this.pass.repeat == this.pass.contrassenya
                    ? true
                    : false;

            if (this.passState && !this.repeatState) {
                this.validatorRepeat = "Les contrasenyes no coincideixen.";
            }
            if (this.pass.repeat.length < 1) {
                this.validatorRepeat = "Camp obligatori.";
            }
            if (this.pass.current.length < 1) {
                this.validatorCurrent = "Camp obligatori.";
            }
            let valid = false;
            if (this.currentState && this.passState && this.repeatState) {
                valid = true;
            }
            return valid;
        },
        handleOk(bvModalEvent) {
            // Prevent modal from closing
            bvModalEvent.preventDefault();
            // Trigger submit handler
            this.handleSubmit();
        },
    },
};
</script>

<style scoped>
.ok {
    color: #218838;
}

::v-deep .myModal {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
}

#modalCorrect span {
    margin-top: 20px;
}

::v-deep .bgHeaderClass {
    background: rgb(218, 218, 218);
}
</style>
