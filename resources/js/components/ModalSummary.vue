<template>
    <div>
        <b-modal
            ref="modal"
            centered
            title="Resum de la trucada"
            size="huge"
            modal-class="zoominout"
            body-class="p-0"
            @hidden="handleHiddenModal"
            hide-footer
        >
            <section class="d-block">
                <b-alert v-if="errorMessage" variant="danger">
                    {{ errorMessage }}
                </b-alert>
            </section>
            <footer class="d-flex justify-content-stretch">
                <b-button v-b-modal.modal-confirm-discard variant="danger" class="font-weight-bold flex-fill mr-2"><i class="fa-solid fa-x mr-2"></i>DESCARTAR TRUCADA</b-button>
                <b-button variant="primary" class="font-weight-bold flex-fill ml-2" @click="saveCall"><i class="fa-solid fa-floppy-disk mr-2"></i>GUARDAR TRUCADA</b-button>
            </footer>
        </b-modal>
        <b-modal
            id="modal-confirm-discard"
            ref="modal-confirm-discard"
            centered
            title="Confirmació"
            size="m"
            body-class="p-0"
            modal-class="zoominout"
            hide-footer
        >
            <section class="d-block">
                Segur que vols descartar la trucada?<br/>
                Tots els camps que has introduït s'eliminaran.
            </section>
            <footer class="d-flex justify-content-stretch">
                <b-button variant="primary" class="font-weight-bold flex-fill mr-2" @click="dismissModalConfirm">CANCEL·LAR</b-button>
                <b-button variant="danger" class="font-weight-bold flex-fill ml-2" @click="discardCall">CONFIRMAR</b-button>
            </footer>
        </b-modal>
    </div>
</template>

<script>
export default {
    props: ['callback', 'call'],
    mounted() {
        this.checkFieldsCall();
        this.$refs.modal.show();
    },
    data() {
        return {
        };
    },
    methods: {
        checkFieldsCall() {

        },
        handleHiddenModal() {
            this.$emit('hiddenModal');
        },
        dismissModalConfirm() {
            this.$refs['modal-confirm-discard'].hide();
        },
        discardCall() {
            this.callback();
        },
        saveCall() {

        }
    }
}
</script>

<style scoped>
::v-deep .modal .modal-huge {
    max-width: 90%;
    width: 90%;
}
section {
    padding: 1rem 1rem;
}
footer {
    border-top: 1px solid #dee2e6;
    padding: 1rem 1rem;
}
</style>
