<template>
	<div class="row row__cards">
	    <div class="col-md-4" v-for="partner in partners">
            <div class="card ">
                <div class="card-body">
                    <h5 class="card-title"> {{ partner.instantie.name }} 
                        <i class="material-icons clickable muted" v-b-tooltip.hover :title="partner.instantie.description"> info </i>
                    </h5>
                    <set-partner
		            	:initPartner = partner
		            >
		            </set-partner>
                </div>
            </div>
	    </div>
	</div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
	        'instantietype_id',
	        'inventarisatie_id'
        ],

        data() {
            return {
        		partners: [],
            	store,
                show: false,
            }
        },

        mounted() {
        	this.getInstanties();
        },

        computed: {
        },

        methods: {
        	getInstanties() {
        		var home = this;
        		axios.get('/api/inventarisatie/' + this.inventarisatie_id + '/instantietype/' + this.instantietype_id + '/instantie')
	        		.then(function(response){
	        			response.data.forEach(function(instantie){
	        				home.partners.push(instantie);
	        			})
	        		});
        	},
        }
    }
</script>