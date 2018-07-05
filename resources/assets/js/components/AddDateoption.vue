<template>
	<div class="">	
		<br>
		<h5>Voeg nog een datum toe</h5>
		<date-picker
			v-model="datetime"
		>
		</date-picker>
		<button class="btn btn-primary" @click="addDate">Voeg datum toe</button>
	</div>
</template>

<script>
    export default {
        props: [
	        'dateplanner_id'
        ],

        data() {
            return {
            	datetime: ''
            }
        },

        mounted() {
        },

        computed: {
        },

        methods: {
        	addDate() {
        		var home = this;
        		axios.post('/api/dateoption', {
        			datetime: home.datetime,
        			dateplanner_id: home.dateplanner_id,
        		})
        		.then( () => {
        			home.$emit('dateAdded');
        		} )
        	}
        }
    }
</script>