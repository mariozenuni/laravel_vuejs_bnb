import VueRouter from "vue-router";
import Bookables from "./components/bookables/Bookables";
import Bookable from "./components/bookable/Bookable"
import Review from "./components/review/Review"
import Index from "./index";

const routes=[
    {
        path:"/",
        component:Bookables,
        name:"home"
    },
    {
        path:"/bookables/:id",
        component:Bookable,
        name:"bookable"
    },

    {
        path:"/review/:id",
        component:Review,
        name:"review" 
    }

    
];

// instancing the VueRouter object to create the route in Vue

const router = new VueRouter({
    routes,
    mode:"history",
});

// Exporting the const router, so making the above routes available inside the
//./components/app.js where we are going to tell Vue which route to use

export default router;
