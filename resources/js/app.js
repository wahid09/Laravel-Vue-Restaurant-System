require('./bootstrap');

require('vue-multiselect/dist/vue-multiselect.min.css');

window.Vue = require('vue');

/**
 * [Global Component ]
 * @type {Vue}
 */
Vue.component('card-component', require('./components/card.vue').default);


Vue.component('menu-container', require('./components/modules/menu/menuContainer.vue').default);



const app = new Vue({
    el: '#app'
});
