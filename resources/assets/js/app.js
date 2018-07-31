/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

window.Vue = require('vue');
import BootstrapVue from 'bootstrap-vue'
import PortalVue from 'portal-vue'
Vue.use(BootstrapVue);
Vue.use(PortalVue);


export let store = {
	scan: {
		answers: [
			 { "id": 1, "answer": null},
			 { "id": 2, "answer": null},
			 { "id": 3, "answer": null},
			 { "id": 4, "answer": null},
			 { "id": 5, "answer": null},
			 { "id": 6, "answer": null},
			 { "id": 7, "answer": null},
			 { "id": 8, "answer": null},
			 { "id": 9, "answer": null},
			 { "id": 10, "answer": null},
			 { "id": 11, "answer": null},
			 { "id": 12, "answer": null},
			 { "id": 13, "answer": null},
			 { "id": 14, "answer": null},
			 { "id": 15, "answer": null},
		],
	},
	group: {},
	partners: {
	},
    activetheme: 1,
};

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Gesprekspartners
Vue.component('partner-cluster', require('./components/PartnerCluster.vue'));
Vue.component('set-partner', require('./components/SetPartner.vue'));

// Create Scan or group
Vue.component('create-group', require('./components/CreateGroup.vue'));
Vue.component('set-invitations', require('./components/SetInvitations.vue'));
Vue.component('create-groupscan', require('./components/CreateGroupscan.vue'));

// Scan itself
Vue.component('algemeenbeeld', require('./components/Algemeenbeeld.vue'));
Vue.component('algemeenbeeldresultaten', require('./components/Algemeenbeeldresultaten.vue'));

Vue.component('scan-results', require('./components/ScanResults.vue'));

Vue.component('scan-slider', require('./components/ScanSlider.vue'));
Vue.component('result-slider', require('./components/ResultSlider.vue'));
Vue.component('average-slider', require('./components/AverageSlider.vue'));
Vue.component('result-slider-average', require('./components/ResultSliderAverage.vue'))

Vue.component('mini-measure', require('./components/MiniMeasure.vue'));
Vue.component('big-measure', require('./components/BigMeasure.vue'));
Vue.component('frontrunner', require('./components/Frontrunner.vue'));

Vue.component('set-followup', require('./components/SetFollowup.vue'));

Vue.component('dateplanner', require('./components/Dateplanner.vue'));
Vue.component('dateoption', require('./components/Dateoption.vue'));
Vue.component('add-dateoption', require('./components/AddDateoption.vue'));
Vue.component('set-availability', require('./components/SetAvailability.vue'));

// Utility
Vue.component('countdown', require('./components/Countdown.vue'));

// Controlled Components
Vue.component('slider-input', require('./components/SliderInput.vue'));
Vue.component('date-picker', require('./components/DatePicker.vue'));
Vue.component('remove-modal', require('./components/RemoveModal.vue'));
Vue.component('copy-icon', require('./components/CopyIcon.vue'));
Vue.component('closebutton-input', require('./components/ClosebuttonInput.vue'));

//old 
Vue.component('set-inventarisatie-title', require('./components/SetInventarisatieTitle.vue'));



const app = new Vue({
    el: '#app'
});

