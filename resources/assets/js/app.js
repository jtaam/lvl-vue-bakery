/**
 * JavaScript dependencies
 */

require('./bootstrap');

window.Vue = require('vue');
// Vue router
import Router from './components/frontend/routes.js'

// Moment js
import moment from 'moment';

// Vue filters
Vue.filter('userCreateDate', function(created){
    return moment(created).format('ll');
});
Vue.filter('commentCreateDate', function(created){
    return moment(created).subtract(1, 'days').calendar();
});
/**
 * Vue application instances
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('posts-list', require('./components/frontend/BlogComponent'));
Vue.component('post-categories', require('./components/frontend/PostCategoriesComponent'));
Vue.component('tag-clouds', require('./components/frontend/TagCloudsComponent'));
Vue.component('show-post', require('./components/frontend/PostComponent'));


// axios
const axios = require('axios');

const app = new Vue({
    el: '#app',
    router: Router
});


