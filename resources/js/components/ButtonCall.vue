<template>
  <div class="row">
    <div class="col-lg-8 p-2">
      <b-card class="" :class="checkboxValue ? 'show-card' : 'hide-card'">
        <b-card-body>
          <nav class="menu">
            <input
              type="checkbox"
              v-model="checkboxValue"
              class="menu-open"
              name="menu-open"
              id="menu-open"
            />

            <label
              class="menu-open-button"
              for="menu-open"
              id="text-call"
              @click="!checkboxValue ? start() : stop()"
            >
              <i
                :class="
                  'fas ' +
                  (!checkboxValue ? 'fa-phone mr-1' : 'fa-phone-slash mr-1')
                "
              ></i>
              {{ !checkboxValue ? "Iniciar trucada" : "Finalitzar trucada" }}
            </label>
            <div class="form-floating user-select-none menu-item">
              <b-form-input
                class="input-phone"
                type="number"
                name=""
                id="input-phone"
                placeholder="Nº telèfon"
              />
              <label class="user-select-none" for="input-phone"
                >Nº telèfon
              </label>
            </div>

            <div class="form-floating user-select-none menu-item">
              <b-form-input
                class="input-phone"
                type="text"
                name=""
                id="input-code"
                placeholder="Codi de trucada"
                v-model="codigo"
                disabled
              />
              <label class="user-select-none" for="input-phone"
                >Codi de trucada
              </label>
            </div>

            <div class="form-floating user-select-none menu-item m-top">
              <p class="m4">{{ time }}</p>
            </div>
            <div class="form-floating user-select-none menu-item">
              <b-form-input
                class="input-phone"
                type="text"
                name=""
                id="input-date"
                placeholder="Inici de turcada"
                v-model="dateTime"
                disabled
              />
              <label class="user-select-none" for="input-date"
                >Inici de turcada
              </label>
            </div>
          </nav>
          <div class="row">
            <div class="col">
              <form-call
                v-show="checkboxValue == true"
                :checkOpen="checkboxValue"
              ></form-call>
            </div>
          </div>
        </b-card-body>
      </b-card>
    </div>
    <div class="col-lg-4 p-2">
      <b-card :class="checkboxValue ? 'show-card' : 'hide-card'">
        <expedients-call v-show="checkboxValue"></expedients-call>
      </b-card>
    </div>
  </div>
</template>

<script>
import FormCall from "./FormCall.vue";
import ExpedientsCall from "./ExpedientsCall.vue";

export default {
  components: {
    FormCall,
    ExpedientsCall,
  },

  mounted() {},
  data() {
    return {
      checkboxValue: false,
      crono: true,
      time: "00:00:00.000",
      running: false,
      started: null,
      timeBegan: null,
      timeStopped: null,
      stoppedDuration: 0,
      dateTime: '',
      codigo: "LLA4545",
    };
  },
  methods: {
    start() {
      document.querySelector(".input-phone").focus();

      if (this.running) return;

      if (this.timeBegan === null) {
        this.reset();
        this.timeBegan = new Date();
      }

      if (this.timeStopped !== null) {
        this.stoppedDuration += new Date() - this.timeStopped;
      }
      this.started = setInterval(this.clockRunning, 10);
      this.running = true;

      this.getDateTime();
    },
    stop() {
      this.running = false;
      this.timeStopped = new Date();
      clearInterval(this.started);
      this.timeBegan = null;
    },

    reset() {
      this.running = false;
      clearInterval(this.started);
      this.stoppedDuration = 0;
      this.timeBegan = null;
      this.timeStopped = null;
      this.time = "00:00:00.000";
    },

    clockRunning() {
      var currentTime = new Date(),
        timeElapsed = new Date(
          currentTime - this.timeBegan - this.stoppedDuration
        ),
        hour = timeElapsed.getUTCHours(),
        min = timeElapsed.getUTCMinutes(),
        sec = timeElapsed.getUTCSeconds(),
        ms = timeElapsed.getUTCMilliseconds();

      this.time =
        this.zeroPrefix(hour, 2) +
        ":" +
        this.zeroPrefix(min, 2) +
        ":" +
        this.zeroPrefix(sec, 2) +
        "." +
        this.zeroPrefix(ms, 3);
    },

    zeroPrefix(num, digit) {
      var zero = "";
      for (var i = 0; i < digit; i++) {
        zero += "0";
      }
      return (zero + num).slice(-digit);
    },
    getDateTime() {
      let today = new Date().toISOString().split('T')[0];
      this.dateTime = today + '      ' + new Date().toLocaleTimeString();
    },
  },
};
</script>

