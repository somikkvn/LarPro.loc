require('./bootstrap');

window.Vue = require('vue');

Vue.component('test-component', require('./components/TestComponent.vue').default);
Vue.component('navbar-component', require('./components/parts/NavbarComponent.vue').default);
Vue.component('index-component', require('./components/pages/posts/IndexComponent.vue').default);

Vue.component('apiposts-component',require('./components/ApipostsComponent.vue').default);

const app = new Vue({

    el: '#app',
});
