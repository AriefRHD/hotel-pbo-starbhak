import { createApp } from "vue";
import App from "./App.vue";
import store from "./store";
import router from "./router";
import "./assets/css/nucleo-icons.css";
import "./assets/css/nucleo-svg.css";
import ArgonDashboard from "./argon-dashboard";

//import Bootstrap, Popper, jQuery
// import 'bootstrap/dist/css/bootstrap.css'
// import 'jquery/dist/jquery.min'
// import 'popper.js/dist/popper.min'
// import 'bootstrap/dist/js/bootstrap.min'

const appInstance = createApp(App);
appInstance.use(store);
appInstance.use(router);
appInstance.use(ArgonDashboard);
appInstance.mount("#app");
