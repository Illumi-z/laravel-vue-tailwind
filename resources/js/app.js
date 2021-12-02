require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import {store} from '../store/index.js';

Vue.use(VueRouter);

let app = new Vue ({
    store: store,
    el: '#app',

    router: new VueRouter(routes)
})