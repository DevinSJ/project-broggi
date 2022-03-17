<template>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <b-card
            class="col-lg-4 col-md-8 col-sm-8 p-4 shadow-lg user-select-none"
            no-body
        >
            <b-card-img src="/assets/img/logo.png" alt="Logo" class="card-img p-4"/>
            <b-card-body class="p-0">
                <b-form @submit.prevent="login()">
                    <div class="form-floating user-select-none">
                        <b-form-input
                            id="input-user"
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
                            id="input-password"
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
                    <b-button type="submit" variant="primary" class="w-100">
                        Accedir
                    </b-button>
                </b-form>
            </b-card-body>
        </b-card>
    </div>
</template>

<script>
export default {
    mounted() {},
    data() {
        return {
            showPassword: false,
            errorMessage: "",
            user: {
                username: "",
                password: ""
            }
        };
    },
    methods: {
        login() {
            if (this.user.username && this.user.password) {
                let me = this;

                axios.post('/users/login', this.user)
                    .then(function (data) {
                        if (data.status === 200) {
                            window.location.href = data.home;
                        } else {
                            me.errorMessage = "Usuari o contrasenya incorrecte."
                            console.error(error);
                        }
                    })
                    .catch(function (error) {
                        me.errorMessage = "Usuari o contrasenya incorrecte."
                        console.error(error);
                    });
            } else {
                this.errorMessage = "Has d'omplir tots els camps.";
            }
        },
    },
};
</script>
