<template>
    <div id="map"></div>
</template>

<script>
export default {
    mounted() {
        let me = this;

        const size = 200;

        this.pulsingDot = {
            width: size,
            height: size,
            data: new Uint8Array(size * size * 4),

            // When the layer is added to the map,
            // get the rendering context for the map canvas.
            onAdd: function () {
                const canvas = document.createElement("canvas");
                canvas.width = this.width;
                canvas.height = this.height;
                this.context = canvas.getContext("2d");
            },

            // Call once before every frame where the icon will be used.
            render: function () {
                const duration = 1000;
                const t = (performance.now() % duration) / duration;

                const radius = (size / 2) * 0.3;
                const outerRadius = (size / 2) * 0.7 * t + radius;
                const context = this.context;

                // Draw the outer circle.
                context.clearRect(0, 0, this.width, this.height);
                context.beginPath();
                context.arc(
                    this.width / 2,
                    this.height / 2,
                    outerRadius,
                    0,
                    Math.PI * 2
                );
                context.fillStyle = `rgba(255, 200, 200, ${1 - t})`;
                context.fill();

                // Draw the inner circle.
                context.beginPath();
                context.arc(
                    this.width / 2,
                    this.height / 2,
                    radius,
                    0,
                    Math.PI * 2
                );
                context.fillStyle = "rgba(255, 100, 100, 1)";
                context.strokeStyle = "white";
                context.lineWidth = 2 + 4 * (1 - t);
                context.fill();
                context.stroke();

                // Update this image's data with data from the canvas.
                this.data = context.getImageData(
                    0,
                    0,
                    this.width,
                    this.height
                ).data;

                // Continuously repaint the map, resulting
                // in the smooth animation of the dot.
                me.map.triggerRepaint();

                // Return `true` to let the map know that the image was updated.
                return true;
            },
        };

        this.markIncident();
    },
    data() {
        return {
            map: null,
            agencies: [],
            pulsingDot: null,
            mapboxClient: null,
            isLoading: true,
        };
    },
    methods: {
        markAgencies(query, resolve) {
            let me = this;

            this.mapboxClient.geocoding
                .forwardGeocode({
                    query: query,
                    autocomplete: false,
                    limit: 1,
                })
                .send()
                .then((response) => {
                    if (
                        !response ||
                        !response.body ||
                        !response.body.features ||
                        !response.body.features.length
                    ) {
                        console.error("Invalid response:");
                        console.error(response);
                        return;
                    }

                    const marker = response.body.features[0];

                    // Create a marker and add it to the map.
                    new mapboxgl.Marker()
                        .setLngLat(marker.center)
                        .addTo(me.map);

                    resolve();
                });
        },
        markIncident() {
            let me = this;

            mapboxgl.accessToken =
                "pk.eyJ1Ijoic21hcmVzY2F0ODYiLCJhIjoiY2wxZXVzNnJ6MDlxNTNxdWdsbTI4ZXNyNyJ9.yole3xZeEEoqwWT6ZgP4FA";
            this.mapboxClient = mapboxSdk({
                accessToken: mapboxgl.accessToken,
            });

            this.mapboxClient.geocoding
                .forwardGeocode({
                    query: "Barcelona",
                    autocomplete: false,
                    limit: 1,
                })
                .send()
                .then((response) => {
                    if (
                        !response ||
                        !response.body ||
                        !response.body.features ||
                        !response.body.features.length
                    ) {
                        console.error("Invalid response:");
                        console.error(response);
                        return;
                    }

                    const marker = response.body.features[0];

                    me.map = new mapboxgl.Map({
                        container: "map",
                        style: "mapbox://styles/mapbox/streets-v11",
                        center: marker.center,
                        zoom: 12,
                    });

                    me.map.on("load", () => {
                        me.map.addImage("pulsing-dot", me.pulsingDot, {
                            pixelRatio: 4,
                        });

                        me.map.addSource("dot-point", {
                            type: "geojson",
                            data: {
                                type: "FeatureCollection",
                                features: [
                                    {
                                        type: "Feature",
                                        geometry: {
                                            type: "Point",
                                            coordinates: marker.center, // icon position [lng, lat]
                                        },
                                    },
                                ],
                            },
                        });

                        me.map.addLayer({
                            id: "layer-with-pulsing-dot",
                            type: "symbol",
                            source: "dot-point",
                            layout: {
                                "icon-image": "pulsing-dot",
                            },
                        });

                        me.map.setLayoutProperty('country-label', 'text-field', [
                            'get',
                            `name_es`
                        ]);
                    });

                    // Create a marker and add it to the map.
                    /*new mapboxgl.Marker({ color: "red" })
                        .setLngLat(marker.center)
                        .addTo(me.map);*/

                    this.getAgencies();
                });
        },
        getAgencies() {
            let me = this;
            axios
                .get("/api/agencies")
                .then((response) => {
                    me.agencies = response.data;

                    let requestsAgencies = me.agencies.map(
                        (agency) =>
                            new Promise((resolve) =>
                                me.markAgencies(
                                    `${agency.carrer}, ${agency.municipi.nom}`,
                                    resolve
                                )
                            )
                    );

                    Promise.all(requestsAgencies).then(() => {
                        me.map.resize();
                        me.isLoading = false;
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style scoped>
#map {
    height: 55vh;
}
</style>
