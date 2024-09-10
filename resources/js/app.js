import { createApp } from 'vue';
import App from './components/App.vue';
// import HeaderComponent from './components/HeaderComponent.vue';

// Crear la aplicación Vue principal
const app = createApp(App);

// Registrar y montar el componente HeaderComponent dentro del header
// app.component('HeaderComponent', HeaderComponent);

// Montar la aplicación principal en el contenedor #app
app.mount('#app');

// Montar el componente HeaderComponent en el contenedor #header-vue
// const headerApp = createApp(HeaderComponent);
// headerApp.mount('#header-vue');
