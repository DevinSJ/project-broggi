<template>
  <div class="row">
    <div class="col">
      <b-tabs content-class="mt-3 " class="m-top-20">
        <!-- TAB Nota comuna -->
        <b-tab title="Nota comuna" active>
          <div class="col-12 center p-0">
            <div class="form-floating user-select-none">
              <b-form-input id="name" type="text" placeholder="Nom" required />
              <label class="user-select-none" for="input-name"> Nom </label>
            </div>

            <div class="form-floating user-select-none">
              <b-form-input
                id="surname"
                type="text"
                placeholder="Cognom"
                required
              />
              <label class="user-select-none" for="input-surname">
                Cognom
              </label>
            </div>

            <div class="form-floating user-select-none">
              <b-form-input
                id="origin"
                type="text"
                placeholder="Nacionalitat"
                required
              />
              <label class="user-select-none" for="input-origin">
                Nacionalitat
              </label>
            </div>

            <div class="form-floating user-select-none">
              <b-form-input
                id="relation"
                type="text"
                placeholder="Relació amb l'incident"
                required
              />
              <label class="user-select-none" for="input-relation">
                Relació amb l'incident
              </label>
            </div>
          </div>
          <div class="col-12 p-0">
                <div class="form-floating user-select-none">
                    <b-form-textarea
                        id="description"
                        class="mt-3 h-150"
                        type="text"
                        placeholder="Relació incident"
                        required
                        rows="5"
                    />
                    <label class="user-select-none" for="input-relation">
                        Descripció incident
                    </label>
                </div>
          </div>
        </b-tab>
        <!-- TAB Identificació de la trucada -->
        <b-tab title="Identificació de la trucada">
            <div class="row center">
                <div>
                    <b-form-select
                    v-model="selected"
                    :options="options"
                    size="sm"
                    class="mt-3"></b-form-select>
                </div>
                <div class="form-floating user-select-none">
                    <b-form-input
                        id="comarca"
                        type="text"
                        placeholder="Comarca"
                        required
                    />
                    <label class="user-select-none" for="input-comarca">
                        Comarca
                    </label>
                </div>
                <div class="form-floating user-select-none">
                    <b-form-input
                        id="provincia"
                        type="text"
                        placeholder="Provincia"
                        required
                    />
                    <label class="user-select-none" for="input-provincia">
                        Provincia
                    </label>
                </div>
            </div>

            <div class="row center mt-3">
                <div>
                    <b-form-select
                    v-model="selected"
                    :options="optionsType"
                    size="sm"
                    class="mt-3"></b-form-select>
                </div>
                <div class="form-floating user-select-none">
                    <b-form-input
                        id="address"
                        type="text"
                        placeholder="Adreça"
                        required
                    />
                    <label class="user-select-none" for="input-address">
                        Adreça
                    </label>
                </div>
            </div>

            <div class="col-12 p-0 mt-3">
                <div class="form-floating user-select-none">
                    <b-form-textarea
                        id="information"
                        class="mt-3 h-150"
                        type="text"
                        placeholder="Informació rellevant"
                        required
                        rows="5"
                    />
                    <label class="user-select-none" for="input-information">
                        Informació rellevant
                    </label>
                </div>
          </div>
        </b-tab>
        <!-- TAB Localització de l'emergència -->
        <b-tab title="Localització de l'emergència"> </b-tab>
        <!-- TAB Tipificació de l'emergència -->
        <b-tab title="Tipificació de l'emergència"> </b-tab>
      </b-tabs>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
        selected: null,
        options: [
          { value: null, text: 'Municipio' },
        ],
        optionsType: [
            { value: null, text: 'Tipo' }
        ]
    };
  },
  methods: {},
};
</script>

<style scoped>
.form-floating > .form-control,
.form-floating > .form-select {
    height: 40px;
}

.m-top-20 {
  margin-top: 20px;
}
.h-150 {
  height: 150px !important;
}
.center {
  display: flex;
  justify-content: space-between;
}
.p-0 {
  padding: 0px;
}
</style>
