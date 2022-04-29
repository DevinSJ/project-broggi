<template>
    <main class="row d-flex justify-content-center align-items-center h-100" style="padding-bottom: 4rem !important;">
        <b-card
            class="col-lg-4 col-md-8 col-sm-8 p-4 shadow-lg user-select-none"
            no-body
        >
            <svg-vue icon="logo" class="card-img mb-4"/>
            <b-card-body class="p-0">
                <b-form @submit.prevent="login">
                    <div class="form-floating user-select-none">
                        <b-form-input
                            id="usuari"
                            type="text"
                            placeholder="Usuari"
                            v-model="user.username"
                            required
                        />
                        <label class="user-select-none" for="input-user">
                            Usuari
                        </label>
                    </div>
                    <div class="form-floating mt-4 user-select-none">
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
                                    (!showPassword ? 'fa-eye' : 'fa-eye-slash')
                                "
                            ></i>
                        </span>
                        <b-form-input
                            id="contrassenya"
                            :type="!showPassword ? 'password' : 'text'"
                            placeholder="Contrasenya"
                            class="input-password"
                            v-model="user.password"
                            required
                        />
                        <label class="user-select-none" for="input-password">
                            Contrasenya
                        </label>
                    </div>
                    <label class="text-danger user-select-none ml-2 my-4">
                        <i
                            v-if="errorMessage"
                            class="fa-solid fa-circle-exclamation mr-2"
                        ></i>
                        {{ errorMessage }}
                    </label>
                    <b-button
                        type="submit"
                        variant="primary"
                        class="w-100"
                        :disabled="isLoading"
                    >
                        <svg-vue v-show="isLoading" icon="spinner" width="20" />
                        <span v-show="!isLoading">Accedir</span>
                    </b-button>
                </b-form>
            </b-card-body>
        </b-card>
    </main>
</template>

<script>
export default {
    mounted() {
        document.title = "Login - Broggi";
    },
    data() {
        return {
            showPassword: false,
            errorMessage: "",
            user: {
                username: "",
                password: "",
                _token: document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            isLoading: false,
        };
    },
    methods: {
        login() {
            if (this.user.username && this.user.password) {
                this.isLoading = true;

                let me = this;

                axios
                    .post("/login", this.user)
                    .then(function (data) {
                        if (data.status === 200) {
                            window.location.href = data.data.home;
                        } else {
                            me.errorMessage =
                                "Usuari o contrasenya incorrecte.";

                            console.error(data);

                            me.isLoading = false;
                        }
                    })
                    .catch(function (error) {
                        me.errorMessage = "Usuari o contrasenya incorrecte.";

                        console.error(error);

                        me.isLoading = false;
                    });
            } else {
                this.errorMessage = "Has d'omplir tots els camps.";
            }
        },
    },
};
</script>
