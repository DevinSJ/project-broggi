<template>
  <div>
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
                :class="'fa-solid fa-fw fa-' + (isPlaying ? 'pause' : 'play')"
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
              :disabled="showQuestion"
              class="
                d-flex
                justify-content-between
                align-items-center
                font-weight-bold
              "
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
            <svg-vue icon="spinner" class="mx-auto my-auto" width="100" />
          </div>
        </div>
      </div>
          <!-- div de preguntas del video -->
    <div v-if="showQuestion" class="divQuestion">
      <h1>{{ this.question }}</h1>
      <div class="buttonsQuestion">
          <button id="btnAnswerNO" class="btn btn-secondary w-25" @click="negativeAnswer">
              No
          </button>
          <button id="btnAnswerSI" class="btn btn-primary w-25" @click="affirmativeAnswer">
              Si
          </button>
      </div>
    </div>
    </b-modal>

  </div>
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
      showQuestion: false,
      question: "",
      numberQuestion: null,
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
          description: "AVÍS ESPECIAL",
          timeInSecondsIni: 20,
          timeInSecondsFin: 24,
        },
        {
          id: 6,
          description: "IDENTIFICACIÓ DE L'EMERGÈNCIA",
          timeInSecondsIni: 24,
          timeInSecondsFin: 29,
        },
        {
          id: 7,
          description: "PROCEDIMENT ESPECÍFIC",
          timeInSecondsIni: 29,
          timeInSecondsFin: 35,
        },
        {
            id: 8,
            description: "TRUCADA ASSOCIADA",
            timeInSecondsIni: 35,
            timeInSecondsFin: 41,
        },
        {
          id: 9,
          description: "COMPLEMENTAR NOTA COMUNA",
          timeInSecondsIni: 41,
          timeInSecondsFin: 48,
        },
        {
          id: 10,
          description: "TIPIFICAR",
          timeInSecondsIni: 48,
          timeInSecondsFin: 51,
        },
        {
          id: 11,
          description: "VALIDAR NOTA COMUNA",
          timeInSecondsIni: 51,
          timeInSecondsFin: 56,
        },
        {
          id: 12,
          description: "LOCALITZAR L'INCIDENT",
          timeInSecondsIni: 56,
          timeInSecondsFin: 61,
        },
        {
          id: 13,
          description: "CREACIÓ EXPEDIENT I DESPATX",
          timeInSecondsIni: 61,
          timeInSecondsFin: 70,
        },
        {
          id: 14,
          description: "GESTIÓ AVISOS",
          timeInSecondsIni: 70,
          timeInSecondsFin: 75,
        },
        {
          id: 15,
          description: "INCIDENT RELLEVANT",
          timeInSecondsIni: 75,
          timeInSecondsFin: 81,
        },
        {
          id: 16,
          description: "AVISAR SUPERVISOR O COORDINADOR",
          timeInSecondsIni: 81,
          timeInSecondsFin: 88,
        },
        {
          id: 17,
          description: "AVISAR CECAT",
          timeInSecondsIni: 88,
          timeInSecondsFin: 94,
        },
        {
          id: 18,
          description: "TANCAMENT",
          timeInSecondsIni: 94,
          timeInSecondsFin: 101,
        },
        {
            id: 19,
            description: "ASSOCIAR CT A EXPEDIENT",
            timeInSecondsIni: 101,
            timeInSecondsFin: 107
        },
        {
          id: 20,
          description: "AMPLIACIÓ RECLAMACIÓ",
          timeInSecondsIni: 107,
          timeInSecondsFin: 114,
        },
        {
          id: 21,
          description: "AMPLIACIÓ NOTA COMUNA",
          timeInSecondsIni: 114,
          timeInSecondsFin: 119,
        },
        {
          id: 22,
          description: "TRUCADA NO PROCEDENT",
          timeInSecondsIni: 119,
          timeInSecondsFin: 127,
        },
        {
          id: 23,
          description: "GESTIÓ AVISOS DE PERSONES AMB DISC. AUDITIVA",
          timeInSecondsIni: 127,
          timeInSecondsFin: 134,
        },
        {
          id: 24,
          description: "PROCEDIMENT ESPECÍFIC",
          timeInSecondsIni: 134,
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
          ((currentTimeInSeconds - minValue) * 100) / (maxValue - minValue)
        );
        const newPosition = 10 - newValue * 0.2;

        bubble.innerText = this.getMinutesSeconds(currentTimeInSeconds);

        bubble.style.left = `calc(${newValue}% + (${newPosition - 17}px))`;

        if (isDrag) this.$refs.video.currentTime = currentTimeInSeconds;
      }
    },
    onTimeUpdateVideo() {
      if (this.$refs.rangeVideo) {
        this.$refs.rangeVideo.$el.value = this.$refs.video.currentTime;

        this.setBubble(false);

        this.currentPartVideo = this.partsVideo.find(
          (partVideo) =>
            partVideo.timeInSecondsIni <= this.$refs.video.currentTime &&
            partVideo.timeInSecondsFin > this.$refs.video.currentTime
        );

        if (
          this.currentPartVideo &&
          this.currentPartVideo !== this.lastPartVideo
        ) {
          let position =
            this.$refs[`partVideo${this.currentPartVideo.id}`][0].$el.offsetTop;

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
        switch (Math.round(this.$refs.video.currentTime)) {
          case 18:
                this.numberQuestion = 1;
                this.showQuestion = true;
                this.question = "La trucada és procedent?";
                this.$refs.video.pause();
                this.isPlaying = false;
                break;
            case 23:
                this.numberQuestion = 2;
                this.showQuestion = true;
                this.question = "Avís especial?";
                this.$refs.video.pause();
                this.isPlaying = false;
                break;
            case 33:
                this.numberQuestion = 3;
                this.showQuestion = true;
                this.question = "S'haurà de realitzar un procediment específic?";
                this.$refs.video.pause();
                this.isPlaying = false;
                break;
            case 39:
                this.numberQuestion = 4;
                this.showQuestion = true;
                this.question = "És una trucada associada?";
                this.$refs.video.pause();
                this.isPlaying = false;
                break;
            case 80:
                this.numberQuestion = 5;
                this.showQuestion = true;
                this.question = "Es tracta d'un incident rellevant especial (IRE)?";
                this.$refs.video.pause();
                this.isPlaying = false;
                break;
            case 113:
                this.numberQuestion = 6;
                this.showQuestion = true;
                this.question = "La trucada és una ampliació, reclamació o anulació?";
                this.$refs.video.pause();
                this.isPlaying = false;
                break;
            case 118:
                this.goTo(this.partsVideo[13]);
                break;
            case 100:
            case 126:
            case 133:
            case 144:
                this.$refs.video.pause();
                this.isPlaying = false;
                this.goTo(this.partsVideo[0]);
                break;


          default:
              this.showQuestion = false;
              this.question = '';
            break;
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
    affirmativeAnswer(){
        switch (this.numberQuestion) {
            case 1:
                this.$refs.video.currentTime = this.$refs.video.currentTime + 1;
                this.$refs.video.play();
                this.isPlaying = true;
                break;
            case 2:
                this.goTo(this.partsVideo[22]);
                this.$refs.video.play();
                this.isPlaying = true;
                break;
            case 3:
                this.goTo(this.partsVideo[23]);
                this.$refs.video.play();
                this.isPlaying = true;
                break;
            case 4:
                this.goTo(this.partsVideo[18]);
                this.$refs.video.play();
                this.isPlaying = true;
                break;
            case 5:
                this.$refs.video.currentTime = this.$refs.video.currentTime + 1;
                this.$refs.video.play();
                break;
            case 6:
                this.$refs.video.currentTime = this.$refs.video.currentTime + 1;
                this.$refs.video.play();
                break;

            default:
                break;
        }
    },
    negativeAnswer(){
        switch (this.numberQuestion) {
            case 1:
                this.goTo(this.partsVideo[21]);
                this.$refs.video.play();
                this.isPlaying = true;
                break;
            case 2:
                this.$refs.video.currentTime = this.$refs.video.currentTime + 1;
                this.$refs.video.play();
                break;
            case 3:
                this.$refs.video.currentTime = this.$refs.video.currentTime + 1;
                this.$refs.video.play();
                break;
            case 4:
                this.$refs.video.currentTime = this.$refs.video.currentTime + 1;
                this.$refs.video.play();
                break;
            case 5:
                this.$refs.video.currentTime = this.$refs.video.currentTime + 1;
                this.$refs.video.play();
                break;
            case 6:
                this.goTo(this.partsVideo[17]);
                this.$refs.video.play();
                this.isPlaying = true;
                break;

            default:
                break;
        }
    }
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

.divQuestion{
    position: absolute;
    z-index: 1;
    width: fit-content;
    height: fit-content;
    padding: 20px;
    top:50%;
    left: 25%;
    background: white;
}

.buttonsQuestion{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-evenly;
}


</style>
