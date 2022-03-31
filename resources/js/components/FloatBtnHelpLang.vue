<template>
    <div class="float-btn-help-lang">
        <div class="d-flex">
            <b-button
                variant="secondary"
                class="btn-circle order-1 mr-2 align-self-end"
                title="Video interactiu"
                @click="openModalVideoInteractive"
            >
                <i class="fa fa-play"></i>
            </b-button>
            <div class="d-flex flex-column order-2" v-click-outside="hideItemsLang">
                <div class="d-flex flex-column-reverse align-items-center mb-2" id="buttons-langs">
                    <b-button
                        id="en-lang"
                        variant="secondary"
                        class="btn-lang mb-1 d-none"
                        @click="changeLang"
                    >
                    </b-button>
                    <b-button
                        id="de-lang"
                        variant="secondary"
                        class="btn-lang mb-1 d-none"
                        @click="changeLang"
                    >
                    </b-button>
                    <b-button
                        id="es-lang"
                        variant="secondary"
                        class="btn-lang mb-1 d-none"
                        @click="changeLang"
                    >
                    </b-button>
                    <b-button
                        id="fr-lang"
                        variant="secondary"
                        class="btn-lang mb-1 d-none"
                        @click="changeLang"
                    >
                    </b-button>
                </div>
                <b-button
                    variant="primary"
                    class="btn-circle order-2"
                    title="Ajuda idiomes"
                    @click="toggleItemsLang"
                >
                    <i class="fa-solid fa-circle-info"></i>
                </b-button>
            </div>
        </div>
        <div id="popoverLang"
            :class="isShowPopover ? 'popover' : 'popover d-none'">
            <div class="popover-header">
                <div class="d-flex w-100">
                    <svg-vue v-if="isLoadingPopoverLang" icon="spinner" class="mx-auto my-auto" width="20"/>
                    <template v-else>
                        <b-input type="text" v-model="search" v-on:input="inputSearchChange" class="form-control-sm mr-2" placeholder="Buscar traducció"/>
                        <img :src="imageSrcLang"/>
                    </template>
                </div>
            </div>
            <div class="popover-body">
                <div class="container-fluid h-100 w-100 p-2 d-flex flex-column">
                    <label v-if="!isChrome" class="text-danger">
                        Para escuchar las traducciones recomendamos usar el Chrome.
                    </label>
                    <label v-if="errorMessagePopoverLang && !isLoadingPopoverLang && !isSearching" class="text-danger">
                        {{ errorMessagePopoverLang }}
                    </label>
                    <svg-vue v-if="isLoadingPopoverLang || isSearching" icon="spinner" class="mx-auto my-auto" width="50"/>
                    <div v-for="lang in langsData" :key="lang.id" class="border-bottom mb-2">
                        <label class="d-block font-weight-bold">{{lang[selectedLang.replace('-', '_')]}}<i class="ml-2 fa-solid fa-volume-high" role="button" @click="() => speechText(lang[selectedLang.replace('-', '_')])"></i></label>
                        <label class="text-secondary">{{lang.ca_lang}}</label>
                    </div>
                </div>
            </div>
        </div>
        <VideoInteractive ref="modalVideoInteractive"/>
    </div>
</template>

<script>
window.Vue.directive('click-outside', {
    bind: function (el, binding, vnode) {
        window.event = function (event) {
            if (!(el == event.target || el.contains(event.target))) {
                vnode.context[binding.expression](event);
            }
        };
        document.body.addEventListener('click', window.event)
    },
    unbind: function (el) {
        document.body.removeEventListener('click', window.event)
    },
});

