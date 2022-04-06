<template>
    <main>
        <div class="row">
            <div class="col-xl-8 p-2">
                <b-card class="hide" header-bg-variant="primary" header-text-variant="white">
                    <template #header>
                        <div class="d-flex">
                            <h6 class="font-weight-bold my-auto">
                                Formulari de la carta trucada
                            </h6>
                        </div>
                    </template>
                    <div class="row">
                        <div class="col-lg-4 my-1">
                            <div class="form-floating user-select-none">
                                <b-form-input
                                    type="text"
                                    id="input-code"
                                    placeholder="Codi de trucada"
                                    v-model="codeCall"
                                    disabled
                                />
                                <label class="user-select-none" for="input-code"
                                    >Codi de trucada</label
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 my-1">
                            <div class="form-floating user-select-none">
                                <b-form-input
                                    type="text"
                                    id="input-ini-call"
                                    placeholder="Inici de trucada"
                                    v-model="callDateTimeIni"
                                    disabled
                                />
                                <label
                                    class="user-select-none"
                                    for="input-ini-call"
                                    >Inici de trucada</label
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 my-1 text-center">
                            <h5
                                class="font-weight-bold user-select-none d-block"
                            >
                                Duració de la trucada
                            </h5>
                            <h5>{{ time }}</h5>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="row">
                        <div class="col">
                            <form-call></form-call>
                        </div>
                    </div>
                </b-card>
            </div>
            <div class="col-xl-4 p-2">
                <b-card class="hide" body-class="p-0" header-bg-variant="primary" header-text-variant="white">
                    <template #header>
                        <div class="d-flex">
                            <h6 class="font-weight-bold my-auto">
                                Llistat d'expedients relacionat
                            </h6>
                        </div>
                    </template>
                    <expedients-call @loadModalExpedient="loadModalExpedient"></expedients-call>
                </b-card>
            </div>
        </div>
    </main>
</template>

<script>
import moment from "moment";

export default {
    mounted() {
        const cards = [...document.querySelectorAll(".card")];

        cards.reverse().forEach((card, index) => {
            setTimeout(() => {
                card.classList.remove("hide");
                card.classList.add("show");
            }, 10 * index);
        });

        this.startCrono();

        this.generateCodeCall();
    },
    data() {
        return {
            crono: true,
            time: "00:00:00",
            running: false,
            intervalCrono: null,
            timeBegan: null,
            timeStopped: null,
            stoppedDuration: 0,
            callDateTimeIni: "",
            codeCall: "",
        };
    },
    methods: {
        loadModalExpedient(expedient) {
            this.$emit('loadModalExpedient', expedient);
        },
        generateCodeCall() {
            let today = moment().locale("es");

            this.callDateTimeIni = today.format("DD/MM/yyyy HH:mm:ss");

            this.codeCall = "CA-" + today.format("DDMMyyyyHHmmssS");
        },
        startCrono() {
            if (this.running) return;

            if (this.timeBegan === null) {
                this.resetCrono();
                this.timeBegan = new Date();
            }

            if (this.timeStopped !== null) {
                this.stoppedDuration += new Date() - this.timeStopped;
            }

            this.intervalCrono = setInterval(this.clockRunning, 10);
            this.running = true;
        },
        stopCrono() {
            this.running = false;

            this.timeStopped = new Date();

            clearInterval(this.intervalCrono);

            this.timeBegan = null;
        },
        resetCrono() {
            this.running = false;
            clearInterval(this.intervalCrono);
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
                sec = timeElapsed.getUTCSeconds();

            this.time =
                this.zeroPrefix(hour, 2) +
                ":" +
                this.zeroPrefix(min, 2) +
                ":" +
                this.zeroPrefix(sec, 2);
        },
        zeroPrefix(num, digit) {
            var zero = "";

            for (var i = 0; i < digit; i++) {
                zero += "0";
            }

            return (zero + num).slice(-digit);
        },
        isEmpty(value) {
            return value.trim().length === 0;
        },
    },
    computed: {},
};
</script>

<style scoped>
.card {
    transition: all 0.8s ease;
}
.card.hide {
    left: -500%;
}
.card.show {
    left: 0;
}
</style>
