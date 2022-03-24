<template>
  <div class="view-container">
    <button-call />
    <expedients-table />
  </div>
</template>

<script>
import ButtonCall from "../components/ButtonCall.vue";
import ExpedientsTable from '../components/ExpedientsTable.vue';
export default {
  components: { ButtonCall, ExpedientsTable },
};
</script>

<style>

</style>
