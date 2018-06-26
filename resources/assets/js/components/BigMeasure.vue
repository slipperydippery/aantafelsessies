<template>
	<div class="">
		<textarea 
            class="form-control" 
            placeholder="Actie Omschrijving"
            rows="6"
            v-model="measure.measure" 
            @blur="updateMeasure()"
        ></textarea>
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
                this.updateMeasure();
        	},

            updateMeasure() {
                axios.post('/api/measure/' + this.measure_id + '/update', {
                        'measure': this.measure
                    })
                    .then(function(response) {

                    })
            }
        }
    }
</script>