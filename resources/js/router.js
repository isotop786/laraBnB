import VueRouter from "vue-router";
import comp2 from "./components/comp2";
import Bookables from "./bookables/Bookable";
import Bookables2 from "./bookables/Bookable2";
import bookings from "./bookables/bookings";


const routes = [
    {
        path:"/",
        component: Bookables,
        name :"Home"
    },

    {
        path:"/book",
        component: Bookables2,
        name:"About"
    },

    {
        path:"/bookings",
        component:bookings,
        name:"Bookings"
    }
    
]


// instantiating vue router

const router = new VueRouter({
    routes,
    mode: "history"

});

export default router;