require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('menu-container', require('./components/modules/menu/menuContainer.vue').default);



const app = new Vue({
    el: '#app'
});
