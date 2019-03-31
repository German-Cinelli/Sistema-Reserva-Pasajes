
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

//Travel
Vue.component('travels-component', require('./components/travels/TravelsComponent.vue'));
Vue.component('add-travel-btn', require('./components/travels/AddTravelComponent.vue'));
Vue.component('create-form-travel', require('./components/travels/CreateTravelComponent.vue'));

//Ticket
Vue.component('create-form-ticket', require('./components/tickets/CreateTicketComponent.vue'));
Vue.component('add-ticket-btn', require('./components/tickets/AddTicketComponent.vue'));

//Test
Vue.component('tests-component', require('./components/tests/TestsComponent.vue'));
Vue.component('add-test-btn', require('./components/tests/AddTestComponent.vue'));
Vue.component('create-form-test', require('./components/tests/CreateTestComponent.vue'));

//Equipament
Vue.component('equipaments-component', require('./components/equipaments/EquipamentsComponent.vue'));
Vue.component('add-equipament-btn', require('./components/equipaments/AddEquipamentComponent.vue'));
Vue.component('create-form-equipament', require('./components/equipaments/CreateEquipamentComponent.vue'));


Vue.component('spinner', require('./components/Spinner.vue'));


const app = new Vue({
    el: '#app'
});
