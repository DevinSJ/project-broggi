<template>
    <div class="row d-flex justify-content-center align-items-center h-100">
        <b-card
            class="col-lg-4 col-md-8 col-sm-8 p-4 shadow-lg user-select-none"
            no-body
        >
            <b-card-img src="/assets/img/logo.png" alt="Logo" class="card-img p-4"/>
            <b-card-body class="p-0">
                <b-form
                        action="login"
                        method="POST"
                        >
                    <div class="form-floating user-select-none">
                        <b-form-input
                            id="usuari"
                            type="text"
                            placeholder="Usuari"
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
                    <input type="hidden" name="_token" :value="csrf"/>
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
            csrf:document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            showPassword: false,
            errorMessage: "",
            user:{
                id:"",
                username:"",
                password:""
            }
        };
    },
    methods: {
        

    },
};
</script>
