require('./bootstrap');

window.Vue = require('vue');

Vue.component('test-component', require('./components/TestComponent.vue').default);
Vue.component('navbar-component', require('./components/parts/NavbarComponent.vue').default);
Vue.component('index-component', require('./components/pages/posts/IndexComponent.vue').default);

Vue.component('apiposts-component',require('./components/ApipostsComponent.vue').default);

Vue.component('axios-component',require('./components/Axios_LoginComponent.vue').default);

Vue.component('table1-component',require('./components/table/Table1Component.vue').default);

Vue.component('modal1-component',require('./components/modal/Modal1Component').default);

Vue.component('modal2-component',require('./components/modal/Modal2Edit').default);

Vue.component('modal3-component',require('./components/modal/Modal3Del').default);

Vue.component('auth-modal',require('./components/modal/AuthModal').default);

Vue.component('coin-component',require('./components/test/CoinComponent').default);

Vue.component('login-ajax',require('./components/modal/LoginAjax').default);

const app = new Vue({

    el: '#app',
});
