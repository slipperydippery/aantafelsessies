<template>
	<div class="row">
		<div class="col-sm-4">
			<span 
				class="clickable selectable selectable--active"
				v-if="measure.user"
				@click="removeFrontrunner()"
			> 
				{{ measure.user.user.name }}
            </span>
		</div>
		<div class="col-sm-8">
			<span 
				class="clickable selectable selectable--passive"
				v-for="scan in group.scans"
				@click="setFrontrunner(scan)"
				v-if="isntActiveScan(scan)"
			> 
                {{ scan.user.name }}
            </span>
		</div>
	</div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
        	'measure_id',
        	'group_id'
        ],

        data() {
            return {
            	'measure': {},
            	'group': {},
            }
        },

        mounted() {
        	this.getMeasure();
        	this.getScans();
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

        	getScans() {
        		var home = this;
        		axios.get('/api/group/' + this.group_id + '/scan')
        			.then(function(response) {
        				home.group = response.data;
        			})
        	},

        	setFrontrunner(scan) {
        		this.measure.user = scan;
        		this.updateMeasure();
        	},

        	removeFrontrunner() {
        		this.measure.user = null;
        		this.updateMeasure();
        	},

            updateMeasure() {
                axios.post('/api/measure/' + this.measure_id + '/update', {
                        'measure': this.measure
                    })
                    .then(function(response) {

                    })
            },
            
        	isntActiveScan(scan){
        		if(this.measure.user){
        			if(scan.id == this.measure.user.id){
        				return false;
        			}
        		}
        		return true;
        	},
        }
    }
</script>