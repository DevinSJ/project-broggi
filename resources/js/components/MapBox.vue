<template>
    <div class="my-2">
        <div id="map" :style="`filter: ${isLoading ? 'brightness(0.3)' : 'none'};`"></div>
        <div v-if="isLoading" class="loading-text">Carregant agencies...</div>
    </div>
</template>

<script>
import PopupMapBox from './PopupMapBox';

const PopupMapBoxClass = Vue.extend(PopupMapBox);
const sizeDot = 200;

export default {
    mounted() {
        let me = this;

        this.pulsingDot = {
            width: sizeDot,
            height: sizeDot,
            data: new Uint8Array(sizeDot * sizeDot * 4),

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

                const radius = (sizeDot / 2) * 0.3;
                const outerRadius = (sizeDot / 2) * 0.7 * t + radius;
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
            agenciesSelected: []
        };
    },
    methods: {
        markAgencies(agency, resolve) {
            this.mapboxClient.geocoding
                .forwardGeocode({
                    query: `${agency.carrer}, ${agency.municipi.nom}`,
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

                    const customMarker = document.createElement('div');
                    customMarker.className = this.getAgencyClassName(agency.nom);
                    customMarker.id = `agency-marker-${agency.id}`;

                    let me = this;

                    let instancePopupMapBox = new PopupMapBoxClass({
                        propsData: { agency: agency },
                        data() {
                            return {
                                isSelected: false
                            };
                        },
                        methods: {
                            Unselect() {
                                me.removeAgency(this.agency);

                                document.querySelector(`#agency-marker-${agency.id}`).classList.remove('agency-marked');

                                this.isSelected = false;
                            },
                            Select() {
                                me.addAgency(this.agency);

                                document.querySelector(`#agency-marker-${agency.id}`).classList.add('agency-marked');

                                this.isSelected = true;
                            }
                        },
                    });

                    instancePopupMapBox.$mount();

                    // Create a marker and add it to the map.
                    if (customMarker === 'marker') {
                        new mapboxgl.Marker()
                            .setLngLat(marker.center)
                            .setPopup(
                                new mapboxgl.Popup({ offset: 50 }) // add popups
                                .setDOMContent()
                            )
                            .addTo(me.map);
                    } else {
                        new mapboxgl.Marker(customMarker)
                            .setLngLat(marker.center)
                            .setPopup(
                                new mapboxgl.Popup({ offset: 50 }) // add popups
                                .setDOMContent(instancePopupMapBox.$el)
                            )
                            .addTo(me.map);
                    }

                    resolve();
                });
        },
        getAgencyClassName(agencyName) {
            let className = 'marker ';

            //Convert to lowercase and remove accents and diacritics.
            agencyName = agencyName.toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "").trim();

            const policeSearch = ['policia', 'comissaria', 'guardia urbana'];
            const firefightersSearch = ['bombers'];
            const transitSearch = ['transit'];
            const personInfoSearch = ['atencio ciutadana'];

            if (policeSearch.some(wordSearch => agencyName.includes(wordSearch))) {
                className += 'marker-police';
            } else if (firefightersSearch.some(wordSearch => agencyName.includes(wordSearch))) {
                className += 'marker-firefighters';
            } else if (transitSearch.some(wordSearch => agencyName.includes(wordSearch))) {
                className += 'marker-transit';
            } else if (personInfoSearch.some(wordSearch => agencyName.includes(wordSearch))) {
                className += 'marker-person-info';
            }

            return className.trim();
        },
        markIncident() {
            let me = this;

            mapboxgl.accessToken =
                'pk.eyJ1Ijoic21hcmVzY2F0ODYiLCJhIjoiY2wxZXVzNnJ6MDlxNTNxdWdsbTI4ZXNyNyJ9.yole3xZeEEoqwWT6ZgP4FA';
            this.mapboxClient = mapboxSdk({
                accessToken: mapboxgl.accessToken,
            });

            this.mapboxClient.geocoding
                .forwardGeocode({
                    query: 'Barcelona',
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

                        me.map.setLayoutProperty(
                            "country-label",
                            "text-field",
                            ["get", `name_es`]
                        );
                    });

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
                                    agency,
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
        addAgency(_agency) {
            let isExist = this.agenciesSelected.some(agency => agency === _agency);

            if (!isExist) this.agenciesSelected.push(_agency);
        },
        removeAgency(_agency) {
            this.agenciesSelected = this.agenciesSelected.filter(agency => {
                return agency != _agency;
            });
        }
    },
};
</script>

<style>
#map {
    height: 55vh;
}
.loading-text {
    position: absolute;
    top: 50%;
    right: 50%;
    font-size: 36px;
    transform: translate(50%, -50%);
    color: white;
    font-weight: bold;
}

.marker {
    background-size: cover;
    width: 30px;
    height: 30px;
    cursor: pointer;
}

.agency-marked {
    border-radius: 50%;
    box-shadow: 0 0 5px 5px red;
}

.marker-police {
  background-image: url('/img/police.png');
}

.marker-firefighters {
  background-image: url('/img/firefighters.png');
}

.marker-transit {
  background-image: url('/img/transit.png');
}

.marker-person-info {
  background-image: url('/img/person-info.png');
}
</style>
