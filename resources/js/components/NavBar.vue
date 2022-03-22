<template>

    <div id="miNavBar">
        <b-navbar
            toggleable="lg"
            type="light"
            variant="light"
            class="fondoBackground"
        >
            <!--LOGO-->
            <b-navbar-brand href="/">
                <img src="/assets/img/logo.svg" width="120" class="ml-2" />
            </b-navbar-brand>

            <!--COLAPSE-->
            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav class="w-100 justify-content-center">
                    <!--LINKS-->
                    <div class="top-navigation">
                        <div class="active-link item-transition"></div>
                        <router-link to="expedients">
                            <i
                                class="fa-solid fa-folder-open mr-2 desactivar-click"
                            ></i
                            ><span class="desactivar-click">Expedients</span>
                        </router-link>
                        <router-link to="trucades">
                            <i
                                class="fa-solid fa-phone mr-2 desactivar-click"
                            ></i
                            ><span class="desactivar-click">Trucades</span>
                        </router-link>
                        <router-link to="grafics">
                            <i
                                class="fa-solid fa-chart-pie mr-2 desactivar-click"
                            ></i
                            ><span class="desactivar-click">Grafics</span>
                        </router-link>
                        <router-link to="usuaris">
                            <i
                                class="fa-solid fa-users mr-2 desactivar-click"
                            ></i>
                            <span class="desactivar-click">Usuaris</span></router-link
                        >
                        <router-link to="parametres">
                            <i
                                class="fa-solid fa-gear mr-2 desactivar-click"
                            ></i><span class="desactivar-click">Paràmetres</span>
                            </router-link
                        >


                    </div>
                    <!--CERRAR SESION-->
                </b-navbar-nav>

                <b-navbar-nav class="ml-auto">
                    <b-nav-item-dropdown class="ml-2" right>
                        <template #button-content>
                            <em class="mr-2"
                                >{{ user.cognoms }}, {{ user.nom }}</em
                            >
                        </template>
                        <b-dropdown-item href="#"
                            ><i class="fa-solid fa-address-card mr-2"></i
                            >Perfil</b-dropdown-item
                        >
                        <b-dropdown-item href="/logout"
                            ><i class="fa-solid fa-right-from-bracket mr-2"></i
                            >Tancar sessió</b-dropdown-item
                        >
                    </b-nav-item-dropdown>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>

<script>
export default {
    props: ["user"],
    mounted() {
        var topNavigation = document.querySelector(".top-navigation");
        var navigationLinks = document.querySelectorAll(".top-navigation a");
        var activeLink = document.querySelector("a.router-link-active");
        var slide = document.querySelector(".active-link");

        navigationLinks.forEach((link) => {
            link.addEventListener("click", slideToLink);
        });

        function slideToLink(e) {
            setActiveSlide(e.target);
        }

        function setActiveSlide(target) {
            var left = getLeftValue(target);

            slide.style.left = `${left}px`;
        }

        function getLeftValue(targetLink) {
            var targetLeft = targetLink.getBoundingClientRect().left;
            var topNavigationLeft = topNavigation.getBoundingClientRect().left;

            return targetLeft - topNavigationLeft;
        }

        setActiveSlide(activeLink);
    },
};
</script>

<style scoped>
.desactivar-click {
    pointer-events: none;
}
.fondoBackground {
    padding: 0px;
}
.item-transition {
    transition: all 0.4s ease;
}

.top-navigation {
    padding: 0 1rem;
    border-radius: 0.75rem;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 15px 15px rgba (0, 0, 0, 0);
    position: relative;
}

.top-navigation a {
    padding: 1.5rem 1rem;
    display: inline-block;
    text-decoration: none;
    color: #3a3939;
    width: 180px;
    text-align: center;
}

.top-navigation a.active {
    color: #aa2727;
    font-weight: bold;
}

.top-navigation a:hover {
    background: #eef3f5;
    font-weight: bold;
}

.active-link {
    content: "";
    position: absolute;
    bottom: 0px;
    left: 0px;
    width: 180px;
    height: 4px;
    background: #E55490;
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
}


.router-link-exact-active {
    font-weight: bold;
    font-size: 15px;
}
.router-link-exact-active i{
    color:#E55490;
}

.router-link-exact-active span{
    color:#E55490;}

</style>
