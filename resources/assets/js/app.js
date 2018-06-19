
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

export let store = {
	partners: {
	},
    activetheme: 1,
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('partner-cluster', require('./components/PartnerCluster.vue'));
Vue.component('set-partner', require('./components/SetPartner.vue'));
Vue.component('create-group', require('./components/CreateGroup.vue'));
Vue.component('set-invitations', require('./components/SetInvitations.vue'));

Vue.component('set-inventarisatie-title', require('./components/SetInventarisatieTitle.vue'));

const app = new Vue({
    el: '#app'
});
