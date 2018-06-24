<template>
	<div class="">
		<i class="material-icons clickable" @click="toggleMeasure()" v-if="measure.active"> check_box </i>
		<i class="material-icons clickable" @click="toggleMeasure()" v-if="! measure.active"> check_box_outline_blank </i>
		<textarea placeholder="Actie Omschrijving" rows="6" class="" v-model="measure.measure" :disabled="! measure.active"></textarea>
	</div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
	        'measure_id'
        ],

        data() {
            return {
            	'measure': {}
            }
        },

        mounted() {
        	this.getMeasure();
        },

        computed: {
        },

        methods: {
        	getMeasure() {
        		var home = this;
        		axios.get('/api/measure/' + this.measure_id)
	        		.then(function(response){
	        			home.measure = response.data
	        		})
        	},

        	toggleMeasure() {
        		this.measure.active = ! this.measure.active;
        	},
        }
    }
</script>