<style scoped>
.card, .card-body {
    height: 100% !important;
}
a {
  color: inherit;
}

h1,
h2,
h3,
h4 {
  margin: 0;
  margin-bottom: 10px;
  margin-top: 10px;
}

h1 {
  font-size: 3em;
}

.menu {
  filter: url("#shadowed-goo");
  height: 80px;
}

.menu-item {
  background: #f8f9fa;
  border-radius: 5%;
  width: auto;
  height: auto;
  padding: 10px;
  position: absolute;
  top: 15px;
  color: black;
  text-align: center;
  transform: translate3d(0, 0, 0);
  transition: transform ease-out 200ms;
}
.menu-open-button {
  background: #218838;
  border-radius: 5%;
  font-weight: bold;
  padding: 12px;
  padding-inline: 30px;
  position: absolute;
  top: 20px;
  color: white;
  text-align: center;
  transform: translate3d(0, 0, 0);
  transition: transform ease-out 200ms;
}
.menu-open {
  display: none;
}

.menu-item:nth-child(3) {
  transition-duration: 180ms;
  opacity: 0;
}
.menu-item:nth-child(4) {
  transition-duration: 180ms;
  opacity: 0;
}
.menu-item:nth-child(5) {
  transition-duration: 180ms;
  opacity: 0;
}
.menu-item:nth-child(6) {
  transition-duration: 180ms;
  opacity: 0;
}
.menu-open-button {
  z-index: 2;
  transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition-duration: 400ms;
  transform: scale(1.1, 1.1) translate3d(0, 0, 0);
  cursor: pointer;
}
.menu-open-button:hover {
  transform: scale(1.2, 1.2) translate3d(0, 0, 0);
}
.menu-open:checked + .menu-open-button {
  transition-timing-function: linear;
  transition-duration: 200ms;
  transform: scale(0.9, 0.9) translate3d(0, 0, 0);
  background: #ed2c13;
  color: white;
}
.menu-open:checked ~ .menu-item {
  transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
}
.menu-open:checked ~ .menu-item:nth-child(3) {
  transition-duration: 190ms;
  transform: translate3d(210px, 0, 0);
  opacity: 1;
}
.menu-open:checked ~ .menu-item:nth-child(4) {
  transition-duration: 290ms;
  transform: translate3d(430px, 0, 0);
  opacity: 1;
}
.menu-open:checked ~ .menu-item:nth-child(5) {
  transition-duration: 390ms;
  transform: translate3d(1000px, 0, 0);
  opacity: 1;
}
.menu-open:checked ~ .menu-item:nth-child(6) {
  transition-duration: 390ms;
  transform: translate3d(700px, 0, 0);
  opacity: 1;
}
.input-phone {
  height: 10px !important;
  border: 0px;
}
.input-code {
  background-color: white;
}
.input-phone::-webkit-outer-spin-button,
.input-phone::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.m4 {
  margin: 4px;
}
.m-top {
  margin-top: 3px;
}

.hide-card {
  background-color: transparent;
  border: 0;
  box-shadow: 0px;
}

.show-card {
  background-color: white;
  border: 1px;
  box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}

.w-card {
  width: 60%;
}
.w-card2 {
  width: 40%;
}
</style>
