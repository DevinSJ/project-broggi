<template>
    <main>
        <div class="row">
            <div class="col-xl-8 p-2">
                <b-card
                    class="hide"
                    header-bg-variant="primary"
                    header-text-variant="white"
                >
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
                            <form-call ref="formCall" @filterExpedientsCall="filterExpedientsCall"></form-call>
                        </div>
                    </div>
                </b-card>
            </div>
            <div class="col-xl-4 p-2">
                <b-card
                    class="hide"
                    body-class="p-0"
                    header-bg-variant="primary"
                    header-text-variant="white"
                    footer-bg-variant="primary"
                    footer-text-variant="white"
                >
                    <template #header>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold my-auto">
                                Llistat d'expedients relacionat
                            </h6>
                            <i id="expedients-call-help" class="fa-solid fa-circle-question"></i>
                            <b-tooltip target="expedients-call-help" triggers="hover">
                                Els criteris que es fan fer servir per trobar un expedient relacionat són:
                                <ul class="text-justify">
                                    <li>Trucades del mateix telèfon.</li>
                                    <li>Trucades de la mateixa localització<br/>(Si es fora catalunya, mateixa provincia o municipi).</li>
                                    <li>Expedients amb la mateixa tipificació.</li>
                                </ul>
                                <span class="font-weight-bold">ELS EXPEDIENTS AMB EL ESTAT 'TANCAT' NO ES MOSTRARÁ EN LA LLISTA.</span>
                            </b-tooltip>
                        </div>
                    </template>
                    <template #footer>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold my-auto">
                                Última actualització:
                                {{ lastUpdateTimeExpedientsCall }}
                            </h6>
                            <button
                                class="btn btn-sm btn-secondary my-auto"
                                title="Refrescar llista d'expedients"
                                @click="refreshListExpedientsCall"
                            >
                                <i class="fa-solid fa-arrows-rotate"></i>
                            </button>
                        </div>
                    </template>
                    <expedients-call ref="expedientsCall" @finishFetchExpedientsCall="finishFetchExpedientsCall"/>
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
            lastUpdateTimeExpedientsCall: null,
        };
    },
    methods: {
        submitFormCall(callback) {
            this.$refs.formCall.submitFormCall(callback);
        },
        filterExpedientsCall(filter) {
            this.$refs.expedientsCall.getExpedients(filter);
        },
        refreshListExpedientsCall() {
            this.$refs.formCall.filterExpedientsCall();
        },
        finishFetchExpedientsCall() {
            this.lastUpdateTimeExpedientsCall = moment().locale("es").format("DD/MM/YYYY HH:mm:ss");
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
};
</script>

<style scoped>
#expedients-call-help {
    font-size: 20px;
}
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