export default {
    mounted() {
        this.buttonsLangsElements = Array.prototype.slice.call(document.querySelectorAll('#buttons-langs > button'));
    },
    data() {
        return {
            request: null,
            isCancel: false,
            showItemsLang: false,
            buttonsLangsElements: [],
            isShowPopover: false,
            isLoadingPopoverLang: false,
            isSearching: false,
            errorMessagePopoverLang: '',
            selectedLang: '',
            imageSrcLang: '',
            langsData: [],
            search: '',
            timeoutSearch: null,
            isChrome: window.navigator.userAgent.toLowerCase().indexOf('chrome') > -1
        };
    },
    methods: {
        toggleItemsLang() {
            this.showItemsLang = !this.showItemsLang;

            let me = this;

            this.buttonsLangsElements.forEach((element, index) => {
                let promise = new Promise((resolve) =>
                    setTimeout(() => {
                        if (!me.showItemsLang) {
                            element.classList.remove('bounceOut');
                            element.classList.add('bounceIn');
                        } else {
                            element.classList.remove('bounceIn');
                            element.classList.add('bounceOut');
                        }

                        resolve();
                    }, 50 * index)
                );

                promise.then(function () {
                    setTimeout(() => {
                        element.classList.toggle('d-none');
                    }, 50 * index)
                });
            });

            this.isLoadingPopoverLang = true;
            this.isShowPopover = false;
            this.selectedLang = '';
            this.search = '';

            this.buttonsLangsElements = this.buttonsLangsElements.reverse();
        },
        hideItemsLang(e) {
            let popoverLangElement = document.querySelector('#popoverLang');

            if (popoverLangElement && popoverLangElement.contains(e.target))
                return;

            if (this.showItemsLang) {
                this.toggleItemsLang();
            }
        },
        changeLang(e) {
            if (this.selectedLang != e.currentTarget.id) {
                this.isShowPopover = true;
                this.isLoadingPopoverLang = true;
                this.selectedLang = e.currentTarget.id;
                this.search = '';
                this.imageSrcLang = '';
                this.errorMessagePopoverLang = '';
                this.langsData = [];

                this.fetchLang();
            } else {
                this.isLoadingPopoverLang = true;
                this.isShowPopover = false;
                this.selectedLang = '';
                this.search = '';
                this.imageSrcLang = '';
                this.errorMessagePopoverLang = '';
                this.langsData = [];
            }
        },
        inputSearchChange() {
            this.isSearching = true;
            this.errorMessagePopoverLang = '';
            this.langsData = [];

            clearTimeout(this.timeoutSearch);

            let me = this;

            this.timeoutSearch = setTimeout(() => {
                me.fetchLang();
            }, 1000);
        },
        fetchLang() {
            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            let me = this;

            this.imageSrcLang = `/assets/img/ca-${this.selectedLang.split('-')[0]}.png`;

            axios.get(`/api/help-phrases?search=${this.search}&type=${this.selectedLang.replace('-', '_')}`, {
                cancelToken: axiosSource.token,
            })
            .then(function (data) {
                if (data.status === 200) {
                    me.langsData = data.data;
                } else {
                    me.errorMessagePopoverLang = 'No s\'ha pogut cargar les dades...';

                    console.error(data);
                }
            })
            .catch(function (error) {
                 if(!axios.isCancel(error)) {
                    me.errorMessagePopoverLang = 'No s\'ha pogut cargar les dades...';

                    console.error(error);
                } else {
                    me.isCancel = true;
                }
            })
            .finally(() => {
                me.request = null;

                if (!me.isCancel) {
                    me.isLoadingPopoverLang = false;
                    me.isSearching = false;
                }

                me.isCancel = false;
            });
        },
        speechText(text) {
            if ( 'speechSynthesis' in window ) {
                window.speechSynthesis.cancel();
                let lang = this.selectedLang.split('-')[0];
                let msg = new SpeechSynthesisUtterance();
                let voices = window.speechSynthesis.getVoices();
                msg.voice = voices.filter(function (voice) { return voice.lang.split("-")[0] === lang; })[0];
                msg.text = text;
                msg.lang = lang;
                window.speechSynthesis.speak(msg);
            } else {
                alert('El teu navegador no suporta aquesta funció.');
            }

        },
        openModalVideoInteractive() {
            this.$refs.modalVideoInteractive.openModal();
        }
    },
};
</script>

<style scope>
.float-btn-help-lang {
    position: fixed;
    right: 0;
    bottom: 0;
    margin: 10px;
}

.btn-circle {
    padding: 1rem;
    font-size: 1rem;
    line-height: 0.125rem;
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.btn-lang {
    padding: 5px;
    width: 35px;
    height: 35px;
    border-radius: 50%;
}

.bounceOut {
    animation: bounceOut 0.2s;
    transform: scale(1);
}

.bounceIn {
    animation: bounceIn 0.3s;
    transform: scale(0);
}

button[id$=lang] {
    background-size: cover;
    background-repeat: no-repeat;
    background-color: white;
    background-origin: content-box;
}

#en-lang {
    background-image: url('/assets/img/uk.png');
}

#de-lang {
    background-image: url('/assets/img/de.png');
}

#es-lang {
    background-image: url('/assets/img/es.png');
}

#fr-lang {
    background-image: url('/assets/img/fr.png');
}

#popoverLang {
    position: fixed;
    top: auto;
    left: auto;
    right: 60px;
    bottom: 70px;
    width: 100%;
    max-width: 400px;
}

#popoverLang .popover-body {
    max-height: 250px;
    height: 250px;
    overflow-y: scroll;
}

@keyframes bounceOut {
    0% {
        transform: scale(0);
    }
    60% {
        transform: scale(1);
    }
    80% {
        transform: scale(0.8);
    }
    100% {
        transform: scale(1);
    }
}

@keyframes bounceIn {
    0% {
        transform: scale(1);
    }
    60% {
        transform: scale(0.8);
    }
    80% {
        transform: scale(1);
    }
    100% {
        transform: scale(0);
    }
}
</style>
