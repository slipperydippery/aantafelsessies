<template>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close" @click="deleteModel">
		<span aria-hidden="true">&times;</span>
	</button>
</template>

<script>
    import {store} from '../app.js';

    export default {
        props: [
        	'model',
        	'model_id'
        ],

        data() {
            return {
            }
        },

        mounted() {
        },

        computed: {
        },

        methods: {
        	deleteModel() {
        		var home = this;
        		axios.delete('/api/' + this.model + '/' + this.model_id );
        	}
        }
    }
</script>