<template>
  <div>
    <b-list-group v-for="expedient in expedients" :key="expedient.id" class="m-2 overflow-scroll">
      <b-list-group-item href="#" class="flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">{{ expedient.codi }}</h5>
          <small class="text-muted">{{ expedient.data_creacio }}</small>
        </div>

        <p class="mb-1">
          {{ expedient.data_creacio }}
        </p>

        <small class="text-muted">Donec id elit non mi porta.</small>
      </b-list-group-item>
    </b-list-group>
  </div>
</template>

<script scoped>
export default {
  mounted() {
    this.getExpedients();
  },
  data() {
    return {
      isLoading: true,
      expedients: [],
    };
  },
  methods: {
    getExpedients() {
      this.isLoading = true;
      let me = this;
      axios
        .get("/api/expedients")
        .then(({data}) => {
          me.expedients = data.data;
          console.log(me.expedients);
        })
        .catch((error) => {
          console.log(error);
        })
        .finally(() => (this.isLoading = false));
    },

  },
};
</script>

<style scoped>
.loading-spinner {
  width: 100%;
  text-align: center;
  justify-content: center;
  margin-top: 150 px;
}
</style>
