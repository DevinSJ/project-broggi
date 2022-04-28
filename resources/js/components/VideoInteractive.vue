<template>
    <b-modal
        ref="modal"
        centered
        title="Video interactiu"
        size="huge"
        modal-class="zoominout"
        hide-footer
    >
        <div class="row">
            <div class="col-lg-7 p-2">
                <video
                    ref="video"
                    src="/api/video-interactive"
                    type="video/mp4"
                    class="w-100"
                    @loadeddata="onVideoLoaded"
                    @timeupdate="onTimeUpdateVideo"
                >
                    El teu navegador no suporta el video.
                </video>
                <div class="d-flex justify-content-center w-100 mt-2">
                    <b-button
                        variant="primary"
                        @click="playPauseVideo"
                        :disabled="isVideoLoaded ? false : true"
                    >
                        <i
                            :class="
                                'fa-solid fa-fw fa-' +
                                (isPlaying ? 'pause' : 'play')
                            "
                        ></i>
                    </b-button>
                    <div class="range-wrap pl-3">
                        <div class="range-value">
                            <span ref="valueBubble">00:00</span>
                        </div>
                        <b-form-input
                            ref="rangeVideo"
                            @input="setBubble"
                            type="range"
                            step="1"
                            value="0"
                            min="0"
                            :max="totalDurationInSeconds"
                            :disabled="isVideoLoaded ? false : true"
                        ></b-form-input>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-2">
                <b-list-group
                    ref="listPartsVideo"
                    v-if="!isLoading"
                    class="listPartsVideo"
                >
                    <b-list-group-item
                        :ref="`partVideo${partVideo.id}`"
                        :active="partVideo.id === currentPartVideo.id"
                        href="#"
                        v-for="(partVideo, index) in partsVideo"
                        :key="index"
                        @click="goTo(partVideo)"
                        class="d-flex justify-content-between align-items-center font-weight-bold"
                    >
                        {{ index + " - " + partVideo.description }}
                        <b-badge variant="danger" style="font-size: 12px" pill>
                            {{
                                getMinutesSeconds(partVideo.timeInSecondsIni) +
                                " - " +
                                getMinutesSeconds(partVideo.timeInSecondsFin)
                            }}
                        </b-badge>
                    </b-list-group-item>
                </b-list-group>
                <div v-else class="d-flex h-100">
                    <svg-vue
                        icon="spinner"
                        class="mx-auto my-auto"
                        width="100"
                    />
                </div>
            </div>
        </div>
    </b-modal>
</template>

