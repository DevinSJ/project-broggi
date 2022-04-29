<template>
    <main
        class="text-center"
        style="
            padding-bottom: 4rem !important;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        "
    >
        <h1>OPS! Aquesta pàgina not existeix...</h1>
    </main>
</template>

<script>
export default {
    mounted() {
        document.title = "Error 404 - Broggi";
    },
};
</script>
