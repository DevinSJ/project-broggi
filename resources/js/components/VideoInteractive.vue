<template>
    <b-modal ref="modal" @shown="onShownModal" centered hide-footer title="Video interactiu" size="lg" modal-class="zoominout">
        <video ref="video" class="w-100" src="/assets/video/video-interactive.mp4" type="video/mp4">
            El teu navegador no suporta el video.
        </video>
        <div class="d-flex align-items-end">
            <b-button variant="primary" @click="playPauseVideo">
                <i :class="'fa-solid fa-fw fa-' + (isPlaying ? 'pause' : 'play')"></i>
            </b-button>
            <div class="range-wrap">
                <div class="range-value" id="rangeV"></div>
                <b-form-input id="rangeVideo" @input="setBubble" type="range" class="ml-2" step="1" value="0" min="0" :max="duration.totalSeconds"></b-form-input>
            </div>
        </div>
    </b-modal>
</template>

<script>
export default {
    mounted() {
        const allRanges = document.querySelectorAll(".range-wrap");
        allRanges.forEach(wrap => {
            const range = wrap.querySelector(".range");
            const bubble = wrap.querySelector(".bubble");

            range.addEventListener("input", () => {
                setBubble(range, bubble);
            });
            setBubble(range, bubble);
        });

        function setBubble(range, bubble) {

        }
    },
    data() {
        return {
            isPlaying: false,
            duration: {
                seconds: 0,
                minutes: 0,
                totalSeconds: 0
            }
        };
    },
    methods: {
        onShownModal() {
            let duration = this.$refs.video.duration;

            this.duration.totalSeconds = duration;
            this.duration.seconds = duration % 60;
            this.duration.minutes = parseInt(duration / 60, 10);
        },
        openModal() {
            this.$refs.modal.show();
        },
        playPauseVideo() {
            if (!this.isPlaying)
            {
                this.$refs.video.play();
                this.isPlaying = true;
            }
            else
            {
                this.$refs.video.pause();
                this.isPlaying = false;
            }
        },
        setBubble(e) {
            console.log(e.currentTarget);
            
            const range = e.currentTarget;
            const bubble = range.querySelector('.bubble');

            const val = range.value;
            const min = range.min ? range.min : 0;
            const max = range.max ? range.max : 100;
            const newVal = Number(((val - min) * 100) / (max - min));
            bubble.innerHTML = val;

            // Sorta magic numbers based on size of the native UI thumb
            bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
        }
    }
}
</script>

<style scope>
input[type=range] {
  -webkit-appearance: none;
  width: 100%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 4px;
  cursor: pointer;
  animate: 0.2s;
  background: #03a9f4;
  border-radius: 25px;
}
input[type=range]::-webkit-slider-thumb {
  height: 20px;
  width: 20px;
  border-radius: 50%;
  background: #fff;
  box-shadow: 0 0 4px 0 rgba(0,0,0, 1);
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -8px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #03a9f4;
}
.range-wrap{
  width: 100%;
}
.range-value{
  position: absolute;
  top: -50%;
}
.range-value span{
  width: 30px;
  height: 24px;
  line-height: 24px;
  text-align: center;
  background: #03a9f4;
  color: #fff;
  font-size: 12px;
  display: block;
  position: absolute;
  left: 50%;
  transform: translate(-50%, 0);
  border-radius: 6px;
}
.range-value span:before{
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
    transition: all .4s ease-in-out;
    display: block !important;
}

.zoominout.show {
    transform: scale(1);
    transition: all .4s ease-in-out;
}
</style>
