import Vue from 'vue';
import VueRouter from 'vue-router';
// components
import BlogComponent from "./BlogComponent";
import PostComponent from "./PostComponent";

Vue.use(VueRouter);

const Router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path:"/",
            name:"blog",
            component: BlogComponent
        },
        {
            path:"/post/:slug",
            name:"post",
            component:PostComponent
        },
    ]
})

export default Router;