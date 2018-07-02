<template>
	<date-picker
		v-if="followup.datetime"
		v-model="followup.datetime"
		@input="updateFollowup"
		:disabled="beheerder"
	>
	</date-picker>

</template>

<script>

    export default {
        props: [
        	'group_id',
        	'beheerder'
        ],

        data() {
            return {
            	'followup': ''
            }
        },

        mounted() {
        	this.getFollowup(this.group_id);
        },

        computed: {
        },

        methods: {
        	getFollowup(group_id){
        		var home = this;
        		axios.get('/api/group/' + group_id + '/followup')
        			.then(function(response){
        				home.followup = response.data;
        			})
        	},

        	updateFollowup(){
        		var home = this;
        		axios.post('/api/followup/' + this.followup.id + '/update', {
        			followup: this.followup
        		})
        	},
        }
    }
</script>