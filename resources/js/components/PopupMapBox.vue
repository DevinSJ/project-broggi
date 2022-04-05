
<template>
    <div class="text-center">
        <h6 class="font-weight-bold">{{agency.nom}}</h6>
        <p>{{agency.carrer}} {{agency.codi_postal}}, {{agency.municipi.nom}}</p>
        <b-button size="sm" variant="danger" @click="Unselect" :disabled="!isSelected">Desseleccionar</b-button>
        <b-button size="sm" variant="primary" @click="Select" :disabled="isSelected">Seleccionar</b-button>
    </div>
</template>

<script>
export default {
    props: ['agency'],
}
</script>

<style>

</style>
