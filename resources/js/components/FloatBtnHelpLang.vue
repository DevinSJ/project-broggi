<template>
    <div class="float-btn-help-lang">
        <div class="d-flex">
            <b-button
                variant="secondary"
                class="btn-circle order-1 mr-2 align-self-end"
                title="Video interactiu"
            >
                <i class="fa fa-play"></i>
            </b-button>
            <div class="d-flex flex-column order-2" v-click-outside="hideItemsLang">
                <div class="d-flex flex-column-reverse align-items-center" id="buttons-langs">
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
        <b-popover
            id="popoverLang"
            :show.sync="showPopoverLang"
            target="fr-lang">
            <template #title>
                <div class="d-flex">
                    <svg-vue v-if="isLoadingPopoverLang" icon="spinner" class="mx-auto my-auto" width="20"/>

                    <b-input v-if="!isLoadingPopoverLang" type="text" class="form-control-sm mr-2" placeholder="Buscar traducció"/>
                    <img v-if="!isLoadingPopoverLang" :src="imageSrcLang"/>
                </div>
            </template>
            <div class="container-fluid h-100 p-2 d-flex flex-column">
                <label v-show="errorMessagePopoverLang" class="text-danger">
                    <i class="fa-solid fa-circle-exclamation mr-2"></i>
                    {{ errorMessagePopoverLang }}
                </label>
                <svg-vue v-show="isLoadingPopoverLang" icon="spinner" class="mx-auto my-auto" width="50"/>
                <div v-show="!isLoadingPopoverLang">
                    <div v-if="langsData.length > 0">
                        <div v-for="lang in langsData" :key="lang.id" class="border-bottom mb-2">
                            <label class="d-block font-weight-bold">{{lang[langSelected.replace('-', '_')]}}</label>
                            <label class="text-secondary">{{lang.ca_lang}}</label>
                        </div>
                    </div>
                    <label v-else>
                        No s'ha trobat registres.
                    </label>
                </div>
            </div>
        </b-popover>
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
            showItemsLang: false,
            buttonsLangsElements: [],
            langSelected: '',
            showPopoverLang: false,
            isLoadingPopoverLang: false,
            errorMessagePopoverLang: '',
            imageSrcLang: '',
            langsData: []
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
            if (this.langSelected === e.currentTarget.id) {
                this.langSelected = '';
                this.langsData = [];
                this.showPopoverLang = false;
            } else {
                this.langSelected = e.currentTarget.id;
                this.imageSrcLang = `/assets/img/ca-${this.langSelected.split('-')[0]}.png`;
                this.showPopoverLang = true;

                this.fetchLang();
            }
        },
        fetchLang(search = "") {
            this.errorMessagePopoverLang = '';
            this.langsData = [];
            this.isLoadingPopoverLang = true;

            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            let me = this;

            axios.get(`/api/help-phrases?search=${search}&type=${this.langSelected.replace('-', '_')}`, {
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
                    me.langSelected = '';
                    me.errorMessagePopoverLang = '';
                    me.langsData = [];
                }
            })
            .finally(() => {
                me.isLoadingPopoverLang = false;
                me.request = null;
            });
        }
    },
};
</script>

<style>
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
    max-width: 400px;
    width: 100%;
}

#popoverLang .popover-body {
    max-height: 250px;
    height: 250px;
    overflow-y: scroll;
}

#popoverLang .arrow {
    display: none;
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
