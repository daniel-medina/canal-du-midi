/**
 * Main frontend javascript file
 * Bundled with Webpack
 */

/** Loading dependencies */
import vue from 'vue';
import vueRouter from 'vue-router';

/** Loading elements generated with the bundle */
import scss from './sass/app.scss';

/** Using the router */
vue.use(vueRouter);

/** Loading components */
import index from './components/index.vue';
import histoire from './components/histoire.vue';

/** Loading routes */
const routes = [
    { path: '/', component: index },
    { path: '/histoire', component: histoire }
];

const router = new vueRouter({
    mode: 'history',
    routes
});

/** Serving the routes */
const app = new vue({
    router
}).$mount('#canal')
