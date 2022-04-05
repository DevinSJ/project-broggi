<template>
    <div>
        <b-card class="show-card">
            <b-tabs content-class="mt-3" fill>
                <b-tab title="Estat dels expedients" lazy
                    ><div class="container-fluid">
                        <graph1 :opcionGraph="1" @returnDatos="returnDatos=$event"></graph1>
                    </div>
                </b-tab>
                <b-tab title="Estadistiques de trucades" lazy
                    ><graph1 :opcionGraph="2"></graph1
                ></b-tab>
                <b-tab title="Estadistiques d'usuaris" lazy
                    ><graph1 :opcionGraph="3"></graph1
                ></b-tab>
            </b-tabs>
        </b-card>
    </div>
</template>
<script>
import Graph1 from "../components/GraphsComponents/Graph";

export default {
    data() {
        return {
            datosExpedientes:"",
        };
    },
    components: {
        Graph1,
    },
    methods: {
        cambio(grafico) {
            this.graph = grafico;
        },
    },
};
</script>

<style>
.show-card {
    background-color: white;
    border: 1px;
    box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}
.div-table{
width: 100%;
background-color: aquamarine;

}.col-table{
align-items: center;
padding: 10px;
}
.table{
width: 100%}

</style>
