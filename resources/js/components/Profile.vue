<template>
  <div>
    <b-modal
      ref="profileModal"
      size="m"
      :header-bg-variant="bgHeader"
      :hide-footer="isLoading"
    >
      <template #modal-header>
        <h3>Canviar contrasenya</h3>
      </template>

      <form v-if="!isLoading" ref="form" @submit.stop.prevent="handleSubmit">
        <b-form-group
          label="Contrasenya actual"
          label-for="current-input"
          :invalid-feedback="validatorCurrent"
        >
          <b-form-input
            id="current-input"
            v-model="pass.current"
            type="password"
            :state="currentState"
            required
          ></b-form-input>
        </b-form-group>
        <b-form-group
          label="Nova contrasenya"
          label-for="password-input"
          invalid-feedback="Camp obligatori"
        >
          <b-form-input
            id="password-input"
            v-model="pass.contrassenya"
            :type="!showPassword ? 'password' : 'text'"
            :state="passState"
            required
          />
          <span
            @click="showPassword = !showPassword"
            role="button"
            class="position-absolute"
            style="top: 53%; right: 30px; transform: translateY(-50%)"
          >
            <i
              :class="'fa-solid ' + (!showPassword ? 'fa-eye' : 'fa-eye-slash')"
            ></i>
          </span>
        </b-form-group>
        <b-form-group
          label="Repetir contrasenya"
          label-for="repeat-input"
          :invalid-feedback="validatorRepeat"
        >
          <b-form-input
            id="repeat-input"
            v-model="pass.repeat"
            :type="!showRepeat ? 'password' : 'text'"
            :state="repeatState"
            required
          /><span
            @click="showRepeat = !showRepeat"
            role="button"
            class="position-absolute"
            style="top: 83%; right: 30px; transform: translateY(-50%)"
          >
            <i
              :class="'fa-solid ' + (!showRepeat ? 'fa-eye' : 'fa-eye-slash')"
            ></i>
          </span>
        </b-form-group>
      </form>

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
  mounted() {},
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
      bgHeader: "light",
      currentState: null,
      passState: null,
      repeatState: null,
      isLoading: false,
      showPassword: false,
      showRepeat: false,
    };
  },
  methods: {
    openModal() {
      this.$refs["profileModal"].show();
    },
    closeModal() {
      this.$refs["profileModal"].hide();
      this.pass.current = "";
      this.pass.contrassenya = "";
      this.pass.repeat = "";
      this.currentState = null;
      this.passState = null;
      this.repeatState = null;
    },
    sendData() {
      this.checkPassword();
    },

    checkPassword() {
      let me = this;
      this.isLoading = true;

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
            this.closeModal();
            this.$refs["modalCorrect"].show();
          }
        })
        .catch((error) => {
          this.currentState = false;
          this.validatorCurrent = "La contrasenya actual és incorrecte.";
        })
        .finally(() => {
          this.isLoading = false;
        });
    },

    timer() {
      setTimeout(() => {
        this.$refs["modalCorrect"].hide();
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
</style>
