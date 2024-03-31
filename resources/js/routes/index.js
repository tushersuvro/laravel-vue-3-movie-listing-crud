import {createRouter, createWebHistory} from "vue-router";
import MoviesIndex from "../components/Movies/Index.vue";
import MoviesCreate from "../components/Movies/Create.vue";

const routes = [
    {
        path: '/',
        name: 'movies.index',
        component: MoviesIndex
    },
    {
        path: '/movies/create',
        name: 'movies.create',
        component: MoviesCreate
    }
]

export default createRouter({
    history: createWebHistory(),
    routes: routes
})
