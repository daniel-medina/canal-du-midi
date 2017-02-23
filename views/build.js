/**
 * Vue dependencies
 */
const vue = require('vue/dist/vue.js');
const vueRouter = require('vue-router');
vue.use(vueRouter);

/** Loading components */
const index = require('./index.vue');
const test = require('./test.vue');

const routes = [
    { path: '/', component: index },
    { path: '/test', component: test}
];

const router = new vueRouter({
    mode: 'history',
    routes
});

const app = new vue({
    router
}).$mount('#canal');
