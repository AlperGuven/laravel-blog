import "./bootstrap";
import "../css/app.css";

import { createApp } from "vue";
import App from "./App.vue";

const app = createApp({
    components: {
        App,
    },
});

app.mount("#app");
