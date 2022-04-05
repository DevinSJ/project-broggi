<!-- <template>
    <main>
        <b-card class="show-card">

        </b-card>
    </main>
</template>

<script>
import { Line } from 'vue-chartjs'

export default {
    data() {
        return {
            expedients: {},
            expedient: {
                id: "",
                data_creacio: "",
                data_ultima_modificacio: "",
                estat_expedients_id: "",
                codi: "",
            },
        };
    },
    mounted() {
        document.title = "Grafics - ibroggi";
    },
    methods: {
        selectExpedients() {
            let me = this;

            axios
                .get("/api/expedients/")
                .then((response) => {
                    me.expedients = response.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    created() {
        this.selectExpedients();
    },
};
</script>

<style>
.show-card {
    background-color: white;
    border: 1px;
    box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}
</style>



 -->
<template>
    <div>
        <b-card class="show-card">
            <b-tabs content-class="mt-3" fill>
                <b-tab title="Estat dels expedients" lazy
                    ><graph1></graph1
                ></b-tab>
                <b-tab title="Estadistiques dels usuaris" lazy
                    ><graph2></graph2
                ></b-tab>
                <b-tab title="Very, very long title" lazy></b-tab>
            </b-tabs>
        </b-card>
    </div>
</template>
<script>
import Graph1 from "../components/GraphsComponents/GraphExpedients";
import Graph2 from "../components/GraphsComponents/GraphOperators";

export default {
    components: {
        Graph1,
        Graph2,
    },
};
</script>

<style>
.show-card {
    background-color: white;
    border: 1px;
    box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 20%);
}
</style>
