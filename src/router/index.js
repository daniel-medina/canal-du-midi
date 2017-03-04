/** Dependencies */
import Vue from 'vue'
import Router from 'vue-router'

/** Components */
import Index from '@/components/Index'
import Histoire from '@/components/Histoire'

Vue.use(Router)

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'index',
            component: Index
        },
	{
            path: '/histoire',
            name: 'histoire',
            component: Histoire
        }
    ]
})
