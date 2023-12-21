import  { createRouter , createWebHistory} from "vue-router";

const routes = [
    {
        path: '/',
        component: () => import("../views/Home.vue"),
        name: 'home',
        meta: {
            title: 'Home Page'
        }
    },
    {
        path: '/:catchAll(.*)',
        component: () => import("../views/NotFound"),
        name: 'not_found',
        meta: {
            title: 'Not Found'
        }
    }
];


const router= createRouter({
    history: createWebHistory(),
    routes
});

router.beforeEach((to, from, next) => {
    document.title = to.meta.title;
    next();
});
export default router;