<script>
export default {
    data() {
        return {
            isPlaying: false,
            totalDurationInSeconds: 0,
            currentDuration: {
                seconds: 0,
                minutes: 0,
            },
            isVideoLoaded: false,
            partsVideo: [],
            currentPartVideo: null,
            lastPartVideo: null,
            isLoading: true,
        };
    },
    methods: {
        openModal() {
            this.$refs.modal.show();
        },
        playPauseVideo() {
            if (this.isVideoLoaded) {
                if (!this.isPlaying) {
                    if (
                        this.totalDurationInSeconds ===
                        Math.round(this.$refs.video.currentTime)
                    )
                        this.$refs.video.currentTime = 0;

                    this.$refs.video.play();
                    this.isPlaying = true;
                } else {
                    this.$refs.video.pause();
                    this.isPlaying = false;
                }
            }
        },
        onVideoLoaded() {
            this.isVideoLoaded = true;

            this.totalDurationInSeconds = Math.round(this.$refs.video.duration);

            this.partsVideo = [
                {
                    id: 1,
                    description: "INICI",
                    timeInSecondsIni: 0,
                    timeInSecondsFin: 3,
                },
                {
                    id: 2,
                    description: "RECEPCIÓ DE LA TRUCADA",
                    timeInSecondsIni: 3,
                    timeInSecondsFin: 9,
                },
                {
                    id: 3,
                    description: "112 EN QUE PUC AJUDARTE",
                    timeInSecondsIni: 9,
                    timeInSecondsFin: 15,
                },
                {
                    id: 4,
                    description: "LA TRUCADA ES PROCEDENT",
                    timeInSecondsIni: 15,
                    timeInSecondsFin: 20,
                },
                {
                    id: 5,
                    description: "IDENTIFICACIÓ DE LA TRUCADA",
                    timeInSecondsIni: 20,
                    timeInSecondsFin: 24,
                },
                {
                    id: 6,
                    description: "PROCEDIMENT ESPECÍFIC",
                    timeInSecondsIni: 24,
                    timeInSecondsFin: 29,
                },
                {
                    id: 7,
                    description: "COMPLEMENTAR NOTA COMUNA",
                    timeInSecondsIni: 29,
                    timeInSecondsFin: 35,
                },
                {
                    id: 8,
                    description: "TIPIFICAR",
                    timeInSecondsIni: 35,
                    timeInSecondsFin: 39,
                },
                {
                    id: 9,
                    description: "VALIDAR NOTA COMUNA",
                    timeInSecondsIni: 39,
                    timeInSecondsFin: 43,
                },
                {
                    id: 10,
                    description: "LOCALITZAR INCIDENT",
                    timeInSecondsIni: 43,
                    timeInSecondsFin: 48,
                },
                {
                    id: 11,
                    description: "CREACIÓ INCIDENT",
                    timeInSecondsIni: 48,
                    timeInSecondsFin: 57,
                },
                {
                    id: 12,
                    description: "GESTIÓ AVISOS",
                    timeInSecondsIni: 57,
                    timeInSecondsFin: 63,
                },
                {
                    id: 13,
                    description: "INCIDENT RELLEVANT",
                    timeInSecondsIni: 63,
                    timeInSecondsFin: 68,
                },
                {
                    id: 14,
                    description: "AVISAR SUPERVISOR O COORDINADOR",
                    timeInSecondsIni: 68,
                    timeInSecondsFin: 75,
                },
                {
                    id: 15,
                    description: "AVISAR CECAT",
                    timeInSecondsIni: 75,
                    timeInSecondsFin: 81,
                },
                {
                    id: 16,
                    description: "TANCAMENT",
                    timeInSecondsIni: 81,
                    timeInSecondsFin: 87,
                },
                {
                    id: 17,
                    description: "AMPLIACIÓ RECLAMACIÓ",
                    timeInSecondsIni: 87,
                    timeInSecondsFin: 94,
                },
                {
                    id: 18,
                    description: "AMPLIACIÓ NOTA COMUNA",
                    timeInSecondsIni: 94,
                    timeInSecondsFin: 100,
                },
                {
                    id: 19,
                    description: "TRUCADA NO PROCEDENT",
                    timeInSecondsIni: 100,
                    timeInSecondsFin: 107,
                },
                {
                    id: 20,
                    description: "GESTIÓ AVISOS",
                    timeInSecondsIni: 107,
                    timeInSecondsFin: 115,
                },
                {
                    id: 21,
                    description: "PROCEDIMENT ESPECÍFIC",
                    timeInSecondsIni: 115,
                    timeInSecondsFin: Math.round(this.$refs.video.duration),
                },
            ];

            this.currentPartVideo = this.partsVideo[0];

            this.isLoading = false;
        },
        setBubble(isDrag = true) {
            const range = this.$refs.rangeVideo.$el;
            const bubble = this.$refs.valueBubble;

            if (this.isVideoLoaded) {
                const currentTimeInSeconds = range.value;
                const minValue = range.min ? range.min : 0;
                const maxValue = range.max ? range.max : 100;
                const newValue = Number(
                    ((currentTimeInSeconds - minValue) * 100) /
                        (maxValue - minValue)
                );
                const newPosition = 10 - newValue * 0.2;

                bubble.innerText = this.getMinutesSeconds(currentTimeInSeconds);

                bubble.style.left = `calc(${newValue}% + (${
                    newPosition - 17
                }px))`;

                if (isDrag) this.$refs.video.currentTime = currentTimeInSeconds;
            }
        },
        onTimeUpdateVideo() {
            if (this.$refs.rangeVideo) {
                this.$refs.rangeVideo.$el.value = this.$refs.video.currentTime;

                this.setBubble(false);

                this.currentPartVideo = this.partsVideo.find(
                    (partVideo) =>
                        partVideo.timeInSecondsIni <=
                            this.$refs.video.currentTime &&
                        partVideo.timeInSecondsFin > this.$refs.video.currentTime
                );

                if (
                    this.currentPartVideo &&
                    this.currentPartVideo !== this.lastPartVideo
                ) {
                    let position =
                        this.$refs[`partVideo${this.currentPartVideo.id}`][0].$el
                            .offsetTop;

                    this.$refs.listPartsVideo.scrollTo({
                        top: position,
                        behavior: "smooth",
                    });

                    this.lastPartVideo = this.currentPartVideo;
                }

                if (
                    this.totalDurationInSeconds ===
                    Math.round(this.$refs.video.currentTime)
                ) {
                    this.$refs.video.pause();
                    this.isPlaying = false;
                }
            }
        },
        goTo(partVideo) {
            this.$refs.video.currentTime = partVideo.timeInSecondsIni;
            this.$refs.rangeVideo.$el.value = this.$refs.video.currentTime;

            this.setBubble(false);
        },
        getMinutesSeconds(timeInSeconds) {
            let seconds = timeInSeconds % 60;
            let minutes = parseInt(timeInSeconds / 60, 10);

            const numberFormatterTwoDigits = {
                minimumIntegerDigits: 2,
                useGrouping: false,
            };

            return `${minutes.toLocaleString(
                "en-US",
                numberFormatterTwoDigits
            )}:${seconds.toLocaleString("en-US", numberFormatterTwoDigits)}`;
        },
    },
};
</script>

<style scoped>
video {
    max-height: 500px;
}
input[type="range"] {
    -webkit-appearance: none;
    width: 100%;
}
input[type="range"]:focus {
    outline: none;
}
input[type="range"]::-webkit-slider-runnable-track {
    width: 100%;
    height: 4px;
    cursor: pointer;
    animation: 0.2s;
    background: #03a9f4;
    border-radius: 25px;
}

input[type="range"]::-webkit-slider-thumb {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0 0 4px 0 rgba(0, 0, 0, 1);
    cursor: pointer;
    -webkit-appearance: none;
    margin-top: -8px;
}
input[type="range"]:focus::-webkit-slider-runnable-track {
    background: #03a9f4;
}
.range-wrap {
    width: 100%;
}
.range-value {
    position: relative;
    top: -5%;
}
.range-value span {
    width: 35px;
    height: 24px;
    line-height: 24px;
    text-align: center;
    background: #03a9f4;
    color: #fff;
    font-size: 12px;
    display: block;
    left: -0.9%;
    top: -5px;
    position: relative;
    border-radius: 6px;
}
.listPartsVideo {
    max-height: 550px;
    overflow-y: scroll;
}
.range-value span:before {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-top: 10px solid #03a9f4;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    margin-top: -1px;
}
::v-deep .modal .modal-huge {
    max-width: 90%;
    width: 90%;
}
</style>
