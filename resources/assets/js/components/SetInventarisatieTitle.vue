<template>
	<div class="section__prepanel">
		Inventarisatie: {{ inventarisatie.title }} <i class="material-icons"> edit </i>
	</div>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
	        'inventarisatie_id'
        ],

        data() {
            return {
            	'inventarisatie': {},
            }
        },

        mounted() {
        	this.getInventarisatie();
        },

        computed: {
        },

        methods: {
        	getInventarisatie() {
        		var home = this;
        		axios.get('/api/inventarisatie/' + this.inventarisatie_id)
	        		.then(function(response){
	        			home.inventarisatie = response.data;
	        		})
        	}
        }
    }
</script>