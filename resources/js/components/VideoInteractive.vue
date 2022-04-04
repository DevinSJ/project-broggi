<template>
    <b-modal
        ref="modal"
        centered
        title="Video interactiu"
        size="lg"
        modal-class="zoominout"
    >
        <video
            id="video-interactive"
            ref="video"
            class="w-100"
            src="/assets/video/video-interactive.mp4"
         
            @loadeddata="onVideoLoaded"
            loop
        >
            El teu navegador no suporta el video.
        </video>
        <template #modal-footer>
            <div class="d-flex justify-content-center w-100">
                <b-button variant="primary" @click="playPauseVideo" :disabled="isVideoLoaded ? false : true">
                    <i
                        :class="
                            'fa-solid fa-fw fa-' +
                            (isPlaying ? 'pause' : 'play')
                        "
                    ></i>
                </b-button>
                <div class="range-wrap pl-3">
                    <div class="range-value"><span id="valueBubble">00:00</span></div>
                    <b-form-input
                        id="rangeVideo"
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
        </template>
    </b-modal>
</template>

<script>
export default {
    mounted() {},
    data() {
        return {
            isPlaying: false,
            totalDurationInSeconds: 0,
            currentDuration: {
                seconds: 0,
                minutes: 0,
            },
            isVideoLoaded: false
        };
    },
    methods: {
        openModal() {
            this.$refs.modal.show();
        },
        playPauseVideo() {
            if (this.isVideoLoaded) {
                if (!this.isPlaying) {
                    this.$refs.video.play();
                    this.isPlaying = true;
                } else {
                    this.$refs.video.pause();
                    this.isPlaying = false;
                }
            }
        },
        onVideoLoaded() {
            console.log('Video loaded.');

            this.isVideoLoaded = true;

            this.totalDurationInSeconds = this.$refs.video.duration;

            this.$refs.video.currentTime = 60;
            this.$refs.video.play();

            //this.setBubble();
        },
        setBubble() {
            const range = document.querySelector("#rangeVideo");
            const bubble = document.querySelector("#valueBubble");

            if (this.isVideoLoaded) {
                const currentTimeInSeconds = range.value;
                const minValue = range.min ? range.min : 0;
                const maxValue = range.max ? range.max : 100;
                const newValue = Number(((currentTimeInSeconds - minValue) * 100) / (maxValue - minValue));
                const newPosition = 10 - (newValue * 0.2);

                this.currentDuration.seconds = currentTimeInSeconds % 60;
                this.currentDuration.minutes = parseInt(currentTimeInSeconds / 60, 10);

                const numberFormatterTwoDigits = {
                    minimumIntegerDigits: 2,
                    useGrouping: false
                };

                bubble.innerText = `${this.currentDuration.minutes.toLocaleString('en-US', numberFormatterTwoDigits)}:${this.currentDuration.seconds.toLocaleString('en-US', numberFormatterTwoDigits)}`;
                bubble.style.left = `calc(${newValue}% + (${newPosition - 17}px))`;

                console.log(currentTimeInSeconds);

                //this.$refs.video.play();
            }
        },
    },
};
</script>

<style scope>
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

.zoominout {
    transform: scale(0);
    transition: all 0.4s ease-in-out;
    display: block !important;
}

.zoominout.show {
    transform: scale(1);
    transition: all 0.4s ease-in-out;
}
</style>
