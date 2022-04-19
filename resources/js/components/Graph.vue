<script>
import { Bar } from "vue-chartjs";
export default {
    extends: Bar,
    props: ["opcionGraph"],
    beforeDestroy() {
        if (this.request) this.request.cancel();
    },
    data() {
        return {
            graph: "",
            chartData: {
                labels: [],
                datasets: [
                    {
                        label: "",
                        borderWidth: 2,
                        backgroundColor: [],
                        borderColor: [],
                        pointBorderColor: "#2554FF",
                        data: [],
                    },
                ],
                request: null
            },
            options: {
                scales: {
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                            },
                            gridLines: {
                                display: true,
                            },
                        },
                    ],
                    xAxes: [
                        {
                            gridLines: {
                                display: true,
                            },
                        },
                    ],
                },
                legend: {
                    display: true,
                },
                responsive: true,
                maintainAspectRatio: false,
            },
        };
    },
    methods: {
        obtenerDatosExpedientes() {
            this.$emit("startRequest");

            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };

            let me = this;
            axios
                .get("/api/graph-expedients-status/", {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.chartData.datasets[0].label = "Estat dels expedients";
                    me.chartData.labels = [];
                    response.data.forEach((element) => {
                        me.chartData.labels.push(element.estat);
                    });

                    me.returnDatos=me.chartData.labels

                    me.chartData.datasets[0].data = [];
                    response.data.forEach((element) => {
                        me.chartData.datasets[0].data.push(element.quantity);
                    });

                    me.chartData.datasets[0].backgroundColor = [];
                    me.chartData.datasets[0].backgroundColor = [
                        "rgb(5, 100, 8 , 0.2)",
                        "rgb(253, 253, 7, 0.2)",
                        "rgb(3, 250, 3,0.2)",
                        "rgb(0, 0, 255, 0.2)",
                        "rgb(150, 22, 150,0.2)",
                    ];

                    me.chartData.datasets[0].borderColor = [];
                    me.chartData.datasets[0].borderColor = [
                        "rgb(5, 100, 8 , 1)",
                        "rgb(253, 253, 7, 1)",
                        "rgb(3, 250, 3,1)",
                        "rgb(0, 0, 255, 1)",
                        "rgb(150, 22, 150,1)",
                    ];

                    this.renderChart(this.chartData, this.options);
                })
                .catch((error) => {
                    console.log(error);
                }).
                finally(() => me.$emit("finishedRequest"));
        },
        obtenerDatosUsuarios() {
            this.$emit("startRequest");

            if (this.request) this.request.cancel();

            let axiosSource = axios.CancelToken.source();
            this.request = { cancel: axiosSource.cancel };
            
            let me = this;
            axios
                .get("/api/graph-users-perfil/", {
                    cancelToken: axiosSource.token,
                })
                .then((response) => {
                    me.chartData.datasets[0].label = "Perfils d'usuaris";
                    me.chartData.labels = [];
                    response.data.forEach((element) => {
                        me.chartData.labels.push(element.nom);
                    });

                    me.chartData.datasets[0].data = [];
                    response.data.forEach((element) => {
                        me.chartData.datasets[0].data.push(element.quantity);
                    });

                    me.chartData.datasets[0].backgroundColor = [];
                    me.chartData.datasets[0].backgroundColor = [
                        "rgb(255, 120, 0 , 0.2)",
                        "rgb(0, 255, 240, 0.2)",
                        "rgb(219, 21, 55,0.2)",
                    ];

                    me.chartData.datasets[0].borderColor = [];
                    me.chartData.datasets[0].borderColor = [
                        "rgb(255, 120, 0 , 1)",
                        "rgb(0, 255, 240, 1)",
                        "rgb(219, 21, 55,1)"
                    ];

                    this.renderChart(this.chartData, this.options);
                })
                .catch((error) => {
                    console.log(error);
                }).
                finally(() => me.$emit("finishedRequest"));
        },
    },
    mounted() {
        switch (this.opcionGraph) {
            case "1":
                this.obtenerDatosExpedientes();
                console.log(this.opcionGraph);
                break;
            case "2":
                console.log(this.opcionGraph);
                break;
            case "3":
                this.obtenerDatosUsuarios();
                console.log(this.opcionGraph);
                break;
        }
    },
};
</script>
