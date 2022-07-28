import { createWebHistory, createRouter } from "vue-router";

// Auth Components
import Login from "../pages/login.vue";
import Register from "../pages/Register.vue";
// Auth Components
import Home from "../pages/Home.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/login",
        name: "Login",
        component: Login,
    },
    {
        path: "/register",
        name: "Register",
        component: Register,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
