/**
 * JavaScript dependencies
 */

require('./bootstrap');

window.Vue = require('vue');
// Moment js
import moment from 'moment';

// Vue filters
Vue.filter('userCreateDate', function(created){
    return moment(created).format('ll');
});
/**
 * Vue application instances
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('posts-list', require('./components/frontend/BlogComponent'));
Vue.component('post-categories', require('./components/frontend/PostCategoriesComponent'));

const app = new Vue({
    el: '#app'
});


