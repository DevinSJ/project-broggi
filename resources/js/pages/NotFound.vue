<template>
    <div
        class="text-center"
        style="
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        "
    >
        <h1>OPS! Aquesta pàgina not existeix...</h1>
    </div>
</template>

<script>
export default {
    mounted() {
        document.title = "Error 404 - Broggi";
    },
};
</script>

<style></style>
