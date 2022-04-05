<script>
import { Bar } from "vue-chartjs";
export default {
    extends: Bar,
    data() {
        return {
            chartData: {
                labels: [],
                datasets: [
                    {
                        label: "Estat dels expedients",
                        borderWidth: 1,
                        backgroundColor: [
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(255, 206, 86, 0.2)",
                            "rgba(75, 192, 192, 0.2)",
                            "rgba(153, 102, 255, 0.2)",
                            "rgba(255, 159, 64, 0.2)",
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(255, 206, 86, 0.2)",
                            "rgba(75, 192, 192, 0.2)",
                            "rgba(153, 102, 255, 0.2)",
                            "rgba(255, 159, 64, 0.2)",
                        ],
                        borderColor: [
                            "rgba(255,99,132,1)",
                            "rgba(54, 162, 235, 1)",
                            "rgba(255, 206, 86, 1)",
                            "rgba(75, 192, 192, 1)",
                            "rgba(153, 102, 255, 1)",
                            "rgba(255, 159, 64, 1)",
                            "rgba(255,99,132,1)",
                            "rgba(54, 162, 235, 1)",
                            "rgba(255, 206, 86, 1)",
                            "rgba(75, 192, 192, 1)",
                            "rgba(153, 102, 255, 1)",
                            "rgba(255, 159, 64, 1)",
                        ],
                        pointBorderColor: "#2554FF",
                        data: [12, 19, 3, 5, 2, 3, 20, 3, 5, 6, 2, 1],
                    },
                ],
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
                                display: false,
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
        obtenerLabelsEstados() {
            let me = this;
            axios
                .get("/api/estats_expedients/")
                .then((response) => {
                    let estados = response.data;
                    estados.forEach((element) => {
                        me.chartData.labels.push(JSON.stringify(element.estat));
                    });
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (me.isLoading = false));
        },
    },
    mounted() {
        this.obtenerLabelsEstados();
        this.renderChart(this.chartData, this.options);
    },
};
</script>
