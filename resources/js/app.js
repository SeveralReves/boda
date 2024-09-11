import { createApp } from "vue";
import ConctactComponent from "./components/ConctactComponent.vue";
import DateComponent from "./components/DateComponent.vue";

// Crear una instancia de Vue para el componente DateComponent
const dateApp = createApp({});
dateApp.component("date-component", DateComponent);
dateApp.mount("#date-app");

// Crear una instancia de Vue para ContactComponent
const contactApp = createApp(ConctactComponent);
contactApp.mount("#contact-app");
