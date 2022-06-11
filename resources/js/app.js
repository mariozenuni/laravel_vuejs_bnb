require('./bootstrap');

import router from "./routes";
import VueRouter from "vue-router";
import Index from "./index";

window.Vue = require('vue').default;

//inside every component we will have access to special objects prepanded with a dolar colled $route $router
Vue.use(VueRouter);


const app = new Vue({
    el: '#app',
    router,
     components:{
        "index":Index,
     }
});
