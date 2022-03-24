<template>
    <div>
        <b-navbar toggleable="lg" type="light" variant="light" sticky>
            <b-navbar-brand href="/">
                <img
                    src="/assets/img/logo.svg"
                    width="120"
                    class="ml-2"
                />
            </b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav class="w-100 justify-content-center">
                    <b-nav-item class="mx-2" to="expedients"><i class="fa-solid fa-folder-open mr-2"></i>Expedients</b-nav-item>
                    <b-nav-item class="mx-2" to="trucades"><i class="fa-solid fa-phone mr-2"></i>Trucades</b-nav-item>
                    <b-nav-item class="mx-2" to="grafics"><i class="fa-solid fa-chart-pie mr-2"></i>Gràfics</b-nav-item>
                    <b-nav-item class="mx-2" to="usuaris"><i class="fa-solid fa-user mr-2"></i>Usuaris</b-nav-item>
                    <b-nav-item-dropdown class="mx-2">
                        <template #button-content>
                            <span class="mr-2">Paràmetres</span>
                        </template>
                        <b-dropdown-item href="/tipus-incidents"><i class="fa-solid fa-list mr-2"></i>Tipus de incidents</b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>

                <b-navbar-nav class="ml-auto">
                    <b-nav-item-dropdown class="ml-2" right>
                        <template #button-content>
                            <em class="mr-2">{{ user.cognoms }}, {{ user.nom }}</em>
                        </template>
                        <b-dropdown-item href="#"><i class="fa-solid fa-address-card mr-2"></i>Perfil</b-dropdown-item>
                        <b-dropdown-item href="/logout"><i class="fa-solid fa-right-from-bracket mr-2"></i>Tancar sessió</b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>

<script>
export default {
    props: ['user']
};
</script>
