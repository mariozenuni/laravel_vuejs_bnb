require('./bootstrap');

import router from "./routes";
import VueRouter from "vue-router";
import Index from "./index";
import moment from "moment";
import StarRating from "./shared/components/rating/StarRating"
window.Vue = require('vue').default;

//inside every component we will have access to special objects prepanded with a dolar colled $route $router
Vue.use(VueRouter);
//registred globaly star-rating
Vue.component('star-rating',StarRating);
//adding filter globaly 
Vue.filter('dateFormat', date => moment(date).fromNow());


const app = new Vue({
    el: '#app',
    router,
     components:{
        "index":Index,
     }
});
