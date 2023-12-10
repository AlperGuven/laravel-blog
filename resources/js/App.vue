<template>
    <header-part />
    <!-- <router-view :key="$route.fullPath"></router-view> -->
    <main class="container">
        <section id="login">
            <login />
        </section>
    </main>
    <footer-part />
</template>

<script setup>
import { defineAsyncComponent } from "vue";

// #region - importing components
const Login = defineAsyncComponent(() => import("./pages/Login.vue"));
const HeaderPart = defineAsyncComponent(() => import("./pages/HeaderPart.vue"));
const FooterPart = defineAsyncComponent(() => import("./pages/FooterPart.vue"));
// endregion
</script>
<style scoped></style>
